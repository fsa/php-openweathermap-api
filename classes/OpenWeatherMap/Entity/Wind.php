<?php

namespace OpenWeatherMap\Entity;

class Wind extends AbstractEntity
{

    public float $speed;
    public int $deg;
    public ?float $gust = null;
}
