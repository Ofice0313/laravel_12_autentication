@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Registration Page</span>
            </div>
            <form action="">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="" placeholder="Username" required>
                </div>

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="" placeholder="Email" required>
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="" placeholder="Password" required>
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="" placeholder="Confirm Password" required>
                </div>

                <div class="row">
                    <select name="" id="" class="selectbox" required>
                        <option value="">Select Role</option>
                        <option value="2">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                </div>

                <div class="pass">
                    <a href="{{ url('forgot') }}">Forgot Password</a>
                </div>
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>

                <div class="signup-link">
                    Sign In? <a href="{{ url('login') }}">Login</a>
                </div>

                <div class="signup-link">
                    Welcome Page? <a href="{{ url('/') }}">Welcome Page</a>
                </div>
            </form>
        </div>
    </div>
@endsection
