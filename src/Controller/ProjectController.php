<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use App\Repository\TagRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/", name="project_")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("", name="browse")
     */
    public function browse(ProjectRepository $projectsRepository, TagRepository $tagRepository)
    {
        $projects = $projectsRepository->findProjects();
        $tags = $tagRepository->findAll();

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/type/{type}", name="browse_by_type")
     */
    public function browseByType($type, ProjectRepository $projectsRepository,  TagRepository $tagRepository)
    {
        $tags = $tagRepository->findAll();
        $projects = $projectsRepository->findProjectByType($type);

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/tag/{tag}", name="browse_by_tag")
     */
    public function browseByTag($tag, TagRepository $tagRepository)
    {
        $tags = $tagRepository->findAll();
        $tag = $tagRepository->findTag($tag);

        return $this->render('project/index.html.twig', [
            'projects' => $tag->getProjects(),
            'tags' => $tags,
        ]);
    }

    /**
     * @Route("/{id}", name="read", requirements={"id": "\d+"})
     */
    public function read($id, ProjectRepository $projectsRepository)
    {
        $project = $projectsRepository->findProject($id);

        return $this->render('project/read.html.twig', [
            'project' => $project,
        ]);
    }
}
