<?php

namespace OpenWeatherMap\Entity;

class Forecast5List extends AbstractEntity
{

    public int $dt;
    public Main $main;
    public array $weather;
    public Clouds $clouds;
    public Wind $wind;
    public int $visibility;
    public float $pop;
    public array $rain;
    public array $sys;
    public string $dt_text;

    protected function parseArray($key, $value)
    {
        $result = [];
        switch ($key) {
            case 'weather':
                foreach ($value as $entity) {
                    $result[] = new Weather($entity);
                }
                break;
        }
        return $result;
    }
}
