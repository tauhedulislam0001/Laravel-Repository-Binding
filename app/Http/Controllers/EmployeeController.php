<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeDataStore;
use App\Http\Requests\EmployeeDataUpdate;
use App\Repositories\Employee\EmployeeInterface;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index() 
    {
        $employees = $this->employeeRepository->getAll();
        return view('employee.index', compact('employees'));
    }

    public function create() 
    {
        return view('employee.create');
    }

    public function store(EmployeeDataStore $data) 
    {
        $status = $this->employeeRepository->storeEmployee($data);
        
        if($status == 1) {
            return redirect()->route('employee');
        } elseif($status == 0) {
            return redirect()->back();
        }
    }

    public function edit(int $id) 
    {
        $employee = $this->employeeRepository->findEmployee($id);
        
        return view('employee.edit', compact('employee'));
    }

    public function update(int $id, EmployeeDataUpdate $data) 
    {
        $status = $this->employeeRepository->updateEmployee($id, $data);
        
        if($status == 1) {
            return redirect()->route('employee');
        } elseif($status == 0) {
            return redirect()->back();
        }
    }

    public function delete(int $id) 
    {
        $status = $this->employeeRepository->deleteEmployee($id);
        
        if($status == 1) {
            return redirect()->route('employee');
        } elseif($status == 0) {
            return redirect()->back();
        }
    }

    public function active(int $id) 
    {
        $status = $this->employeeRepository->activeEmployee($id);
        
        if($status == 1) {
            return redirect()->route('employee');
        } elseif($status == 0) {
            return redirect()->back();
        }
    }

    public function inactive(int $id) 
    {
        $status = $this->employeeRepository->inactiveEmployee($id);
        
        if($status == 1) {
            return redirect()->route('employee');
        } elseif($status == 0) {
            return redirect()->back();
        }
    }

}
