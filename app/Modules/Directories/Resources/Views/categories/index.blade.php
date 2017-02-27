@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-tools">
                <div class="input-group input-group-sm">
                    <a href="{{route('categories.create')}}" class="btn btn-info">
                        <i class="fa fa-plus"></i> Create New category
                    </a>
                </div>
            </div>
        </div>
        <div class="box-body">

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th class="action-td"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td class="text-right"><div class="btn-group-horizontal">
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                <form action="{{route('categories.destroy',$category->id)}}" class="inline" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                                </form>

                            </div></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection