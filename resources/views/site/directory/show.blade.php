@extends('layouts.site')
@section('content')
    <div class="row">
        <h1>{{$directory->title}}</h1>
        <p>{{$directory->description}}</p>
    </div>
    <div class="row">
        @foreach($directory->categories as $category)
            <div class="col-md-3">
                <h2>{{$category->title}}</h2>
                <p>{{$category->description}}</p>
            </div>
            @endforeach
    </div>
    @endsection
