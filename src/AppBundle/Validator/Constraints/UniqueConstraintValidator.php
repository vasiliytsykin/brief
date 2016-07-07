<?php


namespace AppBundle\Validator\Constraints;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueConstraintValidator extends ConstraintValidator
{
    private $em;

    public function __construct(EntityManager $em)
    {
       $this->em = $em;
    }

    public function validate($entity, Constraint $constraint)
    {
        $repository = $this->em->getRepository($constraint->repository);

        $nameGetter = 'get'.ucfirst($constraint->entityName);
        $fieldGetter = 'get'.ucfirst($constraint->field);
        $resultByName = $repository->findOneBy(array(
            $constraint->entityName => $entity->$nameGetter(),
        ));

        $resultByField = $repository->findOneBy(array(
            $constraint->field => $entity->$fieldGetter()
        ));

        if($this->bothExistButDifferent($resultByName, $resultByField) ||
            !$resultByName && $resultByField)
            $this->context->buildViolation($constraint->message)
                ->atPath($constraint->field)
                ->addViolation();
    }

    private function bothExistButDifferent($resultByName, $resultByField)
    {
        return $resultByName && $resultByField &&
        ($resultByName->getId() != $resultByField->getId());
    }
}