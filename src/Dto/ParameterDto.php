<?php

namespace psk\Dto;

class ParameterDto
{
    /** @var string */
    public string $name;
    /** @var string */
    public string $value;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
