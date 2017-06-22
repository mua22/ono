<div class="col-md-5">
    <form method="post"
          action="@if(isset($article)){{route('articles.update',$article->id)}}@else{{route('articles.store')}}@endif"
          enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{method_field('POST')}}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title" required
                   @if(isset($article))value="{{$article->title}}"@endif>
        </div>
        <div class="form-group">
            <label>Summary</label>
            <input type="text" class="form-control" name="summary" placeholder="Enter Summary" required
                   @if(isset($article))value="{{$article->summary}}"@endif>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required
                      placeholder="Enter Description"> @if(isset($article)){{$article->description}}@endif</textarea>
        </div>
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" class="form-control" name="image" @if(isset($article))value="{{$article->image}}"@endif>
        </div>
        <input type="hidden" name="directory_id" value="{{$directory}}">
        @foreach($dir_fields as $dir_field)

            <div class="form-group">
                <label>{{$dir_field->title}}</label>
                <?php $col_name = "f-" . $dir_field->slug?>


                @if($dir_field->ftype == 'text')
                    <input type="text" class="form-control" name="f-{{$dir_field->slug}}"
                           placeholder="Enter {{$dir_field->title}}"
                           @if(isset($article))value="{{$article->$col_name}}"@endif required>
                @elseif($dir_field->ftype == 'textarea')
                    <textarea class="form-control" required placeholder="Enter {{$dir_field->title}}"@if(isset($article))value="{{$article->$col_name}}"@endif></textarea>

                @elseif($dir_field->ftype == 'email')
                    <input type="email" class="form-control" required>

                @elseif($dir_field->ftype == 'date')
                    <input type="date" class="form-control" required>

                @elseif($dir_field->ftype == 'number')
                    <input type="number" class="form-control" required>
                @elseif($dir_field->ftype == 'dropdown')
                    <input type="text" placeholder="Enter value to add in the dropdown" id="dropval" class="form-control">
<br>
                    <input type="button" class=" btn btn-info" value="Add in dropdown" onclick="fun()">
                    <p id="fun"></p>
                    <select class="form-control" name="sel[]" id="sel" style="text-align-last: center" multiple>
                        {{--<option disabled selected>Please Fill the above field</option>--}}

                    </select>




                @endif

            </div>

        @endforeach


        <input type="submit" class="btn btn-danger form-control" value="Submit" name="submit" onclick="fun1()">
    </form>
</div>

