<?php

namespace app\controllers;

use framework\templateEngine;
use app\config\Paths;

class AuthController
{

    public function __construct(private templateEngine $view)
    {
    }
    public function registerView()
    {
        echo $this->view->render('register.php');
    }
}
