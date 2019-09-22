@extends('layout')

@section('content')

<div class="container">
	<h3>Create task</h3>
	
	
	
	<div class="row">
		<div class="col-md-12">
			{!! Form::open([ 'route'=>['store']]) !!}
			<table class="form-group">
				<input type="text" class="form-control" name="number">
				<br>
				<textarea name="sends" id="" cols="30" rows="10" class="form-control"></textarea>

				 	 		
			</table>
			<button class="btn btn-success">Send</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection