@extends($theme_layout)
@section('content')
    <link href="{{ Theme::asset('orange::css/style.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" width="360" height="360" src="{{asset('images/'. $article->image)}}"/>
            </div>
            <div class="col-xs-5 detail-orange" style="border:0px solid #f1f6cb">
                <h2>{{$article->title}}</h2>
                <table class="table table-striped">
                    <tbody>
                    @foreach($columns as $column)
                        @if($column == 'id' || $column == 'slug' || $column == 'directory_id' || $column == 'created_at' || $column == 'updated_at')
                        @elseif($column == 'image')
                        @elseif($column == 'description')
                        @elseif($column == 'title')
                        @else
                            @if($article->$column!='')
                                <tr>
                                    <td><b>{{$column}}</b></td>
                                    <td>{{$article->$column}}</td>
                                </tr>
                            @endif
                        @endif
                    @endforeach
                    <tr>

                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-9">

                <div style="width:100%;">
                    <h3>Description : </h3>
                    <p style="padding:15px;">
                        <small>
                            {{$article->description}}
                        </small>
                    </p>
                    <h3>Summary : </h3>
                    <p style="padding:15px;">
                        <small style="">
                            {{$article->description}}
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection