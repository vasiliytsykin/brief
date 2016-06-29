<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 26.06.16
 * Time: 21:37
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Form\Type\CompanyType;
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
        $company = new Company();

        $companyForm = $this->createForm(CompanyType::class, $company);

        $companyForm->handleRequest($request);

        if($companyForm->isSubmitted())
            return new Response(var_dump($company));
        else
            return $this->render(":forms:company.html.twig", array('form' => $companyForm->createView()));
    }
    
    /**
     * @Route("/home/get_form/{formName}", name="get_form")
     * @Method("POST")
     */
    public function getFormAction($formName, Request $request)
    {
        return $this->render("forms/{$formName}.html.twig");
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