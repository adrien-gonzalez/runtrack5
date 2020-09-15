<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projets;
use Doctrine\ORM\EntityManagerInterface;


class MyEntrepriseController extends AbstractController
{
	/**
    * @Route("/", name="home")
    */
    public function home()
    {
    	

    	return $this->render('my_entreprise/home.html.twig', [
            'controller_name' => 'MyEntrepriseController',
           
        ]);

    }
    /**
     * @Route("/myEntreprise", name="myEntreprise")
     */
    public function index()
    {
    	$projets = new Projets;
       	$projets= $this->getDoctrine()->getRepository(Projets::class)->findAll();
        return $this->render('my_entreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
             'projets'=> $projets, 
        ]);
    }
   
    /**
    * @Route("myEntreprise/project/{id}", name="project_page")
    */
    public function projectPage($id)
    {
    	$projets = new Projets;
    	$projets =$this->getDoctrine()->getRepository(Projets::class)->find($id);
    	return $this->render('my_entreprise/projectPage.html.twig', [
            'controller_name' => 'MyEntrepriseController', 
            'id' => $projets,
        ]);
    }
}
