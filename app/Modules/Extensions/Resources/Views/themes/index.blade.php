@extends('layouts.admin')

@section('content')
    <link href="/card/css/mdb.css" rel="stylesheet">
    <script type="text/javascript" src="/card/js/mdb.js"></script>
    <div class="container flash">
        @include('flash::message')
    </div>
    @foreach($themes as $theme)

        <div class="col-md-3" style="margin-bottom: 10px;" onclick="location.href='{{route('themes.edit',$theme->id)}}'">
        <div class="card hoverable" @if($theme->status ==1) style="background-color: green;" @endif>
            <div class="card-content">

                <a style="text-decoration: none" href="{{route('themes.edit',$theme->id)}}">{{$theme->name}}</a>
                <span>@if($theme->status ==1)(selected)@endif</span>
            </div>

        </div>
        </div>

    @endforeach





    @endsection