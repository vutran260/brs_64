@extends('auth.master')

@section('title', trans('setting.title.login'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                {!! Form::open([
                    'action' => 'Auth\LoginController@login',
                    'method' => 'POST',
                    'class' => 'form-signin',
                ]) !!}
                    {!! Form::email('email', '', [
                        'placeholder' => trans('user.email'),
                        'id' => 'email',
                        'class' => 'form-control',
                    ]) !!}
                    {!! Form::password('password', [
                        'placeholder' => trans('user.password'),
                        'id' => 'password',
                        'class' => 'form-control',
                    ]) !!}

                    {!! Form::submit(trans('auth.login.signin'), [
                        'class' => 'btn btn-lg btn-primary btn-block',
                    ]) !!}
                    <label class="checkbox pull-left">
                        {!! Form::checkbox('remember_me', 'true'); !!}
                        @lang('auth.login.remember_me')
                    </label>
                    <a href="{{ route('password.request') }}" class="pull-right need-help">@lang('auth.login.forgot_your_pass')</a><span class="clearfix"></span>
                {!! Form::close() !!}
            </div>
            <a href="{{ route('register') }}" class="text-center new-account">@lang('auth.login.create_account')</a>
        </div>
    </div>
</div>
@endsection
