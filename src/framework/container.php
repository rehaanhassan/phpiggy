<?php

declare(strict_types=1);

namespace framework;

class container
{
    private array $definition = [];

    public function addDefinitions(array $newDefinitions)
    {
        dd($newDefinitions);
    }
}
