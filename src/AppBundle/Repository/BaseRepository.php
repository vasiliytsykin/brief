<?php

namespace AppBundle\Repository;


use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class BaseRepository extends \Doctrine\ORM\EntityRepository
{
    public function addDataClassToSession($formName, $dataClass, Request $request, Form $form = null)
    {
        $formArray = $request->getSession()->get('formArray');
        $formArray[$formName] = $dataClass;
        $request->getSession()->set('formArray', $formArray);
    }
}