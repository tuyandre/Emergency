@extends('fronted.master')

@section('title',"Dashboard")

@section('content')

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success flat">
					<div class="box-header with-border">
						<h1 class="box-title">Manage Fire Accidents</h1>
						<div class="box-tools pull-right">
							<button type="button"
									  data-toggle="modal" data-target="#addModal"
									  class="btn btn-success btn-flat btn-sm">
								<i class="fa fa-plus"></i> Add new
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
									class="fa fa-minus"></i>
							</button>

							<button type="button" class="btn btn-box-tool" data-widget="remove"><i
									class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-condensed table-striped" id="manageTable">
								<thead>
								<tr>
									<th >name</th>
									<th >Message</th>
									<th>Location</th>
									<th>Actions</th>
								</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->



	<input type="hidden" value="{{ Session::token() }}" id="token">

	<script>

		$('#fire').addClass('active');

		var defaultUrl = "{{ route('fires.all') }}";
		console.log(defaultUrl);
		var table;
		var manageTable = $("#manageTable");
		function myFunc() {
			table = manageTable.DataTable({
				ajax: {
					url: defaultUrl,
					dataSrc: 'fires'
				},
				columns: [

					{data: 'populations.name'},
					{data: 'Message'},
					{data: 'location'},
					{
						data: 'id',
						render: function (data, type, row) {
							return "<a class='btn btn-default btn-sm btn-flat js-view'  href='/admin/fires/show/ "+ row.id +"' data-id='" + row.id + "'> " +
								"<i class='glyphicon glyphicon-edit'></i></a>" +
								"<button class='btn btn-danger btn-sm btn-flat js-delete' data-id='" + data +
								"' data-url='/admin/fires/delete/" + row.id + "'> <i class='glyphicon glyphicon-trash'></i></button>";
						}
					}
				]
			});
		}


		$(document).ready(function () {
//initialize data table
			myFunc();



		//Delete
		manageTable.on('click', '.js-delete', function () {
			var button = $(this);
			bootbox.confirm("Are you sure you want to delete this Fire Accident record?", function (result) {
				if (result) {
					$.ajax({
						url: button.attr('data-url'),
						method: 'DELETE',
						data: {_token: $('#token').val()},
						success: function () {
							var tr = button.parents("tr");
							table.rows(tr).remove().draw(false);
						}, error: function () {
							bootbox.alert({
								title: "Error",
								message: "<i class='fa fa-warning'></i>" +
									" Record not deleted please try again"
							});
						}
					});

				}
			})
		});


		});
	</script>







@endsection