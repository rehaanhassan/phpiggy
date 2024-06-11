<?php

declare(strict_types=1);

namespace app\config;

use app\controllers\{homeController, aboutController};
use framework\app;

function registerRoutes(app $app)
{

    $app->get('/', [homeController::class, 'home']);
    $app->get('/about', [aboutController::class, 'about']);
}
