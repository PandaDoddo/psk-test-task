<?php

namespace psk\Parameters;

use psk\Enums\ParameterTypesEnum;
use psk\Interfaces\ParameterInterface;

class Size extends AbstractParameter implements ParameterInterface
{
    /**
     * @return string
     */
    public function build(): string
    {
        return $this->parameter->name . '-' . $this->parameter->value;
    }

    /**
     * @return ParameterTypesEnum
     */
    public function type(): ParameterTypesEnum
    {
        return ParameterTypesEnum::PARAMETER_CLASS;
    }
}