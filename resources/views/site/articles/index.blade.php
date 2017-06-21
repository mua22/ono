@extends('layouts.site')
@section('content')
    <div class="col-md-12">

        <h2>{{$category->title}}</h2>
        <hr>


        <ul>
            @foreach($articles as $article)
                <div class="col-md-3 col-lg-offset-1" style="margin-bottom: 10px">
                    <!--Image Card-->
                    <div class="card hoverable">
                        <div class="card-image">
                            <div class="view overlay hm-white-slight z-depth-1">
                                <img src="{{asset('images/'. $article->image)}}" class="img-responsive" alt="">
                                <a href="/category/detail/{{$article->id}}">
                                    <div class="mask waves-effect"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-content">
                            <h5>{{$article->title}}</h5>
                            <p>{{$article->description}}</p>
                            <p>
                                @foreach($columns as $column)
                                    @if($column == 'id' || $column == 'slug' || $column == 'directory_id' || $column == 'created_at' || $column == 'updated_at')
                                    @elseif($column == 'image')
                                    @elseif($column == 'description')
                                    @elseif($column == 'title')
                                    @else
                                        <span style="font-size: 10px">@if($article->$column!='') {{$article->$column}}@endif</span>
                                    @endif
                                @endforeach
                            </p>
                        </div>

                    </div>
                    <!--Image Card-->
                </div>
            @endforeach
        </ul>
    </div>
    <div></div>
@endsection