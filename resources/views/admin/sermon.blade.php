@extends('admin.app')

@section('additional_links')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		.fa-kel {
			font-size: 20px;
		}
		.topk {
			font-size: 14px;
			font-weight: bold
		}
		.video-links {
			color: #900 !important;
		}
	</style>
@endsection

@section('breadcrumb')
	<div class="mr-auto">
		<h1 class="separator">Sermons & Messages</h1>
		<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Sermons</li>
			</ol>
		</nav>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="card">
				<h5 class="card-header"></h5>

				<div class="card-body" style="padding-bottom: 50px">
					<div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
						<div class="row" style="padding-bottom: 40px">

							<div class="col-sm-12 col-md-12">
								@if (session('success'))
									<script>
										Swal.fire({
											icon: 'success',
											title: 'Great...',
											text: '{{ session('success') }}',
											footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Live Streaming!</span>',
											timer: 4500
										});
									</script>
								@endif

								@if (session('errors'))
									<script>
										Swal.fire({
											icon: 'error',
											title: 'Ooops...',
											text: '{{ session('errors') }}',
											footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Live Streaming!</span>',
											timer: 4500
										});
									</script>
								@endif
							</div>

							<div class="col-md-6 d-none d-md-block d-lg-block d-xl-block" style="text-align: left">
								<img src="{{ asset('images/logo.png') }}" alt="TROD Logo" />
							</div>

							<div class="col-md-6" style="text-align: right">
								<a class="btn btn-info btn-lg" href="{{ route('admin.sermonadd') }}" role="button" style="color:#fff"><b>ADD NEW SERMON</b></a>
							</div>

						</div>

						@if (count($sermons) <= 0)

							<div class="row">
								<div class="col-md-12">
									<b style="color: #900">&bull; No Sermon/Message Found!</b>
								</div>
							</div>

						@else

							<div class="row">
								<div class="col-md-7 topk d-none d-md-block d-lg-block d-xl-block">Video Details</div>
								<div class="col-md-3 topk d-none d-md-block d-lg-block d-xl-block">Date</div>
								<div class="col-md-2 topk d-none d-md-block d-lg-block d-xl-block"></div>
								<div class="col-md-12 d-none d-md-block d-lg-block d-xl-block"><hr style="border-top:1px solid #e5e5e5" /></div>
							</div>


							@php $k = 1; @endphp

							@foreach ($sermons as $sermon)

								<div class="row">

									<div class="col-md-1">
										<img src="{{ asset('images/service-thumbnail/' . $sermon->thumbnail_url) }}" alt="{{ strtolower($sermon->title) }}" />
									</div>

									<div class="col-md-6">
										<div>{{ $sermon->title }}</div>

										<div style="padding-top: 5px">

											<a href="{{ route('admin.sermonedit', [$sermon->id, $sermon->slug]) }}">
												<i class="fa fa-pencil fa-kel video-links"></i>
											</a> &nbsp; &nbsp;

											<a href="{{ $sermon->video_url }}" target="_new">
												<i class="fa fa-youtube-play fa-kel video-links"></i>
											</a> &nbsp; &nbsp;

											<form style="display: inline" method="POST" action="{{ route('admin.sermondelete', [$sermon->id, $sermon->slug]) }}">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger show_confirm">
													<i class="fa fa-trash-o fa-kel video-links" style="color:#fff !important"></i>
												</button>
											</form>

										</div>

									</div>

									<div class="col-md-3">{{ date("l, jS F, Y @ h:iA", strtotime($sermon->created_at)) }}</div>

									<div class="col-md-2">

										@if ($sermon->notification_sent == 1)
											<b style="color: #900">Notification Sent</b>
										@else
											<form id="form{{ $k }}" name="form{{ $k }}" action="{{ route('admin.sermonsendnotification') }}" method="POST">
												@csrf
												<input type="hidden" id="sermonId" name="sermonId" value="{{ $sermon->id }}" />
												<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" style="color: #fff"></i> Send Notification</button>
											</form>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="col-md-12"><hr style="border-top:1px solid #e5e5e5" /></div>
								</div>

								@php $k++; @endphp
							@endforeach

							<div class="row">
								<div class="col-md-12" style="text-align: right; padding-top:15px">
									{{ $sermons->links(); }}
								</div>
							</div>

						@endif

					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.show_confirm').click(function(event) {
			var form =  $(this).closest("form");
			event.preventDefault();
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit();
				}
			});
      	});
	}); 
</script>

@endsection