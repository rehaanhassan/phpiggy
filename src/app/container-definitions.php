<?php

declare(strict_types=1);

use framework\templateEngine;
use app\config\Paths;

return [
    templateEngine::class => fn () => new templateEngine(Paths::VIEW)
];
