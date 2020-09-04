@extends('layouts.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="auth" method="POST" action="{{ route('password.update') }}" novalidate>
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <div class="con-input">
                <input type="text" name="email" value="{{ $email ?? old('email') }}"
                    class="form-control @error('email') invalid @enderror" autocomplete="off">
                <label for="username" class="label-input">
                    <span class="content-input error-content">{{ __('messages.email') }}</span>
                </label>
            </div>
            {{-- <div class="con-info">
                <button class="show-info" type="button" data-toggle="collapse" data-target="#showInformation"
                    aria-expanded="false" aria-controls="showInformation">
                    <i class="fas fa-exclamation-circle"></i>
                </button>
                <div class="collapse info" id="showInformation">
                    <div class="card card-body">
                        <small>مسموح بالحروف الكبيره والصغيره والارقام فقط</small>
                    </div>
                </div>
            </div> --}}
            @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="con-input">
                <input type="password" name="password" class="form-control @error('password') invalid @enderror"
                    autocomplete="new-password" required autofocus>
                <label for="password" class="label-input">
                    <span class="content-input error-content">كلمة المرور</span>
                </label>
            </div>
            @error('password')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="con-input">
                <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password"
                    required>
                <label for="password" class="label-input">
                    <span class="content-input error-content"> تأكيد كلمة المرور</span>
                </label>
            </div>
        </div>

        <div class="form-group row">
        <button type="submit" class="btn btn-primary btn-block mb-3">{{ __('messages.reset_password') }}</button>
        </div>
    </form>
@endsection
