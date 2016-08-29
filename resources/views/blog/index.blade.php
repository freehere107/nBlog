@extends('layouts.base')
@section('body')
    <header class="intro-header" style="background-image: url('{{asset('/')}}image/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>一个简单的技术博客</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            一个技术博客
                        </h2>
                        <h3 class="post-subtitle">
                            一个技术博客一个技术博客一个技术博客一个技术博客一个技术博客一个技术博客
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Sun</a> on Oct 29, 2016</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">查看更多 &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
@stop
