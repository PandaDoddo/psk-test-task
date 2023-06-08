<?php

namespace psk;

use JsonException;
use psk\Builders\ElementBuilder;
use psk\Exceptions\ParameterNotFoundException;
use psk\Factories\ElementFactory;
use psk\Dto\BlockDto;
use psk\Exceptions\BlockTypeNotFoundException;

class JsonToHtml
{
    /**
     * @param string $json
     */
    public function __construct(
       private string $json
    ){
    }

    /**
     * @throws ParameterNotFoundException
     * @throws BlockTypeNotFoundException
     */
    private function parseElement($element): Elements\AbstractElement
    {
        $element = ElementFactory::createElement(new BlockDto($element));
        $element->children = array_map(function($child) {
            return $this->parseElement($child);
        }, $element->children ?? []);
        return $element;
    }

    /**
     * @throws JsonException
     * @throws BlockTypeNotFoundException|ParameterNotFoundException
     */
    public function getHtml(): string
    {
        $element = $this->parseElement(
            json_decode($this->json, false, 512, JSON_THROW_ON_ERROR)
        );

        return (new ElementBuilder($element))->build();
    }
}