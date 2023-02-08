@extends('app')

@section('title')
   Privacy
@endsection

@section('content')
    <style>
        h1 {
            font-size: 34px;
        }
        h2 {
            font-size: 28px;
        }
    </style>

    <div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Privacy Policy</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Privacy</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<div class="section">
		<div class="content-wrap">
			<div class="container">
                @include('privacywriteup')
			</div>
		</div>
	</div>

@endsection