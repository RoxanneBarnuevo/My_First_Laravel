@extends('layout')

@section('title', 'employees')

<title>Employees List</title>
@section('content')


        <section class="list">
            <div class="d-flex justify-content-between my-4">
            <h4>Employees List</h4>
            <a href="{{ route('create')}}" class="btn btn-info">Add New Employees</a>
</div>

        <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
        @php
            $count = 0;
        @endphp
        @foreach($_t_b_l_e__employees as $employee)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $employee->fullname }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->salary }}</td>
                
                <td>
                  
                    <a href="{{ route('edit', ['id' => $employee->id]) }}" class="btn btn-info">Update</a>
                    <a href="{{ route('delete', ['id' => $employee->id]) }}" class="btn btn-danger">Delete</a> 
                </td>
            </tr>
</section>
            @endforeach
        </tbody>
        </table>
@endsection