<?php

namespace Employee\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Employee\Model\EmployeeTable;

use Employee\Model\City;



class EmployeeController extends AbstractActionController
{
    private $table;
    private $adapter;

    public function __construct(EmployeeTable $table)
    {
        $this->table = $table;
    }
    public function indexAction()
    {
        $employees = $this->table->fetchAll();

        $city = new City();

        return new ViewModel([
            'employees' => $employees,
            'places' => $city->getArray()
        ]);
    }

    public function createAction()
    {
        
    }

    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
        
    }
}