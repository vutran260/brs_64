@extends('user.master')

@section('title', trans('setting.title.detail'))

@section('styles')
<link rel="stylesheet" href="{{ mix('css/book-detail.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                <div class="caption-full">
                    <h4><a href="#">@lang('book.title')</a>
                    </h4>
                    <p>@lang('book.description')</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">@lang('book.reviews')</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        @lang('book.stars')
                    </p>
                </div>
            </div>
            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success">@lang('messages.leave_a_review')</a>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        @lang('user.name')
                        <span class="pull-right">@lang('user.comment.time')</span>
                        <p>@lang('user.comment.content')</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        @lang('user.name')
                        <span class="pull-right">@lang('user.comment.time')</span>
                        <p>@lang('user.comment.content')</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        @lang('user.name')
                        <span class="pull-right">@lang('user.comment.time')</span>
                        <p>@lang('user.comment.content')</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">@lang('book.category')</a>
                <a href="#" class="list-group-item">@lang('book.category')</a>
                <a href="#" class="list-group-item">@lang('book.category')</a>
            </div>
        </div>
    </div>
</div>
@endsection
