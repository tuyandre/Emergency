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
					<form class="form-horizontal" method="POST" action="{{ route('updateProfile') }}">
						@csrf
						<div class="box-body">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" placeholder="Name"  name="name"   value="{{ $user->name }}">
								</div>
							</div>
							<div class="form-group">
								<label for="username" class="col-sm-2 control-label">Username</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" id="username" placeholder="Username"  name="email" readonly  value="{{ $user->email }}">
								</div>
							</div>


						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-info pull-right" id="register">Update Profile</button>
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
		$('#updateprofile').addClass('active');
	</script>











@endsection
