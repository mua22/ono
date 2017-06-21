@extends('layouts.site')
@section('content')

    <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" method="post" action="/admin/login" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="email" class="form-control" name="email" value=""
                               placeholder="Email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                               placeholder="password">
                    </div>
                    {{csrf_field()}}

                    @if(Session::has('status'))
                        <div class="alert alert-danger">
                            {{Session::get('status')}}
                        </div>
                    @endif
                    @if (count($errors) >0 && session('type') == 'login')
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button id="btn-login" href="#" class="btn btn-success">Login</button>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Don't have an account!
                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <div id="signupbox" style="display:none; margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#"
                                                                                           onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign
                        In</a></div>
            </div>
            <div class="panel-body">
                <form id="signupform" action="/admin/register" method="post" class="form-horizontal" role="form">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    {{--

                                        <div class="form-group">
                                            <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="icode" placeholder="">
                                            </div>
                                        </div>
                    --}}
                    @if (count($errors) >0 )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{csrf_field()}}
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>
                                &nbsp Sign Up
                            </button>
                            <span style="margin-left:8px;"></span>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                        {{-- <div class="col-md-offset-3 col-md-9">
                             <button id="btn-fbsignup" type="button" class="btn btn-primary"><i
                                         class="icon-facebook"></i>   Sign Up with Facebook
                             </button>
                         </div>
 --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--    {{dd(session('type'))}}--}}
@if(session('type') == 'reg')
    <script src="/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <script>
        $('#loginbox').hide(); $('#signupbox').show()
    </script>
@endif
<!-- Scripts -->
@endsection