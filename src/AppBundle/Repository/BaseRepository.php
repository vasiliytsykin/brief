<?php

namespace AppBundle\Repository;


use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\Form;

class BaseRepository extends \Doctrine\ORM\EntityRepository
{
    public function addDataClassToSession($formName, $dataClass, Request $request = null, Form $form = null)
    {
        $formArray = $request->getSession()->get('formArray');
        $formArray[$formName] = $dataClass;
        $request->getSession()->set('formArray', $formArray);
    }
}