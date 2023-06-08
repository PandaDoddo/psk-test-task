<?php

namespace psk\Elements;

class Image extends AbstractElement
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
        return 'img';
    }

    /**
     * @return string
     */
    public function payloadParameters(): string
    {
        return 'src="' . $this->payload->image->url . '"';
    }
}