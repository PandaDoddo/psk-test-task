<?php

namespace psk\Factories;


use psk\Dto\ParameterDto;
use psk\Exceptions\ParameterNotFoundException;
use psk\Parameters\AbstractParameter;
use psk\Parameters\BackgroundColor;
use psk\Parameters\FontSize;
use psk\Parameters\Size;
use psk\Parameters\Style;
use psk\Parameters\TextAlign;
use psk\Parameters\TextColor;
use psk\Parameters\Zoom;

class ParametersFactory
{
    /**
     * @throws ParameterNotFoundException
     */
    public static function createParameter(ParameterDto $parameter): AbstractParameter
    {
        return match ($parameter->name) {
            'fontSize' => new fontSize($parameter),
            'textAlign' => new textAlign($parameter),
            'zoom' => new zoom($parameter),
            'size' => new size($parameter),
            'style' => new style($parameter),
            'textColor' => new textColor($parameter),
            'backgroundColor' => new backgroundColor($parameter),
            default => throw new ParameterNotFoundException()
        };
    }
}