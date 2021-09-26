<?php

namespace App\Controller;

use App\Entity\Adherents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AdherentsFormType;
use Symfony\Component\HttpFoundation\Request;

class AdherentsController extends AbstractController
{
    /**
     * @Route("/adherents", name="adherents")
     */
    public function index(): Response
    {
        return $this->render('adherents/index.html.twig', [
            'controller_name' => 'AdherentsController',
        ]);
    }

    /**
     * @Route("/add-adherents", name="add_adherents")
     */
    public function addAdherents(Request $request): Response
    {
        $adherents = new Adherents();
        $form = $this->createForm(AdherentsFormType::class, $adherents);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($adherents);
            $entityManager->flush();
        }

        return $this->render("adherents/adherents-form.html.twig", [
            "form_title" => "Ajouter un adhérent",
            "form_adherent" => $form->createView(),
        ]);
    }
}
