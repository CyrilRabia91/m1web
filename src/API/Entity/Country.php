<?php

namespace App\API\Entity;

class Country implements \JsonSerializable
{
    private $id;
    private $name;
    private $id_city;

    public function jsonSerialize():array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'id_city' => $this->getIdCity()
        ];
    }

    public function getId():?int { return $this->id; }
    public function setId(?int $id):void { $this->id = $id;}

    public function getName():string { return $this->name; }
    public function setName(string $name):void { $this->name = $name;}

    public function getIdCity() { return $this->id_city; }
    public function setIdCity($city) { $this->id_city = $city;}
}