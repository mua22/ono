@section('content')

<div class="box box-primary">
    <form action="@if(isset($field)){{route('fields.update',$field->id)}}@else{{route('fields.submit',$directory->id)}}@endif" role="form" class="form-horizontal" method="post">
        @if(isset($field))
            {{method_field('PATCH')}}
            <input type="hidden" name="dir" value="{{$dir}}">

        @else
            {{method_field('POST')}}
            <input type="hidden" name="ftype" value="{{$ftype}}">
        @endif

        {{csrf_field()}}
    <div class="box-body">

            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Field Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                    @if(isset($field))value="{{$field->title}}"@endif required>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Field Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control text-left" id="description" placeholder="Description">
                        @if(isset($field)){{$field->description}}@endif
                        </textarea>
                </div>
            </div>

        @if($ftype == 'dropdown')
        <div>
            <div class="col-md-6 col-lg-offset-2">

                    <input type="text" placeholder="Enter value to add in the dropdown" id="dropval" class="form-control">
                    <br>
                    <input type="button" class=" btn btn-info" value="Add in dropdown" onclick="fun()">
                    <p id="fun"></p>
                    <select class="form-control" name="sel[]" id="sel" style="text-align-last: center" multiple>
                        {{--<option disabled selected>Please Fill the above field</option>--}}

                    </select>
            </div>
        </div>
        @endif


    </div>
    <div class="box-footer">

        <input type="submit" class="btn btn-danger form-control" value="Submit" name="submit" onclick="fun1()">
    </div>
    </form>
</div>


@endsection