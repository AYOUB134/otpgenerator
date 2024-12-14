@extends('layouts.app')

@section('title', 'Signup')

@section('content')
<div class="auth-container">
    <h2 class="text-center mb-4">Signup</h2>
    <form action="{{ route('signup') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required autofocus>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Signup</button>
    </form>
    <div class="mt-3 text-center">
        Already have an account? <a href="{{ route('login') }}">Login</a>
    </div>
</div>
@endsection

