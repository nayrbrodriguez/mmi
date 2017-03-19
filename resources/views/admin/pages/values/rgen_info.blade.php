@extends('admin.admin_template')

@section('title')
	View Content
@endsection
@section('content')
<div style="padding-bottom: 10px;">
	<a href="{{url('core_values')}}" class="btn btn-danger">Back</a>
	</div>
		<div class="panel panel-default">

			<div class="panel-heading">
				<h3>View Content</h3>
			</div>
			<div class="panel-body">
				<h1>{!!$data->title!!}</h1>
				<hr>
				{!!$data->description!!}
			</div>

		</div>
	
@endsection