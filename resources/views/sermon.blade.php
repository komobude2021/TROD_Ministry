@extends('app')

@section('title')
   Sermon
@endsection

@section('content')

    <div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Sermons</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Sermons</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="title">
							<span>THE ROOT OF DAVID - TROD</span>
							<i class="fa fa-headphones"></i>
							<h2 style="font-size:28px"><i class="fa fa-headphones"></i> Sermons and <span>Messages</span></h2>
							<hr/>
						</div>
					</div>

                    <div class="col-md-12">
    					<div class="row p40">

							@foreach ($sermons as $sermon)
								<div class="col-md-3" style="padding-bottom: 20px">
									<div style="padding-top: 6px; padding-bottom: 6px; border-radius: 12px">
										<a href="{{ route('sermonview', [$sermon->slug, $sermon->id]) }}" title="{{ $sermon->title }}">
											<img style="border-radius: 12px" src="{{ asset('images/service-thumbnail/' . $sermon->thumbnail_url) }}" alt="">
										</a>
									</div>

									<div style="margin-top: -30px; text-align:right">
										<span class="sermon-timer">{{ $sermon->timer }}</span>
									</div>

									<div class="sermon-tile">
										<a href="{{ route('sermonview', [$sermon->slug, $sermon->id]) }}" style="color: #2e383f !important;" title="{{ $sermon->title }}">
											{{ $sermon->title }}
										</a>
									</div>

									<div style="padding-top:3px;">
										<p class="card-text" style="font-size:13px; color:#B27522">
											<i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($sermon->created_at)->diffForHumans() }}
										</p>
									</div>
								</div>
							@endforeach

							<div style="padding-top: 10px">
								{{ $sermons->links() }}
							</div>

    					</div>
					</div>

                </div>
			</div>
		</div>
	</div>

@endsection