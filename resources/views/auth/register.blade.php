@extends('auth.app')

@section('content')
<section class="register-content">
    <div class="logo">
        <h1>{{ __("Laravel App") }}</h1>
    </div>
    <div class="register-box">

        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="register-head"><i class="fa fa-lg fa-fw fa-user"></i>{{"SIGN UP"}}</h3>
            <div class="form-group">
                <label for="name" class="control-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                    name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password" class="control-label">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                    autofocus>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>

            <div class="form-group">
                <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autofocus>
            </div>

            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <p class="semibold-text mb-2"><a href="{{ route('login') }}"
                                    data-toggle="flip">{{ __("Log In Your Account") }}</a></p>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="{{ route('password.request') }}"
                            data-toggle="flip">{{ __("Forgot Password ?") }}</a></p>
                </div>
            </div>

            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block">
                    <i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __("SIGN UP") }}
                </button>
            </div>


        </form>

    </div>
</section>
@endsection