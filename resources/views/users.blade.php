@extends('layout')

@section('title', 'users')

<title>User list</title>
@section('content')
<link rel ='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>



<section class="list">
<div class="container-lg">
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
        @php
            $count = 0;
        @endphp
        @foreach($accounts as $user)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->dob }}</td>
                <td>{{ $user->phonenum }}</td>
                <td>
                  
                    <a href="{{ route('users-edit', ['id' => $user->id]) }}" class="btn btn-info">Update</a>
                    <a href="{{ route('delete', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a> 
                </td>
            </tr>
</div>
</section>
            @endforeach
        </tbody>
        </table>
@endsection
