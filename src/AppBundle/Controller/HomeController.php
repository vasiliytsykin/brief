<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brief;
use AppBundle\Entity\Company;
use AppBundle\Entity\Manager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
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
        $formIdArray = array();
        $request->getSession()->set('formIdArray', $formIdArray);
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
        $dataClass = new $className;
        
        $initialData = $formName != 'ModuleSection'? $dataClass: null;
        
        $form = $this->createForm($formType, $initialData);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $formIdArray = $request->getSession()->get('formIdArray');

            if($formName == 'ModuleSection')
                $dataClass = $dataClass->
                setSiteModules($this->
                getModules($request->request->get($form->getName())));

            if($formName == 'Manager')
                $dataClass = $dataClass->setCompanyId($formIdArray['Company']);


            $formIdArray[$formName] = $this->saveToDB($dataClass);
            $request->getSession()->set('formIdArray', $formIdArray);


            return $this->redirect($this->path[$formName]);
        }
        else
            return $this->renderForm($dataClass, $form, $formName);
    }


    private function saveToDB($dataClass)
    {
        $em = $this->getDoctrine()->getManager();
            $em->persist($dataClass);
            $em->flush();
        return $dataClass->getId();
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

    private function getModules($data)
    {
        $result = '';
        foreach ($data as $module => $value)
            if ($value && $module != '_token')
                $result = $result . $value . ', ';

        return trim($result, ', ');

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
        $formIdArray = $request->getSession()->get('formIdArray');

        foreach ($formIdArray as $formName => $value)
        {
            $setProp = "set{$formName}Id";
            $brief = $brief->$setProp($value);
        }

        $briefId = $this->saveToDB($brief);

        return $this->redirectToRoute("get_report", ['id' => $briefId], 301);
    }

    /**
     * @Route("/home/get_report/{id}", name="get_report")
     * @Method("GET")
     */
    public function getReportAction($id, Request $request)
    {

        $brief = $this->getDoctrine()->getRepository(Brief::class)->find($id);
        $company = $this->getDoctrine()->getRepository(Company::class)->find($brief->getCompanyId());
        $manager = $this->getDoctrine()->getRepository(Manager::class)->find($brief->getManagerId());
        $uri = $request->getUri();

        return $this->render(':default:report.html.twig', array(
            'company' => $company,
            'manager' => $manager,
            'uri' => $uri
        ));
    }
}