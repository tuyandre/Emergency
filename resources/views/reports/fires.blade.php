@extends('fronted.master')

@section('title',"Dashboard")

@section('content')

	<!-- Main content -->
	<section class="content">
		<div class="row">


			<div class="col-md-12">
				<div class="box box-info flat box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">FIRES EXTINGUISHER REPORTS</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
									class="fa fa-minus"></i>
							</button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body" style="">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<form action="{{ route('fires.pdf') }}" target="_blank" class="form-horizontal" method="post">
									@csrf
									<div class="form-group">
										<label for="category" class="control-label col-sm-3">Starting Date</label>
										<div class="col-sm-9">
											<input type="date" name="date1" id="add-date" placeholder="Saving date" required class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="category" class="control-label col-sm-3">End Date</label>
										<div class="col-sm-9">
											<input type="date" name="date2" id="add-date" placeholder="Saving date" required class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button class="btn btn-default"><i class="fa fa-print"></i> Generate report</button>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->






	<script>

		$('#reports').addClass('active');
		$('#reportFires').addClass('active');
	</script>

@endsection