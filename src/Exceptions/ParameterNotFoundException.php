<?php

namespace psk\Exceptions;

use Exception;

class ParameterNotFoundException extends Exception
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Parameter not found';
    }
}