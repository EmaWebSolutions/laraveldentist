<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <meta name="site-url" content="{{ url('/') }}">
    <meta name="locale" content="{{ session('locale') }}">
	<title>dentistcare | @lang('Home') :: ambitiousit.net</title>
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/frontend-index.css') }}">
    @if(session('locale') == 'ar')
        <link href="{{ asset('assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/plugins/alertifyjs/css/themes/bootstrap.min.css') }}" rel="stylesheet">
    @endif
	<!-- Template CSS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- sweetalert2 CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
	<!-- flatpickr CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}">
    <!-- flag -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/flag-icons-3.1.0/css/flag-icon.css') }}">
</head>

<body>
	@include('frontend.common.header')

	<section class="w3l-about5">
		<div class="container-fluid px-0">
			<div class="history-info position-relative">
				<div class="heading text-center mx-auto">
					<h3 class="hny-title two">{{ $contents->headline ?? '' }}</h3>
					<p class="mt-3">{{ $contents->tagline ?? '' }}</p>
					
				</div>
		
			</div>
		</div>
	</section>
    

    <section>
    	                <div class="row">
						<div class="col-lg-4">
							<div class="content4-right-icon">
								<div class="content4-icon">
									<span class="fab fa-linode" style="font-size:50px"></span>
								</div>
							</div>
							<div class="content4-right-info">
								<h6><a href="#">@lang('Annual Check-ups')</a></h6>
								<p>{{ $contents->aboutAnnualCheck ?? '' }}</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="content4-right-icon">
								<div class="content4-icon">
									<span class="fas fa-heartbeat" style="font-size:50px"></span>
								</div>
							</div>
							<div class="content4-right-info">
								<h6><a href="#">
                                    @lang('Work with Hearts')</a></h6>
								<p>{{ $contents->aboutWorkHeart ?? '' }}</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="content4-right-icon">
								<div class="content4-icon">
									<span class="fas fa-handshake-o" style="font-size:50px"></span>
								</div>
							</div>
							<div class="content4-right-info">
								<h6><a href="#">
                                    @lang('Help at Hand')</a></h6>
								<p>{{ $contents->aboutHelpHand ?? '' }}</p>
							</div>
						</div>
					</div>
					
    </section>

	<!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="title-content text-center mb-4">
					<h3 class="hny-title">{{ $contents->welcome ?? '' }}</h3>
				<p>{{ $contents->welCol1 ?? '' }}</p>
				</div>
		<div class="w3l-free-consultion">
		<div class="container">
			<div class="consultation-grids">
				<div class="apply-form">
					<form id="appointmentForm" action="" method="get">
						<input type="hidden" name="company_id" value="1">
						<div class="admission-form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="@lang('Full Name')*" required>
							</div>
							<div class="form-group">
								<input type="text" name="phone" class="form-control" placeholder="@lang('Phone Number')*" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="@lang('Email')*" required>
							</div>
							<select name="doctor_id" id="doctor_id" class="form-control" required>
							</select>
							<div class="form-group">
								<input type="text" name="appointment_date" id="appointment_date" class="form-control flatpickr" placeholder="@lang('Appointment Date')*" required>
							</div>
							<div class="form-group">
								<select id="appointment_slot" name="appointment_slot" class="form-control" required>
									<option value="">@lang('Select Appointment Slot')*</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<textarea name="problem" class="form-control" placeholder="@lang('Problem')"></textarea>
						</div>
						<button type="submit" class="btn btn-primary submit">@lang('Book Now')</button>
					</form>
				</div>
				<div class="consultation-img">
					<img src="{{ asset('assets/images/booking.jpg') }}" class="img-fluid" alt="/">
				</div>
			</div>
		</div>
	</div>



				</div>
		    </div>
	</section>
	<!-- //content-6-->

	<section class="w3l-content-with-photo-4">
	<!-- /w3l-content-with-photo-4-->
		<div class="w3l-services-block" id="classes custom-services-background">
		<div class="container py-lg-3 py-md-3">
			<div class="title-content">
				<h3 class="hny-title">@lang('Our Services')</h3>
				<p>{{ $contents->serviceText ?? '' }}</p>
			</div>
			<div class="services-block_grids_bottom">
				<div class="row">
           @php
    $images = [
        'assets/images/service/ab0.jpg',
        'assets/images/service/ab1.jpg',
        'assets/images/service/ab2.jpg',
    ];
@endphp

@for ($i = 0; $i < 3; $i++)
    @php
        $service = $contents->services[$i] ?? null;
    @endphp

    @if (!empty($service))
        <div class="col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
            <div class="service_grid_btm_left1">
                <a href="#"><img src="{{ asset($images[$i]) }}" alt=" " class="img-fluid"  loading="lazy" /></a>
                <div class="service_grid_btm_left2">
                    <h5>{{ $service }}</h5>
                </div>
            </div>
        </div>
    @endif
@endfor



				</div>
				 <div class="read">
							<a class="btn mt-4" href="{{ url('/services') }}">@lang('Read More')</a>
						</div>
			</div>
		</div>
	</div>
</section>


	<!-- /specification-6-->
	<section class="w3l-specification-6">
		<div class="specification-6-mian">
			<div class="container">
				<div class="row story-6-grids text-center">
					<div class="col-lg-12 story-gd pl-lg-4">
						<div class="title-content text-center mb-lg-5 mt-4">
							<h3 class="hny-title">{{ $contents->caring ?? '' }}</h3>
							<p>{{ $contents->caringText ?? '' }}</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{ $contents->appointmentCount ?? '' }}</p>
										<h4>@lang('Daily appointments')</h4>
										<p class="counter-para">{{ $contents->appointmentText ?? '' }}</p>
									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{ $contents->clientCount ?? '' }}</p>
										<h4>@lang('Happy Clients')</h4>
										<p class="counter-para">{{ $contents->clientText ?? '' }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //specification-6-->

	<!--/testimonials-->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-lg-5 py-4">
			<div class="container py-lg-5">
				<div class="row pb-lg-4 pb-5">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">

                            @php
								$i = -1;
							@endphp
                            @foreach ($contents->review ?? [] as $review)
                                @php
                                    $i++;
                                    if (empty($contents->review[$i]) || empty($contents->reviewText[$i]))
                                        continue;
                                @endphp
                                <div class="item">
                                    <div class="slider-info mt-lg-4 mt-3">
                                        <div class="text-content">
                                            <div class="message">
                                              
                                                <p>{{ $contents->reviewText[$i] ?? '' }}</p>
                                            </div>
                                                  <div class="">
                                                <div class="img-circle">
                                                    <img src="{{ asset('assets/images/client.jpg') }}" class="img-fluid testimonial-img"
													alt="client">
                                                </div>
                                                <div class="name">
                                                    <h4>{{ $contents->review[$i] ?? '' }}</h4>
                                                    <p class="description">{{ $contents->company[$i] ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
	@include('frontend.common.footer')
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    @if(session('locale') == 'ar')
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @endif
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/custom/frontend/index.js') }}"></script>
</body>

</html>
