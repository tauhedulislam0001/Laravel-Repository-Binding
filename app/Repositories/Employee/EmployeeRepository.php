<?php

namespace App\Repositories\Employee;

use App\Repositories\Employee\EmployeeInterface as EmployeeInterface;
use App\Models\Employee;

class EmployeeRepositories implements EmployeeInterface 
{
    public $employee;
    
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        return $this->employee->getAll();
    }

    public function createEmployee()
    {
        return $this->employee->create();
    }

    public function editEmployee($id)
    {
        return $this->employee->edit($id);
    }

    public function updateEmployee($id)
    {
        return $this->employee->update($id);
    }

    public function deleteEmployee($id)
    {
        return $this->employee->delete($id);
    }

    public function activeEmployee($id)
    {
        return $this->employee->activeStatus($id);
    }

    public function inactiveEmployee($id)
    {
        return $this->employee->inactiveStatus($id);
    }

}
