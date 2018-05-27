@extends('auth.master')

@section('title', trans('setting.title.register'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">@lang('auth.register.title')</h1>
            <div class="account-wall">
                {!! Form::open([
                    'action' => 'Auth\RegisterController@register',
                    'method' => 'POST',
                    'class' => 'form-signin',
                ]) !!}
                    {!! Form::email('email', '', [
                        'placeholder' => trans('user.email'),
                        'id' => 'email',
                        'class' => 'form-control',
                        'value' => old('email'),
                    ]) !!}
                    {!! Form::text('name', '', [
                        'placeholder' => trans('user.name'),
                        'id' => 'name',
                        'class' => 'form-control',
                        'value' => old('name'),
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
                    {!! Form::submit(trans('auth.register.name'), [
                        'class' => 'btn btn-lg btn-primary btn-block',
                    ]) !!}
                    <a href="{{ route('login') }}" class="pull-right need-help">@lang('auth.login.signin')</a><span class="clearfix"></span>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
