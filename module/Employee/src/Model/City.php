<?php

namespace Employee\Model;

use Laminas\Db\Adapter\Adapter;
use Laminas\Db\TableGateway\TableGateway;


// Конечно, модель города здесь не место, в модуле Сотрудника
// Но в этом тестовом задании она вряд ли будет использоваться где-то ещё,
// а best practices по использованию общих моделей в Ламинас мне пока не ясны
class City
{
    public static function fetchAll()
    {
        $adapter = new Adapter([
            'driver' => 'Pdo',
            'dsn' => sprintf('sqlite:%s/data/departments.db', realpath(getcwd()))
        ]);

        $table = new TableGateway('cities', $adapter);
        return $table->select();
    }

    public static function getArray()
    {
        $adapter = new Adapter([
            'driver' => 'Pdo',
            'dsn' => sprintf('sqlite:%s/data/departments.db', realpath(getcwd()))
        ]);

        $table = new TableGateway('cities', $adapter);
        $objCities = $table->select();
        $cities = [];
        foreach ($objCities as $objCity) {
            $cities[$objCity->id] = "{$objCity->name}, {$objCity->state}";
        }
        return $cities;
    }


}