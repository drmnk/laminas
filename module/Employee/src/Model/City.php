<?php

// Разумеется, понятно, что место рождения как бы не относится
// к Модулю
namespace Employee\Model;

class City
{
    public int $id;
    public string $name;
    public string $state;

    public function exchangeArray(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->state = $data['state'] ?? null;
    }
}