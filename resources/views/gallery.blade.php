@extends('app')

@section('title')
   Livestream
@endsection

@section('content')

    <div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Gallery</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
							<i class="fa fa-picture-o"></i>
							<h2 style="font-size:28px"><i class="fa fa-picture-o"></i> TROD  <span>Gallery</span></h2>
							<hr/>
						</div>
					</div>
                </div>

                <div class="row">
                    <div class="row popup-gallery gutter-5">

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery01.jpg" title="Gallery #1">
                                    <img src="{{ asset('images/gallery/gallery01.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery02.jpg" title="Gallery #2">
                                    <img src="{{ asset('images/gallery/gallery02.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery03.jpg" title="Gallery #3">
                                    <img src="{{ asset('images/gallery/gallery03.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery04.jpg" title="Gallery #4">
                                    <img src="{{ asset('images/gallery/gallery04.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery05.jpg" title="Gallery #5">
                                    <img src="{{ asset('images/gallery/gallery05.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery06.jpg" title="Gallery #6">
                                    <img src="{{ asset('images/gallery/gallery06.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery07.jpg" title="Gallery #7">
                                    <img src="{{ asset('images/gallery/gallery07.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery08.jpg" title="Gallery #8">
                                    <img src="{{ asset('images/gallery/gallery08.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery09.jpg" title="Gallery #9">
                                    <img src="{{ asset('images/gallery/gallery09.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery10.jpg" title="Gallery #10">
                                    <img src="{{ asset('images/gallery/gallery10.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery11.jpg" title="Gallery #11">
                                    <img src="{{ asset('images/gallery/gallery11.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery12.jpg" title="Gallery #12">
                                    <img src="{{ asset('images/gallery/gallery12.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery13.jpg" title="Gallery #13">
                                    <img src="{{ asset('images/gallery/gallery13.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery14.jpg" title="Gallery #14">
                                    <img src="{{ asset('images/gallery/gallery14.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="box-gallery">
                                <a href="images/gallery/gallery15.jpg" title="Gallery #15">
                                    <img src="{{ asset('images/gallery/gallery15.jpg') }}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

			</div>
		</div>
	</div>

@endsection