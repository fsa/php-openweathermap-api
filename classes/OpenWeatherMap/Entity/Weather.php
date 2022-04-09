<?php

namespace FSA\OpenWeatherMap\Entity;

class Weather extends AbstractEntity
{

    public int $id;
    public string $main;
    public string $description;
    public string $icon;
}
