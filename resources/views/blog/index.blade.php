@extends('layouts.base')
@section('body')
    <header class="intro-header" style="background-image: url('{{asset('/')}}image/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>一个简单的技术博客</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        @include('vendor.loading')
        <div class="row post-list" hidden>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <post></post>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="{{route('post.index')}}">查看更多 &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <hr>
@stop
