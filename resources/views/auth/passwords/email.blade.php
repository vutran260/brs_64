@extends('auth.master')

@section('title', trans('setting.title.forgot_password'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">@lang('auth.forgot_password.title')</h1>
            <div class="account-wall">
                {!! Form::open([
                    'action' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
                    'method' => 'POST',
                    'class' => 'form-signin',
                ]) !!}
                    {!! Form::email('email', '', [
                        'placeholder' => trans('user.email'),
                        'id' => 'email',
                        'class' => 'form-control',
                    ]) !!}
                    {!! Form::submit(trans('auth.forgot_password.send'), [
                        'class' => 'btn btn-lg btn-primary btn-block',
                    ]) !!}
                {!! Form::close() !!}
            </div>
            <a href="{{ route('login') }}" class="text-center new-account">@lang('auth.login.signin')</a>
        </div>
    </div>
</div>
@endsection
