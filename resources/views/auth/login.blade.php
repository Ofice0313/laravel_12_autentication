@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Login Page</span>
            </div>
            <form action="">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="" placeholder="Email" required>
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="" placeholder="Password" required>
                </div>

                <div class="pass">
                    <a href="{{ url('forgot') }}">Forgot Password</a>
                </div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>

                <div class="signup-link">
                    Join now? <a href="{{ url('registration') }}">Registration</a>
                </div>

                <div class="signup-link">
                    Welcome Page? <a href="{{ url('/') }}">Welcome Page</a>
                </div>
            </form>
        </div>
    </div>
@endsection
