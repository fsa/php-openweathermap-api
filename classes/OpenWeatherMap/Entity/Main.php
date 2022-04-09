<?php

namespace FSA\OpenWeatherMap\Entity;

class Main extends AbstractEntity
{

    public float $temp;
    public float $feels_like;
    public float $temp_min;
    public float $temp_max;
    public int $pressure;
    public ?int $sea_level = null;
    public ?int $grnd_level = null;
    public int $humidity;
    public ?float $temp_kf = null;
}
