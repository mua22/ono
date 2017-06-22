@extends('layouts.admin')

@section('content')

@section('content')

    <form action="{{route('fields.add',$directory->id)}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <select class="form-control" name="ftype">
                <option>text</option>
                <option>textarea</option>
                <option>dropdown</option>
                <option>date</option>
                <option>email</option>
                <option>number</option>


            </select><br>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>

@endsection

@endsection