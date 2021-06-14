<?php


namespace App\Validator;


use App\Exception\RequestValidationException;

class Validator
{

    function validate($dto): void
    {
        $rules = $dto->getValidateRules();
        foreach ($rules as $param => $rule) {
            $getMethod = 'get' . ucfirst($param);
            $validateMethod = 'is' . ucfirst($rule);
            if (!$this->$validateMethod($dto->$getMethod())) {
                throw new RequestValidationException("Параметр '" . $param . "' введен не правильно! Должен быть '" . ucfirst($rule) . "'");
            };
        }
    }

    private function isString($val): bool
    {
        if (is_string($val)) {
            return true;
        }
        return false;
    }

}