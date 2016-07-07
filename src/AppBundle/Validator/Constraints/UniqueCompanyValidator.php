<?php


namespace AppBundle\Validator\Constraints;

use AppBundle\Repository\CompanyRepository;

class UniqueCompanyValidator extends BaseEntityValidator
{

    public function __construct(CompanyRepository $repository, $name, $email)
    {
        parent::__construct($repository, $name, $email);
    }
    
}