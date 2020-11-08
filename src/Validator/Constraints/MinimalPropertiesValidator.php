<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MinimalPropertiesValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    {
        if (!array_diff(['title'], $value)) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }
}