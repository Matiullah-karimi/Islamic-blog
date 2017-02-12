
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mawlana Rashed</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if(!Auth::guest())
            <a href="#" id="navigation">
                <span class="navbar-brand glyphicon glyphicon-align-justify">
                </span>
            </a>
            @endif
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('#') }}">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="{{ url('/contact-us') }}">Contact</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->

</nav>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <li><a href="users">Users</a></li>
    <a href="/posts">Posts</a>
</div>

<!-- Page Content -->
<div class="container">

    <div class="row">

        {{--main content--}}

        <div class="col-md-8">
            @yield('carousel')

            @yield('content')
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            @yield('sidebar')
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- Footer -->
{{--<footer class="footer navbar navbar-inverse navbar-fixed-bottom">--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<p>Copyright &copy; Your Website 2014</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}
{{--</footer>--}}
@yield('footer')

<!-- jQuery -->
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script>
    var open = false;
    $("#navigation").click(function(){
        if (open===false){
            document.getElementById("mySidenav").style.width = "250px";
            open = true;
        }else{document.getElementById("mySidenav").style.width = "0";
        open=false;}

    });

</script>
</body>

</html>
