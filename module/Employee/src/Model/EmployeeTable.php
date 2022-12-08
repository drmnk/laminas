<?php

namespace Employee\Model;

use Employee;
use RuntimeException;
use Laminas\Db\TableGateway\TableGatewayInterface;

class EmployeeTable
{
    private TableGatewayInterface $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getEmployee($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }

        return $row;
    }

    public function saveEmployee(Employee $employee)
    {
        $data = [
            'name' => $employee->name,
            'birthdate'  => $employee->birthdate,
            'birtplace_id'  => $employee->birthplace_id,
        ];

        $id = (int) $employee->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        try {
            $this->getEmployee($id);
        } catch (RuntimeException $e) {
            throw new RuntimeException(sprintf(
                'Cannot update employee with identifier %d; does not exist',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

    public function deleteEmployee($id)
    {
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}