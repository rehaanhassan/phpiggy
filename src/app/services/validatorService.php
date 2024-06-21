<?php

declare(strict_types=1);

namespace app\services;

use framework\validator;

class validatorService
{
    private validator $validator;

    public function __construct()
    {
        $this->validator = new validator();
    }
    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData);
    }
}
