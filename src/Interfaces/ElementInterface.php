<?php

namespace psk\Interfaces;


interface ElementInterface
{
    /**
     * @return string
     */
    public function payloadParameters(): string;

    /**
     * @return string
     */
    public function content(): string;

    /**
     * @return string
     */
    public function HTMLTag(): string;
}