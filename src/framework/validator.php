<?php

declare(strict_types=1);

namespace framework;

use framework\contracts\ruleInterface;

class validator
{
    private array $rules = [];
    public function add(string $alias, ruleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }
    public function validate(array $formData)
    {
        dd($formData);
    }
}
