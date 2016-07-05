<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 30.06.16
 * Time: 22:59
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Company;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class CompanyRepository extends BaseRepository
{
    public function addDataClassToSession($formName, Company $dataClass, Request $request, Form $form = null)
    {
        $company = $this->findOneBy(array('companyName' => $dataClass->getCompanyName()));
        $dataParam = $company ? $company: $dataClass;

        parent::addDataClassToSession($formName, $dataParam, $request);
    }
}