@extends('layouts.admin')
@section('content')

    @include('directories::articles.form')
    <div class="col-md-offset-2 col-md-5">
        <h2>Manage Categories</h2>

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Linked Categories</th>
                    <th class="action-td"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$article->title}}</td>
                    @foreach($categories as $category)
                    <td><li>{{$category->title}}</li>
                    </td>
                    <td><input type="button" value="delete"
                               class="btn btn-danger btn-xs"></td>
                    <td>

                    @endforeach
                </tbody>
                </table>

        <h2>Link new Categories</h2>


        <select class="form-control" multiple name="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>

    </div>


@endsection
