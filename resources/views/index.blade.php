@extends('layouts/app')
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="title">
            <span>Welcome Page</span>
        </div>
        <form action="">
            <div class="signup-link">
                Sign In? <a href="{{ url('login') }}">Login</a>
            </div>
            <div class="signup-link">
                Join now? <a href="{{ url('registration') }}">Registration</a>
            </div>
        </form>
    </div>
</div>
@endsection

