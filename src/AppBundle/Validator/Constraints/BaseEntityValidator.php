<?php


namespace AppBundle\Validator\Constraints;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class BaseEntityValidator extends ConstraintValidator
{
    private $repository;
    private $name;
    private $field;

    public function __construct(EntityRepository $repository, $name, $field)
    {
        $this->repository = $repository;
        $this->name = $name;
        $this->field = $field;
    }

    public function validate($entity, Constraint $constraint)
    {

        $nameGetter = 'get'.ucfirst($this->name);
        $fieldGetter = 'get'.ucfirst($this->field);
        $resultByName = $this->repository->findOneBy(array(
            $this->name => $entity->$nameGetter(),
        ));

        $resultByField = $this->repository->findOneBy(array(
            $this->field => $entity->$fieldGetter()
        ));

        if($this->bothExistButDifferent($resultByName, $resultByField) ||
            !$resultByName && $resultByField)
            $this->context->buildViolation($constraint->message)
                ->atPath($this->field)
                ->addViolation();
    }

    private function bothExistButDifferent($resultByName, $resultByField)
    {
        return $resultByName && $resultByField &&
        ($resultByName->getId() != $resultByField->getId());
    }
}