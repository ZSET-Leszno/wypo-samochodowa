<?php

namespace App\Validation;

class Validator
{
    public static function make(array $validation, array $data)
    {
        $errors = [];
        foreach ($validation as $item => $parameters) {
            $parameters = explode('|', $parameters);

            foreach ($parameters as $parameter) {
                $className = '\\App\\Validation\\Rules\\' . ucfirst($parameter);
                $class = new $className;
                if (!$class->validate($data[$item] ?? '')) {
                    $errors[] = $class->message($item);
                }
            }
        }

        if ($errors) {
            $_SESSION['old'] = $data;
            $_SESSION['validationErrors'] = $errors;

            back();
            die();
        }
    }
}