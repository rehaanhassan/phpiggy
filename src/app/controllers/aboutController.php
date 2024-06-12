<?php

namespace app\controllers;

use framework\templateEngine;
use app\config\Paths;

class aboutController
{


    public function __construct(private templateEngine $view)
    {
    }
    public function about()
    {
        echo $this->view->render('about.php', [
            'title' => 'About Page',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
