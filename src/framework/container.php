<?php

declare(strict_types=1);

namespace framework;

use ReflectionClass, ReflectionNamedType;
use framework\expections\containerException;

class container
{
    private array $definition = [];
    private array $resolved = [];

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

        $dependencies = [];

        foreach ($params as $param) {
            $name = $param->getName();
            $type = $param->getType();

            if (!$type) {
                throw new containerException("Failed to resolve {$className} becasue param {$name} is missing type hint");
            }

            if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
                throw new containerException("Failed to resolve class {$className} because of invalid param name");
            }

            $dependencies[] = $this->get($type->getName());
        }

        return $reflectionClass->newInstanceArgs($dependencies);
    }
    public function get(string $id)
    {
        if (!array_key_exists($id, $this->definition)) {
            throw new containerException("Class {$id} does not exist in container");
        }
        if (array_key_exists($id, $this->resolved)) {
            return $this->resolved[$id];
        }

        $factory = $this->definition[$id];
        $dependency = $factory();
        $this->resolved[$id] = $dependency;

        return $dependency;
    }
}
