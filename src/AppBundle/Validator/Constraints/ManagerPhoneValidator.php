<?php


namespace AppBundle\Validator\Constraints;

use AppBundle\Repository\ManagerRepository;

class ManagerPhoneValidator extends BaseEntityValidator
{

    public function __construct(ManagerRepository $repository, $name, $phone)
    {
        parent::__construct($repository, $name, $phone);
    }

}