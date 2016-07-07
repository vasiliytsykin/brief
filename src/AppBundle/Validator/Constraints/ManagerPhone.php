<?php


namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;


/**
 * @Annotation
 */
class ManagerPhone extends Constraint
{
    public $message = "Менеджер с таким номером телефона уже существует";

    public function validatedBy()
    {
        return get_class($this).'Validator';
    }

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}