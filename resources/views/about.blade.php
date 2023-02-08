@extends('app')

@section('title')
   About Us
@endsection

@section('content')

<div class="section banner-page" data-background="{{ asset('images/worship_5.jpg') }}">

		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">About Us</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">About Us</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <div class="clearfix"></div>

    <!-- WE NEED YOUR HELP -->
    <div class="section services">
        <div class="content-wrap" style="padding-top: 20px; padding-bottom: 0px">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12" style="text-align:justify">
                        <h2 class="section-heading">
                            The <span>Root Of David </span> (TROD)
                        </h2>

                        <p class="subheading" style="margin-bottom: 0px; width:100%">A non-denominational Christian ministry Based in Bradford - England. Our mandate is to 
                            restore the command of Jesus to the church that ‘Men must watch and pray always’. We are commissioned to pray without ceasing for the souls of 
                            men and for the coming revival. England being strategic in the calendar of God for the mission. The Root of David is a convergence of God’s end 
                            time army, an atmosphere of genuine Christian worship.</p> 
                            <p> We strive to lift up Jesus that He may draw men to Himself. Our ultimate goal is to see believers in whose life the will of God is done on 
                                earth as it is in heaven. Do you desire to find God or revive your relationship with Jesus? Are you currently struggling with your prayer 
                                life as a Christian? Join us for an outpouring of God’s word and the manifestation of His matchless power every Friday evening. Come and be 
                                the light in a dark world.  </p>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- HOW TO HELP US -->
    <div class="section">
        <div class="content-wrap-top" style="padding-top:0px">

            <div class="container">
                <div class="row align-items-end" style="padding-bottom:40px">


                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading">
                            Our <span>Team</span>
                        </h2>

                        <div class="section-subheading">
                            <p style="text-align:justify">TROD was birthed in Bradford, United Kingdom where the leaders got a direction from the LORD to raise an altar 
                                of prayer and worship for Him. Before then, Tim and Faith Obeta have spent over 2 decades in church ministry serving in various leadership 
                                capacity. Both are lovers of Jesus Christ and committed to Spreading the saving message of Christ and his Kingdom. We want to see God’s will 
                                done on earth as it’s done in heaven. Our call to service is that Christians must build a lifestyle of continuous prayer to survive the evil 
                                days of our time and serve the Lord faithfully.</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12"></div>
                    <div class="margin-bottom-50" style="margin-bottom: 25px;"></div>

                    <div class="col-sm-12 col-md-4">
                        <dl class="hiw">
                            <dt><span class="fa fa-check-circle"></span></dt>
                            <dd>
                                <div class="no">01</div>
                                <h3>Vision</h3>
                                That The will of God be done on earth as it is in heaven
                            </dd>
                        </dl>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <dl class="hiw">
                            <dt><span class="fa fa-check-circle"></span></dt>
                            <dd>
                                <div class="no">02</div>
                                <h3>Mission</h3>
                                Preach the gospel of Jesus Christ to our community
                            </dd>
                        </dl>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <dl class="hiw">
                            <dt><span class="fa fa-clock-o"></span></dt>
                            <dd>
                                <div class="no">03</div>
                                <h3>Our Worship Time</h3>
                                Friday Night with Jesus <br/>Time: 6:30pm
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


    <!-- WE HELP MANY PEOPLE -->
    <div class="section" data-background="{{ asset('images/bg-map-dot.jpg') }}">

        <div class="content-wrap">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="cta-info color-white" style="width: 80%; padding-bottom: 30px">
                            <h1 class="section-heading light no-after">
                                <span>We Spread The </span> Love of God
                            </h1>

                            <h3 class="color-primary">Want to Become a Volunteer</h3>
                            <div class="spacer-10"></div>

                            <p>Worship times, Community outreach and events are simply impossible without you. Volunteering to serve will be a great way of meeting new people, 
                                learning new skills, and contributing to the ministry. </p>
                            <p>However you found us and wherever you’re from we’d love to help you get connected and involved. We have a great team ready to hear from you and to 
                                help you find a home in our fellowship of believers.</p>

                            <a href="{{ route('volunteer') }}" class="btn btn-light margin-btn" style="margin-top:15px">VOLUNTEER HERE!</a> 
                            <a href="#" class="btn btn-primary margin-btn" style="margin-top:15px">BECOME A MEMBER!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection