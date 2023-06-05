@extends('Layout.layout')
@section('content')
<h3>Register</h3>
<form action="post-register" method="POST">
    {{csrf_field() }}
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        {{$error}}<br/>
        @endforeach
    </div>
    @endif
<div>
    <label for="username">Name</label>
    <input id="Name" type="text" class="form-control" name="name" required autofocus>
</div>
<div>
    <label for="username">Email</label>
    <input id="email" type="email" class="form-control" name="email" required>
</div>
<div>
    <label for="password">Password</label>
    <input id="password" type="password" class="form-control" name="password" required>
</div>
<div>
    <label for="password">Password Confirmation</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>
<div>
    <label for="level">Role</label>
    <select name="level" class="form-control" required>
        <option  value="user">User</option>
        <option value="admin">Admin</option>
    </select>


<button class="btn btn-primary " type="submit">Sign in</button>
</form>
@endsection