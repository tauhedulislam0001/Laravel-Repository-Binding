@extends('layouts.master')
@section('content')
<div class="container">
    <br>
    <span class="text-primary"><b>Add New Employee</b></span>
    <br>
    <br>
    <form method="post" action="{{ route('employee.store') }}">
        @csrf
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Enter employee's full_name">
            @if($errors->has('full_name'))
                <div class="error text-danger">{{ $errors->first('full_name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" placeholder="Enter employee's position">
            @if($errors->has('position'))
                <div class="error text-danger">{{ $errors->first('position') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="wages">Wages</label>
            <input type="number" name="wages" class="form-control" placeholder="Enter employee's wages">
            @if($errors->has('wages'))
                <div class="error text-danger">{{ $errors->first('wages') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter employee's email">
            @if($errors->has('email'))
                <div class="error text-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="number" name="mobile" class="form-control" placeholder="Enter employee's mobile">
            @if($errors->has('mobile'))
                <div class="error text-danger">{{ $errors->first('mobile') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-success mb-2">Add Employee</button>
    </form>
</div>
@endsection