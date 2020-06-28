@extends('layout')

@section('content')
<div class="col-sm-6">
    <form method="post" action="">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter address">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop