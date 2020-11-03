<?php

namespace App\Controller\Admin;

use App\Entity\Tag;

use App\Form\TagType;

use App\Repository\TagRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin/tag", name="admin_tag_")
 */
class TagController extends AbstractController
{
    /**
     * @Route("/", name="browse")
     */
    public function browse(TagRepository $tagRepository)
    {
        $tags = $tagRepository->findAll();

        return $this->render('admin/tag/list.html.twig', [
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $tag = new Tag();

        $form = $this->createForm(TagType::class, $tag);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirectToRoute('admin_tag_browse');
        }

        return $this->render('admin/tag/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function edit($id, Tag $tag, Request $request)
    {
        $form = $this->createForm(TagType::class, $tag);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $tag->setUpdatedAt(new \Datetime());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('admin_tag_browse');
        }

        return $this->render('admin/tag/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", requirements={"id": "\d+"})
     */
    public function delete($id, Request $request, Tag $tag)
    {

        if($tag) {

            $em = $this->getDoctrine()->getManager();
            $em->remove($tag);
            $em->flush();
        }

        return $this->redirectToRoute('admin_tag_browse');
    }
}
