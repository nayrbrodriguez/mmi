<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

  
</head>
<body>
	<div class= "container"	>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>View Summernote</h4>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $key => $gen)
						<tr>
							<td>{!!$gen->title!!}</td>
							<td>{!!$gen->description!!}</td>
							<td>
								<a href="{{url('view_gen_info', array($gen->id))}}">View</a>
								<a href="{{url('edit_gen_info',array($gen->id))}}">Edit</a>
								<a href="{{url('delete_gen_info',array($gen->id))}}">Delete</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>