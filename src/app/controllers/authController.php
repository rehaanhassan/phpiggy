<?php

namespace app\controllers;

use framework\templateEngine;
use app\services\validatorService;

class AuthController
{

    public function __construct(private templateEngine $view, private validatorService $validatorService)
    {
    }
    public function registerView()
    {
        echo $this->view->render('register.php');
    }
    public function register()
    {
        $this->validatorService->validateRegister($_POST);
    }
}
