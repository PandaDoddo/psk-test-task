<?php

namespace psk\Parameters;

use psk\Dto\ParameterDto;
use psk\Enums\ParameterTypesEnum;

abstract class AbstractParameter
{
    /**
     * @return string
     */
    abstract public function build(): string;

    /**
     * @return ParameterTypesEnum
     */
    abstract public function type(): ParameterTypesEnum;

    /**
     * @param ParameterDto $parameter
     */
    public function __construct(
        public ParameterDto $parameter
    ) {
    }
}