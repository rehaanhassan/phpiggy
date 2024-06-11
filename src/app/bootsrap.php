<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use framework\app;
use app\config\Paths;
use function app\config\registerRoutes;

$app = new App(Paths::SOURCE . "app/container-definitions.php");

registerRoutes($app);

return $app;
