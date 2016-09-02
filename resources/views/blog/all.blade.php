@extends('layouts.base')
@section('body')

    <header class="intro-header" style="background-image: url('{{asset('/')}}image/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>所有博客</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <all></all>
            </div>
        </div>
    </div>
@stop
