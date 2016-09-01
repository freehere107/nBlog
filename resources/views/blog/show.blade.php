@extends('layouts.base')
@section('afterStyle')
@stop
@section('body')
    <header class="intro-header" style="background-image: url('{{asset('/')}}image/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{$post['title']}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {!! $post['content'] !!}.
            </div>
        </div>
    </div>

    <hr>
@stop
@section('afterBody')
@stop
