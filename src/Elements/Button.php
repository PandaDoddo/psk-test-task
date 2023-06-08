<?php

namespace psk\Elements;

class Button extends AbstractElement
{

    /**
     * @return string
     */
    public function payloadParameters(): string
    {
        return $this->payload->link !== null ? implode('', [
            'onclick="location.href=\'' . $this->payload->link->payload . '\'"'
        ]) : '';
    }

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
        return 'button';
    }
}