@extends('layouts.site')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" width="360" height="360" src="{{asset('images/'. $article->image)}}"/>
            </div>
            <div class="col-xs-5" style="border:0px solid #f1f6cb">
                <h2>{{$article->title}}</h2>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td style="font-weight: 900">Price</td>
                        <td>{{$article->toArray()["f-price"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">Brand</td>
                        <td>{{$article->toArray()["f-brand"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">Model</td>
                        <td>{{$article->toArray()["f-model"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">Year</td>
                        <td>{{$article->toArray()["f-year"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">MPAA rating</td>
                        <td>{{$article->toArray()["f-mpaa-rating"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">Directed By</td>
                        <td>{{$article->toArray()["f-directed-by"]}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 900">Release Date</td>
                        <td>{{$article->toArray()["f-release-date"]}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-9">

                <div style="width:100%;">
                    <h3>Description : </h3>
                    <p style="padding:15px;">
                        <small>
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16
                            GB of memory and a 4G connection, this phone stores precious photos and video and lets you
                            upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating
                            life from one charge, this phone allows you keep in touch even on the go.

                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a
                            finger, eliminating extraneous background items. Usable with most carriers, this smartphone
                            is the perfect companion for work or entertainment.
                        </small>
                    </p>
                    <h3>Summary : </h3>
                    <p style="padding:15px;">
                        <small style="">
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16
                            GB of memory and a 4G connection, this phone stores precious photos and video and lets you
                            upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating
                            life from one charge, this phone allows you keep in touch even on the go.

                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a
                            finger, eliminating extraneous background items. Usable with most carriers, this smartphone
                            is the perfect companion for work or entertainment.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection