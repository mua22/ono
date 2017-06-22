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
                        <h4><b>Articles</b></h4>
                        <p>({{$articles->count()}})</p>
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
        <h3>Recent Articles</h3>
        @foreach($articles as $article)
            <div class="col-md-3" style="margin-bottom: 10px">
                <!--Image Card-->
                <div class="card hoverable" onclick="location.href='/category/detail/{{$article->id}}'" style="cursor: pointer">
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection



