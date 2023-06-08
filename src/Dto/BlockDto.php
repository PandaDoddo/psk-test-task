<?php

namespace psk\Dto;

use psk\Exceptions\ParameterNotFoundException;

class BlockDto
{
    /*** @var object */
    public object $payload;
    /*** @var array|null */
    public array|null $children;
    /** @var ParametersDto */
    public ParametersDto $parameters;
    /** @var string */
    public string $type;

    /**
     * @throws ParameterNotFoundException
     */
    public function __construct(object $block)
    {
        $this->payload = $block->payload;
        $this->children = $block?->children ?? null;
        $this->parameters = new ParametersDto($block->parameters);
        $this->type = $block->type;
    }
}
