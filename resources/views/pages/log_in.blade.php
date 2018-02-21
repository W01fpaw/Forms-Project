@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div clas="card-title"><h1>Log in</h1>
            <p class="lead">Please use this form to log in to the website.</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input name="name" type="text" class="form-control" placeholder="Username ">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
