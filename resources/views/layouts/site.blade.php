<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="{{ URL::asset('css/site.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Ono Site</title>
</head>
<style>.dropdown:hover .dropdown-menu {
display: block;
    }
</style>
<body>
<div id="content" class="container">

    <div class="row top-bar">
        <button onclick="location.href = '/admin'" class="topAchor btn btn-primary pull-right">Admin</button>
    </div>
    <div class="row">




        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <p class="navbar-brand">ONO</p>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>

                    @foreach($directories as $directory)
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$directory->title}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                        @foreach($categories as $category)

                            @if($directory->id == $category->directory_id)


                                        <li><a href="#">{{$category->title}}</a></li>


                            @endif
                        @endforeach
                            </ul>
                        </li>
                    @endforeach

           </div>
        </nav>


    </div>
    <div class="row">


            <div class="w3-pannel w3-card col-md-3" >
            @yield('sidebar')
            <h1>side bar</h1>
            </div>

        <div class="col-md-9">
            <div class="w3-pannel w3-card col-md-12 adjust-col">
                @yield('content')
            </div>

        </div>

    </div>

</div>

</body>
</html>