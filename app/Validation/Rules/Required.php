<?php


namespace App\Validation\Rules;

class Required
{
    public function validate(string $value): bool
    {
        if (empty($value) || !strlen(trim($value))) {
            return false;
        }

        return true;
    }

    public function message(string $attribute): string
    {
        return sprintf('Pole %s jest wymagane.', $attribute);
    }
}