@extends('app')

@section('title')
{{ ucwords($sermon[0]->title) }}
@endsection

@section('content')

    <div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">

		<div class="container">
			<div class="col-md-12">
				<div class="content-wrap pos-relative">
					<div class="d-flex justify-content-center bd-highlight mb-3">
						<div class="title-page" style="font-size: 2.3em !important">{{ ucwords($sermon[0]->title) }}</div>
					</div>

					<div class="d-flex justify-content-center bd-highlight mb-3">
						<nav aria-label="breadcrumb">
						<ol class="breadcrumb ">
							<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sermon</li>
						</ol>
						</nav>

					</div>
				</div>
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
							<h2 style="font-size:28px"><i class="fa fa-headphones"></i> Click To <span>Start Sermon/Message</span></h2>
							<hr/>
						</div>
					</div>

					<div class="col-md-12 p40">
						<div class="video-container">
							<iframe src="{{ $sermon[0]->video_url }}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
								allowfullscreen="" width="100%" height="615"  frameborder="0"></iframe>
						</div>
						
						<div style="background: rgb(242, 242, 242); border-radius: 12px; padding-left: 15px; padding-right: 15px; margin-top: 12px">
							<div style="word-break: break-word; font-size: 18px; color: #2e383f; font-weight: bold; white-space: normal; padding-top:20px">
								{{ strtoupper($sermon[0]->title) }}
							</div> 

							<div style="padding-top:3px; padding-bottom:25px">
								<p class="card-text" style="font-size:14px; color:#B27522">
									<i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($sermon[0]->created_at)->diffForHumans() }}
								</p>
							</div>
						</div>
					</div>

                </div>
			</div>
		</div>
	</div>

@endsection