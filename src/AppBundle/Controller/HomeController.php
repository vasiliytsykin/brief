<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brief;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;


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
        $formArray = array();
        $request->getSession()->set('formArray', $formArray);
        return $this->redirectToRoute('get_form', ['formName' => 'Company']);
    }
    
    /**
     * @Route("/home/get_form/{formName}", name="get_form")
     *
     */
    public function getFormAction($formName, Request $request)
    {
        $className = "AppBundle\\Entity\\{$formName}";
        $formType = "AppBundle\\Form\\{$formName}Type";
        $repository = $this->getDoctrine()->getRepository($className);
        $dataClass = new $className;
        
        $initialData = $formName != 'ModuleSection'? $dataClass: null;
        
        $form = $this->createForm($formType, $initialData);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $repository->addDataClassToSession($formName, $dataClass, $request, $form);
            return $this->redirect($this->path[$formName]);
        }
        else
            return $this->renderForm($dataClass, $form, $formName);
    }


    private function renderForm($dataClass, Form $form, $formName)
    {
        return $this->render(":form:formBase.html.twig", array(
            'dataClass' => $dataClass,
            'form' => $form->createView(),
            'formHeader' => $this->formHeader[$formName],
            'buttonLabel' => $this->getBunttonLabel($formName)
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
    public function createReportAction(Request $request)
    {
        $brief = new Brief();
        $formArray = $request->getSession()->get('formArray');
        $em = $this->getDoctrine()->getManager();

        foreach ($formArray as $formName => $id)
        {
            $entity = $this->getDoctrine()
                ->getRepository("AppBundle\\Entity\\{$formName}")
                ->find($id);
            $setProp = "set{$formName}";
            $brief = $brief->$setProp($entity);
        }

        $em->persist($brief);
        $em->flush();

        return $this->redirectToRoute("get_report", ['id' => $brief->getId()], 301);
    }

    /**
     * @Route("/home/get_report/{id}", name="get_report")
     * @Method("GET")
     */
    public function getReportAction($id, Request $request)
    {

        $brief = $this->getDoctrine()->getRepository(Brief::class)->find($id);
        $company = $brief->getCompany();
        $manager = $brief->getManager();
        $uri = $request->getUri();

        return $this->render(':default:report.html.twig', array(
            'company' => $company,
            'manager' => $manager,
            'uri' => $uri
        ));
    }
}