<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Entity\Image;

use App\Form\ProjectType;

use App\Repository\ProjectRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin/project", name="admin_project_")
 */
class ProjectController extends AbstractController
{

    /**
     * @Route("", name="browse")
     */
    public function browse(ProjectRepository $projectRepository)
    {
        $projects = $projectRepository->findProjects();
        
        return $this->render('admin/project/list.html.twig', [
            'projects' => $projects,
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $project = new Project();

        $form = $this->createForm(ProjectType::class, $project);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $mainImage = $form->get('mainImageForm')->getData();
            $images = $form->get('imagesForm')->getData();

            if($mainImage) {

                $mainImageName = str_replace(' ','', $mainImage->getClientOriginalName());
                
                $mainImage->move('images', $mainImageName);

                $project->setMainImage($mainImageName);
            }

            if($images) {
                foreach ($images as $image) {

                    $imageEntity = new Image();

                    $imageName = str_replace(' ','',$image->getClientOriginalName());
                    
                    $image->move('images', $imageName);

                    $imageEntity->setPath($imageName);
                    $imageEntity->setProject($project);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($imageEntity);
                }
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('admin_project_browse');
        }

        return $this->render('admin/project/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function edit($id, Request $request, ProjectRepository $projectRepository)
    {
        $project = $projectRepository->findProject($id);

        $form = $this->createForm(ProjectType::class, $project);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            
            $mainImage = $form->get('mainImageForm')->getData();
            $images = $form->get('imagesForm')->getData();

            if($mainImage) {

                $mainImageName = str_replace(' ','', $mainImage->getClientOriginalName());
                
                $mainImage->move('images', $mainImageName);

                $project->setMainImage($mainImageName);
            }

            if($images) {
                foreach ($images as $image) {

                    $imageEntity = new Image();

                    $imageName = str_replace(' ','',$image->getClientOriginalName());
                    
                    $image->move('images', $imageName);

                    $imageEntity->setPath($imageName);
                    $imageEntity->setProject($project);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($imageEntity);
                }
            }

            $project->setUpdatedAt(new \Datetime());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('admin_project_browse');
        }

        return $this->render('admin/project/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

     /**
     * @Route("/delete/{id}", name="delete", requirements={"id": "\d+"})
     */
    public function delete($id, Request $request, Project $project)
    {

        if($project) {

            if($project->getImages()) {

                foreach ($project->getImages() as $image) {
                    $project->removeImage($image);
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                }
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush();
        }

        return $this->redirectToRoute('admin_project_browse');
    }
}
