@extends('layouts.site')
@section('content')

    <div class="row">


        <div class="w3-pannel w3-card col-md-3" >
            @yield('sidebar')
            <h1>side bar</h1>
        </div>

        <div class="col-md-9">
            <div class="w3-pannel w3-card col-md-12 adjust-col">
                <div class="w3-container">
                    <div class="row">
                        <h1>{{$directory->title}}</h1>
                    </div>
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-md-4">
                                <table class="w3-table w3-bordered">
                                    <tr><?php $count = 0; ?>
                                        @foreach($articles as $article)
                                            @if($article->category_id == $category->id)
                                                <?php $count++ ?>
                                            @endif
                                        @endforeach
                                        <th><a href="/category/{{$category->slug}}">{{$category->title}}({{$count}})</a></th>

                                    </tr>

                                </table>
                            </div>
                        @endforeach
                    </div>



                </div>
            </div>

        </div>

    </div>


    <div class="row">

    </div>
@endsection
