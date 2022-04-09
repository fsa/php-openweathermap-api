<?php

namespace FSA\OpenWeatherMap\Entity;

class Current extends AbstractEntity
{

    public Coord $coord;
    public array $weather;
    public string $base;
    public Main $main;
    public string $visibility;
    public Wind $wind;
    public Clouds $clouds;
    public int $dt;
    public Sys $sys;
    public int $timezone;
    public int $id;
    public string $name;
    public int $cod;

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
