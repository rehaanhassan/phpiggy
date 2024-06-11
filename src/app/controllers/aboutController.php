<?php

namespace app\controllers;

use framework\templateEngine;
use app\config\Paths;

class aboutController
{
    private templateEngine $view;

    public function __construct()
    {
        $this->view = new templateEngine(Paths::VIEW);
    }
    public function about()
    {
        echo $this->view->render('about.php', [
            'title' => 'About Page',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
