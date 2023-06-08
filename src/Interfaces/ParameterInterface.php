<?php

namespace psk\Interfaces;

use psk\Enums\ParameterTypesEnum;

interface ParameterInterface
{
    /**
     * @return ParameterTypesEnum
     */
    public function type(): ParameterTypesEnum;

    /**
     * @return string
     */
    public function build(): string;
}