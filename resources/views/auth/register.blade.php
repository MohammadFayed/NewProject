@extends('layouts.main')

@section('content')
    <form class="auth" method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div class="form-group">
            <div class="con-input">
                <input type="text" name="fullname" value="{{ old('fullname') }}"
                    class="form-control @error('fullname') invalid @enderror" autocomplete="off" required>
                <label for="fullname" class="label-input">
                    <span class="content-input">الاسم بالكامل</span>
                </label>
            </div>
            @error('fullname')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror

        </div>
        <div class="form-group">
            <div class="con-input">
                <input type="text" name="username" value="{{ old('username') }}"
                    class="form-control @error('username') invalid @enderror" autocomplete="off" required>
                <label for="username" class="label-input">
                    <span class="content-input error-content">اسم المستخدم</span>
                </label>
            </div>
            <div class="con-info">
                <button class="show-info" type="button" data-toggle="collapse" data-target="#showInformation"
                    aria-expanded="false" aria-controls="showInformation">
                    <i class="fas fa-exclamation-circle"></i>
                </button>
                <div class="collapse info" id="showInformation">
                    <div class="card card-body">
                        <small>مسموح بالحروف الكبيره والصغيره والارقام فقط</small>
                    </div>
                </div>
            </div>
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
                <input type="text" name="email" value="{{ old('email') }}"
                    class="form-control  @error('email') invalid @enderror" required>
                <label for="email" class="label-input">
                    <span class="content-input error-content">البريد الاكترونى</span>
                </label>
            </div>
            @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
        @else
            <small class="form-text text-muted">سيتم ارسال رسالة التفعيل على البريد الذى ستدخله</small>
            @enderror
        </div>

        <div class="form-group">
            <div class="con-input">
                <input type="password" name="password" class="form-control @error('password') invalid @enderror"
                    autocomplete="new-password" required>
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
        <div class="form-group form-check">
            <input type="checkbox" name="terms" class="form-check-input @error('terms') is-invalid @enderror">
            <label class="form-check-label mr-4" for="exampleCheck1">الموافقه على الشروط والاحكام</label>
            @error('terms')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">تسجيل</button>
    </form>
@endsection
