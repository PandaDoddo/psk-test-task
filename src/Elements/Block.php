<?php

namespace psk\Elements;


class Block extends AbstractElement
{
    /**
     * @return string
     */
    public function payloadParameters(): string
    {
        return '';
    }

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
}