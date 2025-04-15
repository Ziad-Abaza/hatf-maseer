@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
        </div>
    </form>
@endsection
