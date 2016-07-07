<?php


namespace AppBundle\Validator\Constraints;

use AppBundle\Repository\ManagerRepository;

class ManagerEmailValidator extends BaseEntityValidator
{

    public function __construct(ManagerRepository $repository, $name, $email)
    {
        parent::__construct($repository, $name, $email);
    }

}