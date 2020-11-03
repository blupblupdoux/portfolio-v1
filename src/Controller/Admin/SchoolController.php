<?php

namespace App\Controller\Admin;

use App\Controller\Admin\TypeController;

use App\Entity\School;

use App\Form\SchoolType;

use App\Repository\SchoolRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/type/school", name="admin_type_school_")
 */
class SchoolController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $school = new School();

        $form = $this->createForm(SchoolType::class, $school);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($school);
            $em->flush();

            return $this->redirectToRoute('admin_type_browse');
        }

        return $this->render('admin/type/form.html.twig', [
            'form' => $form->createView(),
            'typeName' => 'school',
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function edit($id, School $school, Request $request)
    {
        $form = $this->createForm(SchoolType::class, $school);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $school->setUpdatedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('admin_type_browse');
        }

        return $this->render('admin/type/form.html.twig', [
            'form' => $form->createView(),
            'typeName' => 'school',
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", requirements={"id": "\d+"})
     */
    public function delete($id, Request $request, School $school)
    {

        if($school) {

            $em = $this->getDoctrine()->getManager();
            $em->remove($school);
            $em->flush();
        }

        return $this->redirectToRoute('admin_type_browse');
    }
}
