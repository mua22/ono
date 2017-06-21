@extends('layouts.site')
@section('content')
    <div class="w3-container card hoverable" style="background-color: #fff">
        <div class="row">
            <h1>{{$directory->title}}</h1>
        </div>
        <div class="row">

            @foreach($categories as $category)

                <div class="col-md-3 card hoverable col-lg-offset-1 "
                     style="margin-bottom: 20px;min-height: 50px">
                    <div class="card-content">
                        <center>
                            <a style="color: #000;font-weight: 900;" href="/category/{{$category->slug}}">
                                <p>{{$category->title}}
                                    <a class="btn-floating btn-sm waves-effect stylish-color"
                                       style="padding-top: 5px; font-weight: 900;font-size: 16px">{{$category->articles->count()}}</a>
                                </p></a>
                        </center>
                    </div>
                </div>
            @endforeach
        </div>


    </div>



@endsection
