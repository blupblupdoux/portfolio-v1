<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use App\Repository\JobRepository;
use App\Repository\SchoolRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/about", name="about_")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="browse")
     */
    public function browse(AboutRepository $aboutRepository, JobRepository $jobRepository, SchoolRepository $schoolRepository)
    {
        $about = $aboutRepository->findAll();

        $jobs = $jobRepository->findJobs();

        $schools = $schoolRepository->findSchools();

        return $this->render('about/index.html.twig', [
            'aboutList' => $about,
            'jobs' => $jobs,
            'schools' => $schools,
        ]);
    }
}
