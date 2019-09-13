@extends('auth.app')

@section('content')
<section class="login-content">
    <div class="logo">
        <h1>{{ __("Laravel App") }}</h1>
    </div>
    <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>{{"SIGN IN"}}</h3>
            <div class="form-group">
                <label class="control-label">{{__("USERNAME")}}</label>
                <input id="email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" type="email"
                    name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label">{{ __("PASSWORD") }}</label>
                <input name="password" id="password"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required
                    autofocus>
                @if($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first("password") }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="label-text">{{ __('Remember Me') }}</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">{{ __("Forgot Password ?") }}</a></p>
                </div>
                <div>
                    <p class="semibold-text mb-2">
                        <a href="{{ route('register') }}" class="text-center d-block">{{ __("Create An Account") }}</a>
                    </p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block">
                    <i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __("SIGN IN") }}
                </button>
            </div>

        </form>

        <form class="forget-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>{{ __("Forgot Password ?") }}</h3>
            <div class="form-group">
                <label class="control-label">{{ __("EMAIL") }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block">
                    <i class="fa fa-unlock fa-lg fa-fw"></i>
                    {{ __("RESET") }}
                </button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0">
                    <a href="#" data-toggle="flip">
                        <i class="fa fa-angle-left fa-fw"></i>
                        {{ __("Back to Login") }}
                    </a>
                </p>
            </div>
        </form>
    </div>
</section>
@endsection