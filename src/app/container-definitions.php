<?php

declare(strict_types=1);

use framework\templateEngine;
use app\config\Paths;
use app\services\validatorService;

return [
    templateEngine::class => fn () => new templateEngine(Paths::VIEW),
    validatorService::class => fn () => new validatorService()
];
