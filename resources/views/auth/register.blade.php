@extends('layouts.front.design')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <p class="text-center">Register</p>
        </div>
        <div class="card-body">
            <form action="{{ route('user.register') }}" method="POST"> 
                @csrf
                <div class=" form-group row">
                    <div class="col-md-4">
                        &nbsp;
                </div>
                 <div class="col-md-4">
                    <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="John Doe" required>
            </div>
                <div class="col-md-4">
                    &nbsp;
                </div>
            </div>
            <div class=" form-group row">
                <div class="col-md-4">
                    &nbsp;
            </div>
             <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com" required>
        </div>
            <div class="col-md-4">
                &nbsp;
            </div>
        </div><div class=" form-group row">
            <div class="col-md-4">
                &nbsp;
        </div>
         <div class="col-md-4">
            <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
            </span>
    @enderror
</div>
        <div class="col-md-4">
            &nbsp;
        </div>
    </div><div class=" form-group row">
        <div class="col-md-4">
            &nbsp;
    </div>
     <div class="col-md-4">
        <label for="_confirm" class="form-label">Retype password</label>
    <input type="password" name="password_confirmation" class="form-control"  required>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
            </span>
    @enderror
</div>
    <div class="col-md-4">
        &nbsp;
    </div>
</div>
<input type="submit" class="btn btn-primary btn-md" value="Register">
            </form>
        </div>
    </div>
</div>
    
@endsection