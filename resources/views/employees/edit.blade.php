@extends('layout')

@section('title', 'employees')

<title>Employees Update</title>
@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Employees</h4>
            </div>
            <div class="card-body">

      <form action="{{ route('save-edit', ['id' => $_t_b_l_e__employees['id']]) }}" method="POST">
      @csrf
            <div class="form-elemnt my-4">
            <label for="formGroup">Employees Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Employees Name:" value="{{ $_t_b_l_e__employees ['fullname'] }}" required>
            </div>
            <div class="form-elemnt my-4">
            <label for="formGroup">Employees Address</label>
                <input type="text" class="form-control" name="address" placeholder="Employees Address:" value="{{ $_t_b_l_e__employees ['address'] }}" required>
            </div>
            <div class="form-element my-4">
            <label for="formGroup">Employees Salary</label>
                <input type="text" name="salary" id="" class="form-control" placeholder="Employees Salary:" value="{{ $_t_b_l_e__employees ['salary'] }}" required>
            </div>
            <div class="form-element my-4">
                <input type="submit"  value="Add Employees" class="btn btn-success">
            </div>
        </form>
        </div>
                </div>
            </div>
        </div>
        </div>
@endsection