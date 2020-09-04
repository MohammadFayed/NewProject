@extends('layouts.main')

@section('content')
    <form class="auth" method="POST" action="{{ route('login') }}" novalidate>
        @csrf
        <div class="form-group">
            <div class="con-input">
                <input type="text" name="username" value="{{ old('username') }}"
                    class="form-control @error('username') invalid @enderror" autocomplete="off" autofocus>
                <label for="username" class="label-input">
                    <span class="content-input error-content">اسم المستخدم</span>
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
            @error('username')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small> --}}
        </div>

        <div class="form-group">
            <div class="con-input">
                <input type="password" name="password" class="form-control @error('password') invalid @enderror"
                    autocomplete="current-password" required>
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
        <div class="form-group form-check p-2">
            <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label mr-4" for="exampleCheck1">{{ __('messages.remmber_me') }}</label>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block mb-3">تسجيل دخول</button>
            <div class="col">
                @if (Route::has('password.request'))
                    <a class="btn btn-link mr-auto pr-0" href="{{ route('password.request') }}">
                        {{ __('messages.forgot_password') }}
                    </a>
                @endif
            </div>
            <div class="col ml-auto">
                @if (Route::has('register'))
                    <a class="btn btn-link ml-auto pl-0" href="{{ route('register') }}">
                        {{ __('messages.register') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
@endsection
