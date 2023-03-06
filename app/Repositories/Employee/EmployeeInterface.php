<?php

namespace App\Repositories\Employee;

interface EmployeeInterface {
    public function getAll();
    public function createEmployee();
    public function editEmployee($id);
    public function updateEmployee($id);
    public function deleteEmployee($id);
    public function activeEmployee($id);
    public function inactiveEmployee($id);
}









