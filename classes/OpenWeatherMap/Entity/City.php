<?php

namespace FSA\OpenWeatherMap\Entity;

class City extends AbstractEntity
{

    public int $id;
    public string $name;
    public Coord $coord;
    public string $country;
    public int $timezone;
    public string $sunrise;
    public string $sunset;
}
