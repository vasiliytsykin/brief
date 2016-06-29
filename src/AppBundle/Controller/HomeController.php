<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('get_form', ['formName' => 'Company']);
    }
    
    /**
     * @Route("/home/get_form/{formName}", name="get_form")
     */
    public function getFormAction($formName, Request $request)
    {
        $className = "AppBundle\\Entity\\{$formName}";
        $formType = "AppBundle\\Form\\Type\\{$formName}Type";

        $dataClass = new $className;

        $form = $this->createForm($formType, $dataClass);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dataClass);
            $em->flush();
            return $this->redirect($dataClass->action);
        }
        else
            return $this->render(":form:{$formName}.html.twig", array(
                'dataClass' => $dataClass,
                'form' => $form->createView()));
    }

    /**
     * @Route("/home/create_report", name="create_report")
     * @Method("POST")
     */
    public function createReportAction()
    {
        return $this->redirectToRoute("get_report", ['id' => 1], 301);
    }

    /**
     * @Route("/home/get_report/{id}", name="get_report")
     * @Method("GET")
     */
    public function getReportAction($id)
    {
        return new Response("report {$id}");
    }
}