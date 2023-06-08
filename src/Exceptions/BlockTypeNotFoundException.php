<?php

namespace psk\Exceptions;

use Exception;

class BlockTypeNotFoundException extends Exception
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Block type not found';
    }
}