@extends('app')

@section('title')
   Home
@endsection

@section('additional_script')
    <style>
        @media (max-width: 600px) {
            .kelr {
            height: 350px;
            object-fit: cover;
            }
            .kelr2 {
            height: 350px;
            }
            .navbar-mainj{
                display: none;
            }
        }
        .carousel-control-next-icon {
            background-color: black;
            padding: 20px;
            border-radius: 20px;
            font-weight: bold;
        }
        .carousel-control-prev-icon {
            background-color: black;
            padding: 20px;
            border-radius: 20px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>

    <div class="carousel-inner">

      <div class="carousel-item active">

        <img src="{{ asset('images/slider/LifeInUKSum.webp') }}" class="d-block w-100 kelr" alt="The Root of David Ministry">

        <div class="carousel-caption d-none d-md-block">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg">
                        Life In U.K <span class="div-slider-text">Summit 2023</span>
                        <hr style="padding: 0px; margin:0px"/>
                    </h1>
                </div>

                <div class="row">
                    <div class="col-md-12" style="font-size:18px; text-align:left; text-shadow: 2px 2px #000;">
                        - How to get Post study Sponsorship Jobs <br/>
                        - Visa Routes and Application process <br/>
                        - Plagiarism, Referencing and Proof reading <br/>
                        - Dissertation and preparing for your research <br/>
                        - How to get second income, saving, preparing for interviews. CV support, etc. 
                    </div>

                    <div class="col-md-12" style="text-align:left;">
                        <a href="#summit" class="btn btn-primary margin-btn" style="margin-top:15px">READ MORE!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-caption d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg" style="font-size: 35px; padding-bottom: 0px; margin-bottom: 0px">
                        Life In U.K <span class="div-slider-text">Summit 2023</span>
                        <hr style="padding: 0px; margin:0px"/>
                    </h1>
                    <a href="#summit" class="btn btn-primary margin-btn" style="margin-top:15px"><i class="fa fa-hand-pointer-o"></i>READ MORE!</a>
                </div>
            </div>
        </div>

      </div>

      <div class="carousel-item">
        <img src="{{ asset('images/slider/FridayEveningWithJesusChrist.webp') }}" class="d-block w-100 kelr2" alt="The Root of David Ministry">
      </div>


      <div class="carousel-item">
        <img src="{{ asset('images/slider/BibleStudy.webp') }}" class="d-block w-100 kelr" alt="The Root of David Ministry">

        <div class="carousel-caption d-none d-md-block">
            <div class="wrap-caption div-slider">
                <h1 class="caption-heading bg">
                    Committed To <span class="div-slider-text">Preaching The Message Of Jesus Christ.</span> 
                </h1>
            </div>
        </div>

        <div class="carousel-caption d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg" style="font-size: 30px; padding-bottom: 0px; margin-bottom: 0px">
                        Committed To <span class="div-slider-text">Preaching The Message Of Jesus Christ.</span> 
                    </h1>
                </div>
            </div>
        </div>
      </div>


      <div class="carousel-item">
        <img src="{{ asset('images/slider/spreadingLove.webp') }}" class="d-block w-100 kelr" alt="The Root of David Ministry">

        <div class="carousel-caption d-none d-md-block">
            <div class="wrap-caption center div-slider">
                <h1 class="caption-heading bg">
                    Committed To <span class="div-slider-text">Sharing Love With Our Community.</span> 
                </h1>
            </div>
        </div>

        <div class="carousel-caption d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg" style="font-size: 30px; padding-bottom: 0px; margin-bottom: 0px">
                        Committed To <span class="div-slider-text">Sharing Love With Our Community.</span> 
                    </h1>
                </div>
            </div>
        </div>

      </div>

      <div class="carousel-item">
        <img src="{{ asset('images/slider/prayers.webp') }}" class="d-block w-100 kelr" alt="The Root of David Ministry">

        <div class="carousel-caption d-none d-md-block">
            <div class="wrap-caption right div-slider">
                <h1 class="caption-heading bg">
                    Committed To <span class="div-slider-text">Re-awakening the Prayer Altar Of Christians.</span> 
                </h1>
            </div>
        </div>

        <div class="carousel-caption d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg" style="font-size: 30px; padding-bottom: 0px; margin-bottom: 0px">
                        Committed To <span class="div-slider-text">Re-awakening the Prayer Altar Of Christians.</span> 
                    </h1>
                </div>
            </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('images/slider/discliples.webp') }}" class="d-block w-100 kelr" alt="The Root of David Ministry">

        <div class="carousel-caption d-none d-md-block">
            <div class="wrap-caption div-slider">
                <h1 class="caption-heading bg">
                    Committed To <span class="div-slider-text">Raising EndTime Disciples of Jesus Christ.</span> 
                </h1>
            </div>
        </div>

        <div class="carousel-caption d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="wrap-caption div-slider">
                <div>
                    <h1 class="caption-heading bg" style="font-size: 30px; padding-bottom: 0px; margin-bottom: 0px">
                        Committed To <span class="div-slider-text">Raising EndTime Disciples of Jesus Christ.</span> 
                    </h1>
                </div>
            </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class="clearfix"></div>

    <!-- WE NEED YOUR HELP -->
    <div class="section services">
        <div class="content-wrap" style="padding:40px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            The <span>Root Of David </span> (TROD)
                        </h2>

                        <p class="subheading text-center" style="margin-bottom: 0px">The Root of David also known as TROD is committed to reawaking the prayer altar of believer, sharing love with our community, preaching the message of Jesus Christ and His kingdom. 
                            <a name="summit"></a>
                        </p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- URGENT CAUSE -->
    <div class="section" data-background="{{ asset('images/worship.jpg') }}">

        <div class="content-wrap">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-8">
                        <h2 class="section-heading light">
                            News & <span>Events</span>
                        </h2>

                        <h2 class="color-white">{!! $lastestEvent[0]->title  !!}</h2>

                        <div style="color: #fff; text-shadow: 2px 2px #000; padding-bottom: 10px">
                            {!! $lastestEvent[0]->description !!}
                        </div>

                        <div class="progress-fundraising progress-lg">
                            <div>
                                <div class="total">Time: <span style="color:#fff; font-size: 22px;">{{ $lastestEvent[0]->time }}</span></div>
                            </div>

                            <div>
                                <div class="total">Date: 
                                    <span style="color:#fff; font-size: 22px;">
                                        @if($lastestEvent[0]->date == NULL)
                                            Every Friday
                                        @else
                                            {{ date('jS F, Y', strtotime($lastestEvent[0]->date)); }}
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="detail" style="margin-top: 0px; font-weight:bold; text-shadow: 2px 2px #000;">
                                <h3><small class="color-white"><i class="fa fa-map-marker"></i> {{ $lastestEvent[0]->address }}</small></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="img-button" style="padding-top:35px">
                            <img src="{{ asset('images/flyer/' . $lastestEvent[0]->flyer) }}" alt="" class="img-thumbnail">
                            <div class="btn-overlay">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- HOW TO HELP US -->
    <div class="section">

        <div class="content-wrap-top" style="padding-top:40px">
            <div class="container">
                <div class="row align-items-end" style="padding-bottom:40px">

                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading">
                            Our <span>Team</span>
                        </h2>

                        <div class="section-subheading">
                            <p style="text-align:justify">TROD was birthed in Bradford, United Kingdom where the leaders got a direction from the LORD to raise an altar of 
                                prayer and worship for Him. Before then, Tim and Faith Obeta have spent over 2 decades in church ministry serving in various leadership 
                                capacity. Both are lovers of Jesus Christ and committed to Spreading the saving message of Christ and his Kingdom. We want to see God's 
                                will done on earth as it’s done in heaven. Our call to service is that Christians must build a lifestyle of continuous prayer to survive
                                the evil days of our time and serve the Lord faithfully.</p>
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
                        <div class="cta-info color-white" style="width: 80%; padding-bottom:20px">
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

    <div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            Our <span>Gallery</span>
                        </h2>
                    </div>

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
                    </div>

                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 10000,
            pause: true
        });
    });
</script>

@endsection