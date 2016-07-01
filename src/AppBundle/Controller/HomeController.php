<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    private $path = array(
        'Company' => '/home/get_form/Manager',
        'Manager' => '/home/get_form/MarketingSection',
        'MarketingSection' => '/home/get_form/GeneralInfoSection',
        'GeneralInfoSection' => '/home/get_form/DesignSection',
        'DesignSection' => '/home/get_form/TechDesignSection',
        'TechDesignSection' => '/home/get_form/MakeupSection',
        'MakeupSection' => '/home/get_form/CodeSection',
        'CodeSection' => '/home/get_form/ModuleSection',
        'ModuleSection' => '/home/create_report'
        );

    private $formHeader = array(
        'Company' => 'Создать бриф',
        'Manager' => 'Менеджер проекта',
        'MarketingSection' => 'Анализ рынка и конкурентной среды',
        'GeneralInfoSection' => 'Общие сведения о разрабатываемом сайте',
        'DesignSection' => 'Пожелание к дизайну сайта',
        'TechDesignSection' => 'Технические требования к дизайну сайта',
        'MakeupSection' => 'Технические требования верстке сайта',
        'CodeSection' => 'Технические требования к программному коду',
        'ModuleSection' => 'Программные модули'
        );

    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('get_form', ['formName' => 'Company']);
    }
    
    /**
     * @Route("/home/get_form/{formName}", name="get_form", requirements={"formName": "[^ModuleSection]"})
     */
    public function getFormAction($formName, Request $request)
    {
        $className = "AppBundle\\Entity\\{$formName}";
        $formType = "AppBundle\\Form\\{$formName}Type";

        $dataClass = new $className;

        $form = $this->createForm($formType, $dataClass);

        $form->handleRequest($request);

        if($form->isValid())
        {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($dataClass);
            $em->flush();*/
            return $this->redirect($this->path[$formName]);
        }
        else
            return $this->render(":form:formBase.html.twig", array(
                'dataClass' => $dataClass,
                'form' => $form->createView(),
                'formHeader' => $this->formHeader[$formName],
                'buttonLabel' => $this->getBunttonLabel($formName)
                ));
    }

    /**
     * @Route("/home/get_form/ModuleSection")
     */
    public function getModuleSectionAction(Request $request)
    {
        $className = "AppBundle\\Entity\\ModuleSection";
        $formType = "AppBundle\\Form\\ModuleSectionType";

        $dataClass = new $className;

        $form = $this->createForm($formType);

        $form->handleRequest($request);

        if($form->isValid())
        {
            /*$em = $this->getDoctrine()->getManager();
            $em->persist($dataClass);
            $em->flush();*/
            return $this->redirect($this->path['ModuleSection']);
        }
        else
            return $this->render(":form:formBase.html.twig", array(
                'form' => $form->createView(),
                'formHeader' => $this->formHeader['ModuleSection'],
                'buttonLabel' => $this->getBunttonLabel('ModuleSection')
            ));
    }


    private function getBunttonLabel($formName)
    {
        return $formName == 'ModuleSection' ? 'Готово': 'Далее >';
    }
    
    /**
     * @Route("/home/create_report", name="create_report")
     * @Method("GET")
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