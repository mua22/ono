<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Ono Site</title>
</head>
<body>
<div id="content" class="container">

        <div class="row">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="/">Home</a></li>
                @foreach($directories as $directory)
                    <li role="presentation"><a href="/directory/{{$directory->slug}}">{{$directory->title}}</a></li>

                @endforeach
                <li><a href="/admin">Admin</a></li>
            </ul>
        </div>
        <div class="row">
            @yield('content')
        </div>

</div>

</body>
</html>