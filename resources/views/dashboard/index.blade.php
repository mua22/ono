@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 leftbar">
                    <div class="row">
                        <h3 style="font-size: 20px">Recent Category Listings</h3>
                        <ul class="side-ul">
                            @foreach($categories as $category)

                                <li class="side-li" style=""><a
                                            href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="row article-box">
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

            <div class="col-md-12 rightcontent" style="margin-left: 15px">
                <div class="row" style="color: #555555;width: 700px">
                    <h2 style="color: #35424a;font-weight: 900;font-size: 45px">Welcome to the ONO Demo Site!</h2>
                    <h3 style="font-size: 30px">ONO is best open source, repository to create websites in no time</h3>
                    <div class="box-info" style="padding-left: 10px;margin-bottom: 5px">
                        <ul>
                             
                            <li style="list-style: none"><p><b>Administrator Access: </b>  go to the administration page and use access: demoadmin
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
        <div class="owl-carousel owl-theme">
            <div><img src="{{asset('images/'. 'oblivion.jpg')}}"></div>
            <div><img src="{{asset('images/'. 'rim.jpg')}}"></div>
            <div><img src="{{asset('images/'. 'galaxy.jpg')}}"></div>


        </div>


    </div>

@endsection



