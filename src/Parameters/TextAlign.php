<?php

namespace psk\Parameters;

use psk\Enums\ParameterTypesEnum;
use psk\Interfaces\ParameterInterface;

class TextAlign extends AbstractParameter implements ParameterInterface
{

    /**
     * @return string
     */
    public function build(): string
    {
        return 'text-align:' . $this->parameter->value . ';';
    }

    /**
     * @return ParameterTypesEnum
     */
    public function type(): ParameterTypesEnum
    {
        return ParameterTypesEnum::PARAMETER_STYLE;
    }
}