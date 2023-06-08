<?php

namespace psk\Elements;

class Container extends AbstractElement
{
    /**
     * @return string
     */
    public function content(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function HTMLTag(): string
    {
        return 'div';
    }

    /**
     * @return string
     */
    public function payloadParameters(): string
    {
        return '';
    }
}