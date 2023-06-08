<?php

namespace psk\Dto;

use psk\Enums\ParameterTypesEnum;
use psk\Exceptions\ParameterNotFoundException;
use psk\Factories\ParametersFactory;

class ParametersDto
{
    /** @var array */
    public array $classParameters = [];
    /**  @var array */
    public array $attributeParameters = [];
    /** @var array */
    public array $styleParameters = [];

    /**
     * @throws ParameterNotFoundException
     */
    public function __construct(object $parameters)
    {
        foreach ($parameters as $name => $value) {
            $param = ParametersFactory::createParameter(
                new ParameterDto($name, $value)
            );
            match ($param->type()) {
                ParameterTypesEnum::PARAMETER_ATTRIBUTE => $this->attributeParameters[] = $param,
                ParameterTypesEnum::PARAMETER_CLASS => $this->classParameters[] = $param,
                ParameterTypesEnum::PARAMETER_STYLE => $this->styleParameters[] = $param,
            };
        }
    }
}
