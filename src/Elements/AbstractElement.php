<?php

namespace psk\Elements;

use psk\Dto\BlockDto;
use psk\Interfaces\ElementInterface;

abstract class AbstractElement implements ElementInterface
{
    /**
     * @var array|null
     */
    public array|null $children;
    /**
     * @var object
     */
    public object $payload;
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array
     */
    public array $classParameters;
    /**
     * @var array
     */
    public array $attributeParameters;
    /**
     * @var array
     */
    public array $styleParameters;

    /**
     * @return string
     */
    abstract public function content(): string;

    /**
     * @return string
     */
    abstract public function HTMLTag(): string;

    /**
     * @return string
     */
    abstract public function payloadParameters(): string;

    /**
     * @param BlockDto $block
     */
    public function __construct(
        BlockDto $block
    ) {
        $this->children = $block->children;
        $this->classParameters = $block->parameters->classParameters;
        $this->styleParameters = $block->parameters->styleParameters;
        $this->attributeParameters = $block->parameters->attributeParameters;
        $this->payload = $block->payload;
        $this->type = $block->type;
    }
}