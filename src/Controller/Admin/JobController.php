<?php

namespace App\Controller\Admin;

use App\Controller\Admin\TypeController;

use App\Entity\Job;

use App\Form\JobType;

use App\Repository\JobRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin/type/job", name="admin_type_job_")
 */
class JobController extends TypeController
{
    
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $job = new Job();

        $form = $this->createForm(JobType::class, $job);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('admin_type_browse');
        }

        return $this->render('admin/type/form.html.twig', [
            'form' => $form->createView(),
            'typeName' => 'job',
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function edit($id, Job $job, Request $request)
    {
        $form = $this->createForm(JobType::class, $job);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $job->setUpdatedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('admin_type_browse');
        }

        return $this->render('admin/type/formJob.html.twig', [
            'form' => $form->createView(),
            'typeName' => 'job',
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete", requirements={"id": "\d+"})
     */
    public function delete($id, Request $request, Job $job)
    {

        if($job) {

            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('admin_type_browse');
    }
}
