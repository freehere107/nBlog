@extends('layouts.base')
@section('afterStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@stop
@section('body')
    <header class="intro-header" style="background-image: url('{{asset('/')}}image/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>发表一篇新的博客</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="publish-content">
            <div class="publish-header">
                <input type="text" placeholder="标题" class="publish-title">
            </div>
            <textarea id="editor"></textarea>
        </div>
        <div class="publish">
            <button class="btn btn-default publish-button" type="button">发布</button>
        </div>
    </div>
@stop
@section('afterBody')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var option = {
            //autoDownloadFontAwesome: true,
            autofocus: true,
            placeholder: "从这里开始输入...",
            autosave: {
                enabled: true,
                uniqueId: "MyUniqueID",
                delay: 1000
            },
            toolbar: ["bold", "italic", "strikethrough", "heading", "|", "quote", "code", "table", "unordered-list", "ordered-list", "|", "preview", "fullscreen", "side-by-side"],
            toolbarTips: true,
            status: ["autosave", "words"] // Optional usage
        };
        var simplemde = new SimpleMDE(option);
        $('.publish-button').on('click', function () {
            var content = simplemde.value();
            var title = $('.publish-title').val();
            $.post('{{url('/')}}/api/publish', {'content': content, 'title': title, 'userID':{{ $userID }} }, function (data) {
                console.log(data)
            })
        });
    </script>
@stop
