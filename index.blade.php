@extends('layouts')

@section('title', 'Crud project')


@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title">
						Employee Records
					</div>
				</div>
				<div class="panel-body">
					<a href="employees/create" class="pull-right btn btn-default">Add Employee
					</a>
					<br>
					<br>
					<br>
					@if(Session::has("Message"))
						<div class="alert alert-success">
							{{ Session::get("Message") }}
						</div>
					@endif
					@if(count($employees) == 0)
						<p class="text-center">There is no Employee Records</p>
					@else
						<table class="table table-bordered">
							<tr><th>Firstname</th><th>Lastname</th><th>Age</th><th>Action</th></tr>
							@foreach($employees as $employee)
								<tr>
									<td>{{$employee->firstname }}</td>
									<td>{{ $employee->lastname }}</td>
									<td>{{$employee->age}}</td>
									<td class="text-center"><a href="{{'employees/' . $employee->id . '/edit' }}" class="btn btn-danger">Edit</a>
									<a href="{{'employees/' .  $employee->id . '/delete' }}" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							@endforeach
						</table>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection