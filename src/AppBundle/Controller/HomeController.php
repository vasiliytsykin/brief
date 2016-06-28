<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 26.06.16
 * Time: 21:37
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render("default/index.html.twig");
    }
    
    /**
     * @Route("/home/get_form/{formName}", name="get_form")
     * @Method("POST")
     */
    public function getFormAction($formName)
    {
        return $this->render("forms/{$formName}.html.twig");
    }

    /**
     * @Route("/home/create_report", name="create_report")
     * @Method("POST")
     */
    public function createReportAction()
    {
        return new Response("ok");
    }

    /**
     * @Route("/home/get_report/{id}", name="get_report")
     * @Method("GET")
     */
    public function getReportAction($id)
    {
        
    }
}