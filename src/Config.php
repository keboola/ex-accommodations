<?php

declare(strict_types=1);

namespace MyComponent;

use Keboola\Component\Config\BaseConfig;

class Config extends BaseConfig
{

    public function getHost(): string
    {
        return $this->getValue(['parameters', 'host']);
    }

    public function getKey(): string
    {
        return $this->getValue(['parameters', 'key']);
    }

    public function getCountry(): string
    {
        return $this->getValue(['parameters', 'country']);
    }

    public function getTransport(): string
    {
        return $this->getValue(['parameters', 'transport']);
    }
}
