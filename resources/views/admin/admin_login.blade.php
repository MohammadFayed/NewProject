@extends('admin.layout')

@section('login')
    
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('messages.welcome') }}</h1>
                            </div>
                            @if(session()->has('error'))
                                <div class="alert alert-danger text-center">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form class="user" action="{{ route('admin.login') }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{ __('messages.enter_email') }}"
                                        autocomplete="email" autofocus/>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user  @error('password') is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="{{ __('messages.enter_password') }}">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" name="remmber" value="remmber me" class="custom-control-input"
                                            id="customCheck">
                                        <label class="custom-control-label"
                                            for="customCheck">{{ __('messages.remmber_me') }}</label>
                                    </div>
                                </div>
                                <input type="submit" value="{{ __('messages.login') }}"
                                    class="btn btn-primary btn-user btn-block" />
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">{{ __('messages.forgot_password') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
