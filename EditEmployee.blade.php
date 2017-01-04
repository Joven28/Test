@extends('layouts')

@section('title', 'Crud project')


@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title">
						Edit Employee
					</div>
				</div>
				<div class="panel-body">
					@if($errors->any())
						<div class="alert alert-danger">There are errors during form submission:
							@foreach($errors->all() as $error)
								<li> {{ $error }} </li>
							@endforeach
						</div>
					@else
						
						@if(Session::has("Message"))
							<div class="alert alert-success">
								{{ Session::get("Message") }}
							</div>
						@endif					
					@endif
					{{ Form::model($employee, array('route' => 
					array('employees.update', $employee->id))) }}
						{{ method_field('PUT') }}
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									{{ Form::label('firstname', 'Firstname') }}
								</div>
								<div class="col-md-10">
									{{ Form::text('firstname', null, ['class' => 'form-control']) }}
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									{{ Form::label('lastname', 'Lastname') }}
								</div>
								<div class="col-md-10">
									{{ Form::text('lastname', null, ['class' => 'form-control']) }}
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									{{ Form::label('age', 'Age') }}
								</div>
								<div class="col-md-10">
									{{ Form::text('age', null, ['class' => 'form-control']) }}
								</div>
							</div>
						</div>
						
						{{ Form::submit('Save', array('class' => 'btn btn-primary btn-block')) }}
						
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>

@endsection