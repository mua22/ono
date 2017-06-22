<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS & JS -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"
          type="text/css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"
          type="text/css">
    <link rel="stylesheet" media="screen" href="{{ URL::asset('css/site.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <script src="/js/nav.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/card/css/mdb.css" rel="stylesheet">
    <script type="text/javascript" src="/card/js/mdb.js"></script>

    <meta charset="UTF-8">
    <title>Ono Site</title>
</head>

<body style="font-family: 'Lora', 'Times New Roman', serif;">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">
        <br>
        <div class="row2">
            <div class="col-sm-4">
                <h3 style="margin:0px;"><span class="">
                            <a href="/"><span class="highlight" style="color: #ff704d;font-weight: 900">Ono</span></a> A dream job
                        </span></h3>
            </div>
            <div class="flipkart-navbar-search smallsearch  col-sm-4 col-xs-11 ">
                <div class="row col-lg-offset-1">
                    <input class="flipkart-navbar-input col-xs-10" style="color: black" type="text"
                           placeholder="Search Here ..." name="">
                </div>
            </div>

            <div class="cart largenav col-sm-4 ">
                <button class="flipkart-navbar-button col-xs-1 button_1" style="width: 50px" type="submit">
                    <svg width="15px" height="15px">
                        <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                    </svg>
                </button>
                <a class="cart-button pull-right" href="/admin">
                    <span class="glyphicon glyphicon-log-in ">

                    </span>
                    Admin
                </a>
            </div>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="http://clashhacks.in/">Link</a>
</div>

{{--<header>--}}
{{--<div class="container">--}}

{{--<div id="branding">--}}
{{--<h1><span class="highlight">Ono</span> A dream job</h1>--}}
{{--</div>--}}
{{--<a href="/admin" class="btn btn-danger" style="float: right;"><i class="fa fa-lock"--}}
{{--style="margin-right: 5px"></i>Admin</a>--}}

{{--</div>--}}
{{--</header>--}}
<div class="row" style="margin-left: 55px">
    <nav class="navbar-brand" style="background-color: #fff">
        <div class="container-fluid">
            <center>
                <div class="col-lg-12 ">
                    <ul class="nav navbar-nav" style="margin-bottom: 5px">
                        <li class="btn-primary card hoverable"><a href="/">Home</a></li>

                        @foreach($directories as $directory)
                            <li class="dropdown active btn-primary hoverable"><a
                                        href="\directory/{{$directory->slug}}">{{$directory->title}} <span
                                            class="caret"></span></a>

                                <ul class="dropdown-menu" id="zero-padding">
                                    @foreach($categories as $category)

                                        @if($directory->id == $category->directory_id)

                                            <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </center>

            {{--<div class="col-lg-6" id="newsletter">--}}
            {{--<form class="form-inline">--}}
            {{--<div class="form-group">--}}
            {{--<input class="form-control" type="text" placeholder="Search here...">--}}
            {{--<button type="submit" class="button_1 form-control"><i class="fa fa-search"--}}
            {{--aria-hidden="true"></i></button>--}}
            {{--</div>--}}
            {{--</form>--}}

            {{--</div>--}}
        </div>
    </nav>
</div>

<hr>

<div class="container">


    <div class="row" style="background-color:#fff; padding-left: 5px;">

        @yield('content')


    </div>

</div>


<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Ono<span>CMS</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Ono CMS &copy; 2015</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Comsats</span> Lahore, Pakistan</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+924654564</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@ono.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
            vehicula sit amet.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>

</body>
</html>