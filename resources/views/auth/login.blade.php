@extends('layouts.front.design')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <p class="text-center">Login</p>
        </div>
        <div class="card-body">
            <form action="{{ route('user.register') }}" method="POST"> 
                @csrf
                <div class=" form-group row">
                    <div class="col-md-4">
                        &nbsp;
                </div>
                 <div class="col-md-4">
                    <label for="username" class="form-label">User Name</label></div>
                <input type="text" class="form-control" name="username" placeholder="John Doe" required>
                <div class="col-md-4">
                    &nbsp;
                </div>
            </div>
            <div class=" form-group row">
                <div class="col-md-4">
                    &nbsp;
            </div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label></div>
            <input type="password" class="form-control" name="password" required>
            <div class="col-md-4">
                &nbsp;
            </div>
        </div><div class=" form-group row">
            <div class="col-md-4">
                &nbsp;
        </div>
    
@endsection