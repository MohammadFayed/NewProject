@extends('layouts.main')

@section('content')
            <div class="card">
                <div class="card-header">{{ __('messages.varify_email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('messages.new_varification_link') }}
                        </div>
                    @endif

                    {{ __('messages.check_email_varification') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('messages.click_to_send_another_varification') }}</button>.
                    </form>
                </div>
            </div>
@endsection
