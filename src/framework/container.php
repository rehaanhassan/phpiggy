<?php

declare(strict_types=1);

namespace framework;

use ReflectionClass;
use framework\expections\containerException;

class container
{
    private array $definition = [];

    public function addDefinitions(array $newDefinitions)
    {
        $this->definition = [...$this->definition, ...$newDefinitions];
    }
    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new containerException("Class {$className} is not instantiable!");
        }

        $constructor = $reflectionClass->getConstructor();

        if (!$constructor) {
            return new $className;
        }

        $params = $constructor->getParameters();

        if (count($params) === 0) {
            return new $className;
        }

        dd($params);
    }
}
