<?php

namespace Employee\Model;

class Employee
{
    public int $id;
    public string $name;
    public string $birthdate;
    public int $birthplace_id;

    public function exchangeArray(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->birthdate = $data['birthdate'] ?? null;
        $this->birthplace_id = $data['birthplace_id'] ?? null;
    }
}