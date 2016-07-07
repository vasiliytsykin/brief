<?php


namespace AppBundle\Validator\Constraints;

use AppBundle\Repository\CompanyRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueCompanyValidator extends ConstraintValidator
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function validate($entity, Constraint $constraint)
    {
        
        $resultByName = $this->repository->findOneBy(array(
            'companyName' => $entity->getCompanyName(),
            ));

        $resultByEmail = $this->repository->findOneBy(array(
            'companyEmail' => $entity->getCompanyEmail()
        ));

        if($this->bothExistButDifferent($resultByName, $resultByEmail) ||
            !$resultByName && $resultByEmail)
            $this->context->buildViolation($constraint->message)
                ->atPath('companyEmail')
                ->addViolation();
    }

    private function bothExistButDifferent($resultByName, $resultByEmail)
    {
        return $resultByName && $resultByEmail &&
                ($resultByName->getId() != $resultByEmail->getId());
    }
}