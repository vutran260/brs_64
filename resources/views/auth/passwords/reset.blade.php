@extends('auth.master')

@section('title', trans('setting.title.reset_password'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">@lang('auth.reset_password.title')</h1>
            <div class="account-wall">
                {!! Form::open([
                    'action' => 'Auth\ResetPasswordController@reset',
                    'method' => 'POST',
                    'class' => 'form-signin',
                ]) !!}
                    {!! Form::email('email', '', [
                        'placeholder' => trans('user.email'),
                        'id' => 'email',
                        'class' => 'form-control',
                        'value' => old('email'),
                    ]) !!}
                    {!! Form::password('password', [
                        'placeholder' => trans('user.password'),
                        'id' => 'password',
                        'class' => 'form-control',
                    ]) !!}
                    {!! Form::password('password_confirmation', [
                        'placeholder' => trans('user.password_confirmation'),
                        'id' => 'password_confirmation',
                        'class' => 'form-control',
                    ]) !!}
                    {!! Form::submit(trans('auth.reset_password.name'), [
                        'class' => 'btn btn-lg btn-primary btn-block',
                    ]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
