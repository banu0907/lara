<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ url('/') }}/css/app.css">
	<script src="{{ url('/') }}/js/app.js"></script>
</head>
<body>
<div class="container">
	{{ url('/') }}
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	<button type="button" class="btn btn-default">button</button>
	<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
<div class="row">
	<span class="glyphicon glyphicon-print"></span>
	<div class="" contenteditable=""></div>
</div>
</div>
</body>
</html>