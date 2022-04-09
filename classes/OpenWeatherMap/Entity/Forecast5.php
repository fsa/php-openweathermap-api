<?php

namespace OpenWeatherMap\Entity;

class Forecast5 extends AbstractEntity
{

    public int $cod;
    public float $message;
    public int $cnt;
    public array $list;
    public City $city;

    protected function parseArray($key, $value)
    {
        $result = [];
        switch ($key) {
            case 'list':
                foreach ($value as $entity) {
                    $result[] = new Forecast5List($entity);
                }
                break;
        }
        return $result;
    }
}
