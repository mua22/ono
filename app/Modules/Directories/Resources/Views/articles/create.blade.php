@extends('layouts.admin')

@section('content')
    <div class="col-md-4">
                <form method="post" action="{{route('articles.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Summary</label>
                    <input type="text" class="form-control" name="summary" placeholder="Enter Summary">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>
                    <input type="hidden"  name="directory_id" value="{{$directory}}">

                @foreach($dir_fields as $dir_field)

                    <div class="form-group">
                        <label>{{$dir_field->title}}</label>
                        <input type="text" class="form-control" name="f_{{$dir_field->slug}}" placeholder="Enter {{$dir_field->title}}">
                    </div>

                @endforeach

                <input type="submit" class="btn btn-danger" value="Submit">
                </form>
            </div>


@endsection