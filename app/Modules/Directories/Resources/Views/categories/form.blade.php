<div class="box box-primary">
    <form action="@if(isset($category)){{route('categories.update',$category->id)}}@else{{route('categories.store')}}@endif" role="form" class="form-horizontal" method="post">
        @if(isset($category))
            {{method_field('PATCH')}}
        @else
            {{method_field('POST')}}
        @endif

        {{csrf_field()}}
    <div class="box-body">

            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                    @if(isset($category))value="{{$category->title}}"@endif>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control text-left" id="description" placeholder="Description">
                        @if(isset($category)){{$category->description}}@endif
                        </textarea>
                </div>
            </div>




    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>