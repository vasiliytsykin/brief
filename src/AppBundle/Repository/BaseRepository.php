<?php

namespace AppBundle\Repository;


use ReflectionClass;
use ReflectionMethod;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class BaseRepository extends \Doctrine\ORM\EntityRepository
{
    public function addDataClassToSession($formName, $dataClass, Request $request, Form $form = null)
    {
        $em = $this->getEntityManager();
        $em->persist($dataClass);
        $em->flush();
        
        $formArray = $request->getSession()->get('formArray');
        $formArray[$formName] = $dataClass->getId();
        $request->getSession()->set('formArray', $formArray);
    }

    public function update($old, $new)
    {
        $rcOld = new ReflectionClass($old);
        $methods = $rcOld->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($methods as $method)
        {
            $methodName = $method->name;
            if(strpos($methodName, "set") !== false)
            {
                $getter = str_replace("set", "get", $methodName);
                $value = $new->$getter();
                $old = $method->invokeArgs($old, [$value]);
            }
        }

        return $old;
    }
}