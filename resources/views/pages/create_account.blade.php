@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div clas="card-title"><h1>Create Account</h1>
            <p class="lead">Please use this form to create a site account.</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input name="name" type="text" class="form-control" placeholder="Username ">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Create Account</button>
            </form>
        </div>
    </div>
@endsection
