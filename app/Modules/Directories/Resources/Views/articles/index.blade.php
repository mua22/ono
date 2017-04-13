@extends('layouts.admin')

@section('content')
    <h1>Browse All Articles</h1>
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-tools">
                <div class="input-group input-group-sm">
                    <a href="{{route('articles.create')}}" class="btn btn-info">
                        <i class="fa fa-plus"></i> Create New Article
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
                    <th>Summary</th>
                    <th>Linked Categories</th>
                    <th class="action-td"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->summary}}</td>
                        <td>{{$article->summary}}</td>
                        <td class="text-right"><div class="btn-group-horizontal">
                                <a href="{{route('articles.edit',$article->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                <form action="{{route('articles.destroy',$article->id)}}" class="inline" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                                </form>

                            </div></td>
                    </tr>
                @endforeach
                </tbody>
                <tfooter></tfooter>
            </table>
        </div>

    </div>

@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render('admin.articles.index') !!}
@endsection
