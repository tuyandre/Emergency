@extends('fronted.master')

@section('title',"Road")

@section('content')



	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Criminal Record Detail</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>

							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">


							<div class="col-md-8" >
								<div class="row">
									<h4 style="color: green;text-align: center">THE EXACTLY LOCATION OF SENDER</h4>
								</div>
								<div class="row" id="map" style="height: 550px;">

								</div>
							</div>
							<!-- /.col -->

							<div class="col-md-4">
								<div class="row">
									<h4 style="color: green">THE INFORMATION OF SENDER</h4>
								</div>
								<div class="row">
									<div class="col-md-4"><strong style="color:dodgerblue">Names:</strong></div>
									<div class="col-md-8"><span class="progress-text">{{$roads[0]->populations['name']}}</span></div>
								</div>
								<br><br><br>
								<div class="row">
									<div class="col-md-4"><strong style="color: dodgerblue">Message</strong></div>
									<div class="col-md-8"><span class="progress-text">{{$roads[0]->Message}}</span></div>
								</div>
							</div>

							<!-- /.progress-group -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- ./box-body -->
				<div class="box-footer">

				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
		</div>
		<!-- /.row -->

		</div>

	</section>



	<script>
		function initMap() {
			var uluru = {lat: -1.964046, lng: 30.071552};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
	</script>
	<script async defer
			  src=
			  "https://maps.googleapis.com/maps/api/js?key=
AIzaSyB2bXKNDezDf6YNVc-SauobynNHPo4RJb8&callback=initMap">
	</script>









@endsection