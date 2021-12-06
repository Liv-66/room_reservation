@extends('layouts.main')

@section('content')

<form action="{{ route('doLogin') }}" method="POST">
    @csrf
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    </div>
    <div class="form-label-group">
        <label for="inputEmail">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="admin@mail.com" required autofocus>
    </div>
    <br />
    <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" value="aa" required>
    </div>
    <br />
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">
    <!-- <div class="text-center mb-4">
        <p><a href="/signup">Sign Up</a></p>
    </div> -->
</form>

@endsection('content')