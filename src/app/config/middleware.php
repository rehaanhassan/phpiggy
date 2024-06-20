<?php

declare(strict_types=1);

namespace app\config;

use framework\App;
use app\middleware\templateDataMiddleware;

function registerMiddleware(App $app)
{
    $app->addMiddleware(templateDataMiddleware::class);
}
