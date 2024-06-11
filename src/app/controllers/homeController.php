<?php

namespace app\controllers;

use framework\templateEngine;
use app\config\Paths;

class HomeController
{
    private templateEngine $view;

    public function __construct()
    {
        $this->view = new templateEngine(Paths::VIEW);
    }
    public function home()
    {
        echo $this->view->render('/index.php', [
            'title' => 'Home Page'
        ]);
    }
}
