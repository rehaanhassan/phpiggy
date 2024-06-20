<?php

declare(strict_types=1);

namespace app\middleware;

use framework\contracts\middlewareInterface;
use framework\templateEngine;

class templateDataMiddleware implements middlewareInterface
{
    public function __construct(private templateEngine $view)
    {
    }
    public function process(callable $next)
    {
        $this->view->addGlobal('title', 'Expense Tracking App');
        $next();
    }
}
