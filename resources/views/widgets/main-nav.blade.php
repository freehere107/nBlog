<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('blog')}}">Laravel</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('blog')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('post.create')}}">Post</a>
                </li>
                <li>
                    <a href="{{route('blog')}}">Sample Post</a>
                </li>
                <li>
                    @if (Auth::guest())
                        <a href="{{route('login')}}">Login</a>
                    @else
                        <a href="{{route('home')}}">{{ Auth::user()->name }} </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
