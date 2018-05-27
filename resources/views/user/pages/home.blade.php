@extends('user.master')

@section('title', trans('setting.title.home'))

@section('styles')
<link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x300" alt="">
                        <div class="caption">
                            <h4><a href="{{ action('BookController@show', ['id' => 1]) }}">@lang('book.title')</a>
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
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x300" alt="">
                        <div class="caption">
                            <h4><a href="{{ action('BookController@show', ['id' => 1]) }}">@lang('book.title')</a>
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
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x300" alt="">
                        <div class="caption">
                            <h4><a href="{{ action('BookController@show', ['id' => 1]) }}">@lang('book.title')</a>
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
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x300" alt="">
                        <div class="caption">
                            <h4><a href="{{ action('BookController@show', ['id' => 1]) }}">@lang('book.title')</a>
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
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item">@lang('book.category')</a>
                <a href="#" class="list-group-item">@lang('book.category')</a>
                <a href="#" class="list-group-item">@lang('book.category')</a>
            </div>
        </div>
    </div>
</div>
@endsection
