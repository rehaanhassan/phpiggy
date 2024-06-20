<?php

declare(strict_types=1);

namespace framework\contracts;

interface middlewareInterface
{
    public function process(callable $next);
}
