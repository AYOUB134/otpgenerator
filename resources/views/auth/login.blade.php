@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="auth-container">
    <h2 class="text-center mb-4">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div class="mt-3 text-center">
        <a href="#">Forgot your password?</a>
    </div>
    <div class="mt-3 text-center">
        Don't have an account? <a href="{{ route('signup') }}">Sign up</a>
    </div>
</div>
@endsection

