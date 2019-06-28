<!DOCTYPE html>
<html>
<head>
	<title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.box{
			width:600px;
			margin:0 auto;
		}
	</style>
</head>
<body>
<br />
<div class="container">
	<h3 align="center">REPORT</h3><br />

	<div class="row">
		<div class="col-md-7" align="right">
			<h4>POPULATIONS REPORT</h4>
		</div>
		<div class="col-md-5" align="right">
			<a href="{{ route('populationsPdf') }}" class="btn btn-danger" target="_blank">DOWNLOAD PDF FILE</a>
		</div>
	</div>
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>People Name</th>
				<th>People Username</th>
				<th>Location</th>
			</tr>
			</thead>
			<tbody>
			@foreach($populations_data as $population)
				<tr>
					<td>{{ $population->name }}</td>
					<td>{{ $population->username }}</td>
					<td>{{ $population->location }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
</body>
</html>