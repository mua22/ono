@extends('layouts.admin')

@section('content')

<div class="box box-primary">

	<div class="box-body">


		

		<table class="table table-hover table-striped">
			<thead>
				<tr>

					<th>Directory Title</th>

					<th class="action-td"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($directories as $directory)
				<tr>
					<td>{{$directory->title}}</td>
					<td class="text-right"><div class="btn-group-horizontal">
						<a href="{{route('fields.show',[$directory->id])}}" class="btn btn-info btn-xs"><i class="fa fa-angle-double-right"></i>View Fields</a>


					</div></td>
				</tr>
				@endforeach
			</tbody>

		</table>
	</div>

</div>





@endsection