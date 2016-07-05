<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 30.06.16
 * Time: 22:59
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Manager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class ManagerRepository extends BaseRepository
{
    public function addDataClassToSession($formName, Manager $dataClass, Request $request, Form $form = null)
    {
        $manager = $this->findOneByManagerName($dataClass->getManagerName());
        $dataParam = $manager ? $manager:
            $dataClass->setCompany(
                $request
                    ->getSession()
                    ->get('formArray')
                    ['Company']
            );

        parent::addDataClassToSession($formName, $dataParam, $request);
    }
}