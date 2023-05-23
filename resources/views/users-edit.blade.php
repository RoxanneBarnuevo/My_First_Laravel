@extends('layout')

@section('title', 'update')

<title>Update</title>
@section('content')
<link rel ='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>


<div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Student</h4>
            </div>
            <div class="card-body">

            <form action="{{ route('users-edit', ['id' => $accounts['id']]) }}" method="POST">
        @csrf
            <div class="form-elemnt my-4">
            <label for="formGroup">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name:" value="{{ $accounts ['firstname'] }}" required>
            </div>
            <div class="form-elemnt my-4">
            <label for="formGroup">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:" value="{{ $accounts ['lastname'] }}" required>
            </div>
            <div class="form-elemnt my-4">
            <label for="formGroup">Students Email</label>
                <input type="email" class="form-control" name="email" placeholder="Students Email:" value="{{ $accounts ['email'] }}" required>
            </div>
            <div class="form-elemnt my-4">
            <label for="formGroup">Date of Birthday</label>
                <input type="date" class="form-control" name="dob" placeholder="Birthday:" value="{{ $accounts ['dob'] }}" required>
            </div>
            <div class="form-element my-4">
            <label for="formGroup">Phone Number</label>
                <input type="tel" name="phonenum" id="" class="form-control" placeholder="Phone Number:" value="{{ $accounts ['phonenum'] }}" required>
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