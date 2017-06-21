@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 leftbar">
                    <div class="row">
                        <h3 style="font-size: 20px">Recent Category Listings</h3>
                        <ul class="list-group card hoverable" style="  transition: box-shadow .55s;">
                            @foreach($categories as $category)
                                <li class="list-group-item card hoverable" style=""><a
                                            href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row article-box card" style="background-color: #5fb26a;">
                        <h4><b>Statistics</b></h4>
                        <p>Number of articles will show here</p>
                    </div>

                </div>


            </div>

        </div>

        <div class="col-md-9">

            <script>


                $(document).ready(function () {
                    $('.owl-carousel').owlCarousel({

                        items: 1,
                        autoplay: true,
                        autoplaySpeed: 450,
                        loop: true,
                    });
                });


            </script>

            <div class="col-md-12 card rightcontent" style="margin-left: 15px;padding-left: 25px">
                <div class="row" style="color: #555555;width: 700px">
                    <h2 style="color: #35424a;font-weight: 900;font-size: 45px">Welcome to the ONO Demo Site!</h2>
                    <h3 style="font-size: 30px">ONO is best open source, repository to create websites in no time</h3>
                    <div class="card box-info" style="background-color: #bce8f1;padding-left: 10px;margin-bottom: 5px">
                        <ul class="">
                             
                            <li style="list-style: none"><p><b>Administrator Access: </b> go to the administration page
                                    and use access: demoadmin
                                    /
                                    demoadmin
                                    .</p>
                            </li>
                            <li style="list-style: none">
                                <p><b>Front Access: </b>Currently Viewing
                                    .</p>
                            </li>
                        </ul>
                    </div>
                    <p></p>
                    <p>The site runs on Laravel 5 + with, DirectoryListings, CategoryListings, Articles. The site uses
                        custom layouts and template

                    </p><br>
                    <h4>Modules & Feature Highlights</h4>
                    <p>There are many features in the core package that it's not possible mention all of them here,
                        but we want to bring your attention to where you'll find some of them in the demo.</p>
                    <ul>
                        <li><b>Manage Directories:</b>
                            <p>Let user Add Directories dynamically through the panels and navbar will be generated
                                accordingly.</p></li>
                        <li><b>Link Categories:</b>
                            <p>Let user link categories to a directory, Each Directory will contain its own seperate
                                categories. The Categories will be listed accordingly upon hovering a directory.</p>
                        </li>
                        <li><b>Articles:</b>
                            <p>Let user link categories to a directory, Each Directory will contain its own seperate
                                categories. The Categories will be listed accordingly upon hovering a directory.</p>
                        </li>
                    </ul>


                </div>

                <div class="row">


                </div>


            </div>


        </div>


    </div>


    <div class="row">
        <h3 class="col-sm-offset-3">Recent Articles</h3>
        <div id="myCarousel" class="carousel slide col-lg-4 col-sm-offset-3" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="margin-top: 50px">
                @foreach($articles as $article)
                    <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"
                        @if($loop->index == 0)
                        class="active"
                            @endif
                    ></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($articles as $article)
                    <div class="item
                    @if($loop->index == 0)
                            active
@endif
                            ">
                        <img src="{{asset('images/'.$article->image)}}" alt="Chania">
                        <div class="carousel-caption" >
                            <p style="font-size: 20px;color: #fff;font-weight: 900"><a style="color: white"
                                        href="/category/detail/{{$article->id}}">{{$article->title}}</a></p>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection



