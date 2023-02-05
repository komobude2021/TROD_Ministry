@extends('app')

@section('title')
   Events
@endsection

@section('content')

    <div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">

		<div class="content-wrap pos-relative">

			<div class="d-flex justify-content-center bd-highlight mb-3">

				<div class="title-page">Events</div>

			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">

			    <nav aria-label="breadcrumb">

				  <ol class="breadcrumb ">

				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>

				    <li class="breadcrumb-item active" aria-current="page">Events</li>

				  </ol>

				</nav>

		  	</div>

		</div>

	</div>



    

	<div class="section">

		<div class="content-wrap" style="background-image: url('{{ asset('images/worship_4.jpg') }}'); background-size: cover;">

			<div class="container">
			    
			    <div class="row">
			        <div class="col-md-12">
			            <h2 class="section-heading light" style="margin-bottom: 10px">
                            News & <span style="color:#000">Events</span>
                        </h2>
                        <hr style="border-top:#000 solid 1px; margin-bottom: 0px" />
			        </div>
			    </div>

                @if(count($events) <= 0)
                
                @else
                    
                    @foreach($events as $event)
                    
        				<div class="row">
        
                            <div class="col-sm-6 col-md-9">
                                <div style="padding-top:20px">
                                    
                                    <div>
                                        <h2 style="color: #000">{!! $event->title !!}</h2>
                                    </div>
                                    
                                    <div>
                                        {!! $event->description !!}
                                    </div>
            
                                    <div class="progress-fundraising progress-lg">
                                        <div>
                                            <div class="total">Time: 
                                                <span style="font-size: 22px;"><b>{{ $event->time }}</b></span>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <div class="total">Date: 
                                                <span style="font-size: 22px;">
                                                    <b>
                                                        @if($event->date == null)
                                                            Every Friday
                                                        @else
                                                            {{ date('jS F, Y', strtotime($event->date)); }}
                                                        @endif
                                                    </b>
                                                </span>
                                            </div>
                                        </div>
            
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
            
                                        <div class="detail" style="margin-top: 0px; font-weight:bold;">
                                            <h3><small style="font-weight: bold"><i class="fa fa-map-marker"></i> {{ $event->address }}</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-sm-6 col-md-3">
                                <div class="img-button" style="padding-top:35px">
                                    <img src="{{ asset('images/flyer/' . $event->flyer) }}" alt="" class="img-thumbnail">
                                    <div class="btn-overlay">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12" style="padding-top:20px">
                                <hr/>
                            </div>
        
                        </div>
                        
                    @endforeach
				@endif

			</div>

		</div>

	</div>



@endsection