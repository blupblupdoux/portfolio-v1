<?php

namespace App\Controller\Admin;

use App\Entity\About;

use App\Form\AboutType;

use App\Repository\AboutRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/about", name="admin_about_")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="browse")
     */
    public function browse(AboutRepository $aboutRepository)
    {
        $aboutList = $aboutRepository->findAll();

        return $this->render('admin/about/list.html.twig', [
            'aboutList' => $aboutList,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function edit($id, Request $request, About $about)
    {
        $form = $this->createForm(AboutType::class, $about);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $about->setUpdatedAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('admin_about_browse');
        }

        return $this->render('admin/about/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
