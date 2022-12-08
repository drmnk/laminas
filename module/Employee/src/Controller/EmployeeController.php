<?php

namespace Employee\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Employee\Model\EmployeeTable;

class EmployeeController extends AbstractActionController
{
    private $table;

    public function __construct(EmployeeTable $table)
    {
        $this->table = $table;
    }
    public function indexAction()
    {
        $employees = $this->table->fetchAll();
        return new ViewModel([
            'employees' => $employees
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