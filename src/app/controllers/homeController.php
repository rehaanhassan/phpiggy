<?php

namespace app\controllers;

use framework\templateEngine;
use app\config\Paths;

class HomeController
{

    public function __construct(private templateEngine $view)
    {
    }
    public function home()
    {
        echo $this->view->render('/index.php', [
            'title' => 'Home Page'
        ]);
    }
}
