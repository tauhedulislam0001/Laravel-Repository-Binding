@extends('layouts.master')
@section('content')
<div class="container">
    <br>
    <span class="text-primary"><b>Employee List</b></span>
    <br>
    <br>
    <table class="table table-hover table-bordered">
        <thead style="background-color: #e3f2fd;">
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Position</th>
            <th scope="col">Wages</th>
            <th scope="col">Mobile</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($employees as $item)
        <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $item->full_name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->position}}</td>
            <td>{{ $item->wages}}</td>
            <td>{{ $item->mobile}}</td>
            <td>
                @if ($item->status == 1)
                <span class="badge badge-success">active</span>
                @else
                <span class="badge badge-danger">inactive</span>                    
                @endif
            </td>
            <td>
                @if ($item->status == 1)
                    <a href="{{route('employee.inactive', $item->id)}}">
                        <button class="btn btn-sm btn-outline-warning">Inactive</button>
                    </a>
                @elseif ($item->status == 0)
                    <a href="{{route('employee.active', $item->id)}}">
                        <button class="btn btn-sm btn-outline-success">Active</button>
                    </a>                    
                @endif
                <a href="{{route('employee.edit', $item->id)}}">
                    <button class="btn btn-sm btn-outline-warning">Edit employee</button>
                </a>
                <a href="{{route('employee.delete', $item->id)}}">
                    <button class="btn btn-sm btn-outline-danger">Delete employee</button>
                </a>   
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection