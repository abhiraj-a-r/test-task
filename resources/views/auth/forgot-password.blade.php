@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Reset Password') }}</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="old_password">{{ __('Old Password') }}</label>
                <input id="old_password" type="password" class="form-control" name="old_password" required autocomplete="current-password">
            </div>

            <div class="form-group">
                <label for="password">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm New Password') }}</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </form>
    </div>
</div>
@endsection