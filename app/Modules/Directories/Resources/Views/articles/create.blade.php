@extends('layouts.admin')

@section('content')


        @if(isset($directories))
            <form action="{{route('articles.create')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <select class="form-control" name="dir">
                @foreach($directories as $directory)
                    <option>{{$directory->title}}</option>
                @endforeach
            </select><p></p>
            <input type="submit" class="btn btn-primary">
        </div>
            </form>
        @else
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

                @foreach($dir_fields as $dir_field)
                    @foreach($fields as $field)
                        @if($field->id == $dir_field->id)
                    <div class="form-group">
                        <label>{{$field->title}}</label>
                        <input type="text" class="form-control" name={{$field->title}} placeholder="Enter {{$field->title}}">
                    </div>
                        @endif

                        @endforeach
                @endforeach

                <input type="submit" class="btn btn-danger" value="Submit">
                </form>
            </div>




        @endif












@endsection