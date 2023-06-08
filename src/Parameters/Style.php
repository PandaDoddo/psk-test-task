<?php

namespace psk\Parameters;

use psk\Enums\ParameterTypesEnum;
use psk\Interfaces\ParameterInterface;

/**
 *
 */
class Style extends AbstractParameter implements ParameterInterface
{

    public function build(): string
    {
        return $this->parameter->name . '-' . $this->parameter->value;
    }

    public function type(): ParameterTypesEnum
    {
        return ParameterTypesEnum::PARAMETER_CLASS;
    }
}