<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Blog</title>
    <link href="{{asset('/')}}css/app.css" rel="stylesheet">
    <link href="{{asset('/')}}css/all.css" rel="stylesheet">
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    @section('afterStyle')
    @show
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('widgets.main-nav')
@section('body')
@show
@include('widgets.main-footer')
<script src="{{asset('/')}}js/app.js"></script>
<script src="{{asset('/')}}js/clean-blog.js"></script>
@section('afterBody')
@show
</body>
</html>
