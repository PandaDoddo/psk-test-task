<?php

namespace psk\Parameters;

use psk\Enums\ParameterTypesEnum;
use psk\Interfaces\ParameterInterface;

class Zoom extends AbstractParameter implements ParameterInterface
{

    /**
     * @return string
     */
    public function build(): string
    {
        return 'zoom="' . ($this->parameter->value ? 'true' : 'false') . '"';
    }

    /**
     * @return ParameterTypesEnum
     */
    public function type(): ParameterTypesEnum
    {
        return ParameterTypesEnum::PARAMETER_ATTRIBUTE;
    }
}