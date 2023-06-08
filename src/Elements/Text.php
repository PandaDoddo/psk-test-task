<?php

namespace psk\Elements;

class Text extends AbstractElement
{
    /**
     * @return string
     */
    public function content(): string
    {
        return $this->payload->text ?? '';
    }

    /**
     * @return string
     */
    public function HTMLTag(): string
    {
        return 'p';
    }

    /**
     * @return string
     */
    public function payloadParameters(): string
    {
        return '';
    }
}