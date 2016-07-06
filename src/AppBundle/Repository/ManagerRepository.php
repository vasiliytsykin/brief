<?php
/**
 * Created by PhpStorm.
 * User: vasyasavincov
 * Date: 30.06.16
 * Time: 22:59
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Company;
use AppBundle\Entity\Manager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class ManagerRepository extends BaseRepository
{
    public function addDataClassToSession($formName, Manager $dataClass, Request $request, Form $form = null)
    {
        $manager = $this->findOneBy(array('managerName' => $dataClass->getManagerName()));
        $dataClass = $manager ? $this->update($manager, $dataClass): $dataClass;
        $dataClass->setCompany($this->fetchCompany($request));

        parent::addDataClassToSession($formName, $dataClass, $request);
    }

    private function fetchCompany(Request $request)
    {
        $companyId = $request->getSession()->get('formArray')['Company'];
        return
            $this->getEntityManager()->getRepository(Company::class)->find($companyId);

    }
}