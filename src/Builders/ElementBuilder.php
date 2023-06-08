<?php

namespace psk\Builders;

use psk\Elements\AbstractElement;
use psk\Parameters\AbstractParameter;

class ElementBuilder
{
    /**
     * @param AbstractElement $element
     */
    public function __construct(
        public AbstractElement $element
    ) {
    }

    /**
     * @param array $params
     * @return array
     */
    public function getBuildParameters(array $params): array
    {
        return array_map(
            static function (AbstractParameter $parameter) {
                return $parameter->build();
            },
            $params
        );
    }

    /**
     * @return string
     */
    public function buildChildrens(): string
    {
        return implode(
                '',
                array_map(
                    static function (AbstractElement $element) {
                        return (new self($element))->build();
                    },
                    $this->element->children
                )
            ) ?? '';
    }

    /**
     * @return string
     */
    public function buildClassParameters(): string
    {
        $buildParams = $this->getBuildParameters($this->element->classParameters);
        return count($buildParams) === 0 ? '' : 'class="' . implode(' ', $buildParams) . '"';
    }

    /**
     * @return string
     */
    public function buildAttributeParameters(): string
    {
        $buildParams = $this->getBuildParameters($this->element->attributeParameters);
        return count($buildParams) === 0 ? '' : implode(' ', $buildParams);
    }

    /**
     * @return string
     */
    public function buildStyleParameters(): string
    {
        $buildParams = $this->getBuildParameters($this->element->styleParameters);
        return count($buildParams) === 0 ? '' : 'style="' . implode(' ', $buildParams) . '"';
    }

    /**
     * @return string
     */
    public function buildTag(): string
    {
        return implode(' ', [
            '<' . $this->element->HTMLTag(),
            $this->buildClassParameters(),
            $this->buildStyleParameters(),
            $this->buildAttributeParameters(),
            $this->element->payloadParameters(),
            '>'
        ]);
    }

    /**
     * @return string
     */
    public function build(): string
    {
        return implode('', [
            $this->buildTag(),
            $this->element->content(),
            $this->buildChildrens(),
            '</' . $this->element->HTMLTag() . '>'
        ]);
    }

}