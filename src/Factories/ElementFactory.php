<?php

namespace psk\Factories;

use psk\Elements\AbstractElement;
use psk\Elements\Block;
use psk\Elements\Button;
use psk\Elements\Container;
use psk\Elements\Image;
use psk\Elements\Text;
use psk\Dto\BlockDto;
use psk\Exceptions\BlockTypeNotFoundException;

class ElementFactory
{
    /**
     * @throws BlockTypeNotFoundException
     */
    public static function createElement(BlockDto $block): AbstractElement
    {
        return match ($block->type) {
            'container' => new Container($block),
            'block' => new Block($block),
            'text' => new Text($block),
            'image' => new Image($block),
            'button' => new Button($block),
            default => throw new BlockTypeNotFoundException()
        };
    }
}