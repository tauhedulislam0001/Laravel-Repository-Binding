<?php

namespace App\Repositories\Employee;

use App\Repositories\Employee\EmployeeInterface as EmployeeInterface;
use App\Models\Employee;

class EmployeeRepository implements EmployeeInterface 
{
    public $employee;
    
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        return Employee::latest()->get();
    }

    public function storeEmployee($data)
    {
        $newEmployee = new Employee();
        $newEmployee->full_name = $data->full_name;
        $newEmployee->position = $data->position;
        $newEmployee->wages = $data->wages;
        $newEmployee->email = $data->email;
        $newEmployee->mobile = $data->mobile;
        $newEmployee->status = 1;
        $newEmployee->save();
        
        if($newEmployee->save()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function findEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee;
    }

    public function updateEmployee($id, $data)
    {
        $updateEmployee = Employee::findOrFail($id);
        $updateEmployee->full_name = $data->full_name;
        $updateEmployee->position = $data->position;
        $updateEmployee->wages = $data->wages;
        $updateEmployee->email = $data->email;
        $updateEmployee->mobile = $data->mobile;
        
        if($updateEmployee->save()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function deleteEmployee($id)
    {
        $deleteEmployee = Employee::findOrFail($id);
        
        if($deleteEmployee->delete()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function activeEmployee($id)
    {
        $activeEmployee = Employee::findOrFail($id);
        $activeEmployee->status = 1;
        
        if($activeEmployee->save()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function inactiveEmployee($id)
    {
        $inactiveEmployee = Employee::findOrFail($id);
        $inactiveEmployee->status = 0;
        
        if($inactiveEmployee->save()) {
            return 1;
        } else {
            return 0;
        }
    }
}
