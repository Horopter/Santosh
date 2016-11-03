<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li {{ Request::is('/')?"class=active":"" }}>
                        <a href="/">Home</a>
                    </li>
                    <li {{ Request::is('blog')?"class=active":"" }}>
                        <a href="blog">Blog</a>
                    </li>                    
                    <li {{ Request::is('about')?"class=active":"" }}>
                        <a href="about">About</a>
                    </li>
                    <li {{ Request::is('contact')?"class=active":"" }}>
                        <a href="contact">Contact</a>
                    </li>
                    @if(Auth::check())
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Hello {{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                            {!! Form::open(['route' => 'logout','name' => 'logout-form'
                            ,'id' => 'logout-form',]) !!}
                            {!! Form::button('Log Out', [
                            'type' => 'submit'
                            ]) !!}
                            {!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                    @else
                    <li>
                     <a href="{{route('login')}}">Login</a>
                    </li>
                    @endif
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>