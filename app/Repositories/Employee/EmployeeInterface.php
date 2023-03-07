<?php

namespace App\Repositories\Employee;

interface EmployeeInterface {
    public function getAll();
    public function storeEmployee($request);
    public function findEmployee(int $id);
    public function updateEmployee(int $id, $data);
    public function deleteEmployee(int $id);
    public function activeEmployee(int $id);
    public function inactiveEmployee(int $id);
}

