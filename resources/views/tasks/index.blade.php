@extends('layout')

@section('content')

<div class="container">
	<h3>My task</h3>
	<a href="{{route('create')}}" class="btn btn-success">Create</a>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<table class="table">
				<thead class="table">
					<thead>
						<tr>
							<td>id</td>
							<td>task</td>
							<td>action</td>
						</tr>
					</thead>
				</thead>
			</table>
		</div>
	</div>
	<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                
              </tbody>
            </table>
          </div>
</div>

@endsection