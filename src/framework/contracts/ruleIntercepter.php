<?php

declare(strict_types=1);

namespace framework\contracts;

interface ruleInterface
{
    public function validate(array $data, string $field, array $params): bool;

    public function getMessage(array $data, string $field, array $params): string;
}
