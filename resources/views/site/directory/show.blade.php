@extends('layouts.site')
@section('content')


    <div class="w3-container">
        <div class="row">
            <h1>{{$directory->title}}</h1>
        </div>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <table class="w3-table w3-bordered">
                        <tr>
                            <th>{{$category->title}}({{$category->articles()->count()}})



                            </th>
                        </tr>

                    </table>
                    </div>
                    @endforeach
        </div>



    </div>
    <div class="row">

    </div>
@endsection
