<?php

namespace App\Controller\Admin;

use App\Repository\JobRepository;
use App\Repository\SchoolRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin/type", name="admin_type_")
 */
class TypeController extends AbstractController
{
    /**
     * @Route("/", name="browse")
     */
    public function browse(JobRepository $jobRepository, SchoolRepository $schoolRepository)
    {
        $jobs = $jobRepository->findAll();
        $schools = $schoolRepository->findAll();

        return $this->render('admin/type/list.html.twig', [
            'jobs' => $jobs,
            'schools' => $schools,
        ]);
    }
}
