<?php

namespace psk\Parameters;

use psk\Enums\ParameterTypesEnum;
use psk\Interfaces\ParameterInterface;

class BackgroundColor extends AbstractParameter implements ParameterInterface
{

    /**
     * @return string
     */
    public function build(): string
    {
        return 'background-color:' . $this->parameter->value . ';';
    }

    /**
     * @return ParameterTypesEnum
     */
    public function type(): ParameterTypesEnum
    {
        return ParameterTypesEnum::PARAMETER_STYLE;
    }
}