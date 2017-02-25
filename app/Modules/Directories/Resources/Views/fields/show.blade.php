@extends('layouts.admin')

@section('content')

<div class="box box-primary">

	<div class="box-body">
		<div class="box-header">
			<div class="box-tools">
				<div class="input-group input-group-sm">
					<a href="{{route('fields.add',$directory->id)}}" class="btn btn-info">
						<i class="fa fa-plus"></i> Create New Field
					</a>
				</div>
			</div>
		</div>

		<table class="table table-hover table-striped">
			<thead>
				<tr>

					<th><h2><b>Directory Title</b></h2></th>

					<th class="action-td"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($directories as $directori)
				<tr>
					<td>{{$directori->title}}</td>
					<td class="text-right"><div class="btn-btn-flat">
						<a href="{{route('fields.show',$directori->id)}}" class="btn btn-info btn-flat"><i class="fa fa-angle-double-right"></i>View Fields</a>


					</div></td>
				</tr>
				@endforeach
			</tbody>

		</table>




		<table class="table table-hover table-striped">
			<thead>
				<tr>
					
					<th><h2><b>{{$directory->title}} Fields</b></h2></th>

					<th class="action-td"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($directory->fields as $field)
				<tr>
					<td>{{$field->title}}</td>
					<td class="text-right"><div class="btn btn-flat">
						<a href="{{route('fields.edit',$field->id)}}" class="btn btn-info btn-flat"><i class="fa fa-edit"></i>Edit</a>
						<form action="{{route('fields.destroy',$field->id)}}" method="delete" style="display: inline;">

							<button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-"></i>Delete</button>
						</form>

					</div></td>
				</tr>

				@endforeach

			</tbody>

		</table>

	</div>

</div>
@endsection