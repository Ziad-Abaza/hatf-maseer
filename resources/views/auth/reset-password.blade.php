@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ request()->email }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Reset Password</button>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
        </div>
    </form>
@endsection
