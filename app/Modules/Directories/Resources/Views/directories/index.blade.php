@extends('layouts.admin')

@section('content')
    <div class="box box-primary">

        <div class="box-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>

                </tr>
                </thead>
                <tbody>
                @foreach($directories as $directory)
                    <tr>
                        <td>{{$directory->id}}</td>
                        <td>{{$directory->title}}</td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>

@endsection

