@extends('fronted.master')

@section('title',"Dashboard")

@section('content')









	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-6">

				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Edit Password</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="POST" action="{{ route('updatePassword') }}">
						@csrf
						<div class="box-body">
							<div class="form-group">
								<label for="oldp" class="col-sm-2 control-label">Old Password</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="oldp" placeholder="Old Password"  name="oldpass">
								</div>
							</div>

							<div class="form-group">
								<label for="newp" class="col-sm-2 control-label">New Password</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="newp" placeholder="New Password" name="password">
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="col-sm-2 control-label">Confirm Password</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="confirm" placeholder="confirm Password" name="confirm">
								</div>
							</div>


						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-info pull-right" id="register">Update Password</button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>














	<script>

		$('#profile').addClass('active');
		$('#editpass').addClass('active');
	</script>

@endsection