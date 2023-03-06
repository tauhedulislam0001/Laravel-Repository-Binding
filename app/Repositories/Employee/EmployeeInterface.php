<?php

namespace App\Repositories\Employee;

interface EmployeeInterface {
    public function getAll();
    public function storeEmployee();
    public function findEmployee($id);
    public function updateEmployee($id);
    public function deleteEmployee($id);
    public function activeEmployee($id);
    public function inactiveEmployee($id);
}









