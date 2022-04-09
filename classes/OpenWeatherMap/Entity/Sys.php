<?php

namespace FSA\OpenWeatherMap\Entity;

class Sys extends AbstractEntity
{

    public int $type;
    public int $id;
    public ?float $message = null;
    public string $country;
    public int $sunrise;
    public int $sunset;
}
