@extends('layout')

@section('content')
<h1>Register New User</h1>
<form method="post" action="/laravel2/blog/public/register">
@csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label>Contact</label>
        <input type="text" name="contact" class="form-control" placeholder="Enter contact number">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@stop