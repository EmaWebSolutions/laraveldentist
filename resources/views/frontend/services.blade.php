<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <meta name="site-url" content="{{ url('/') }}">
	<title>dentistcare | @lang('Services') :: ambitiousit.net</title>
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    @if(session('locale') == 'ar')
        <link href="{{ asset('assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/plugins/alertifyjs/css/themes/bootstrap.min.css') }}" rel="stylesheet">
    @endif
	<!-- Template CSS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- flag -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/flag-icons-3.1.0/css/flag-icon.css') }}">
</head>

<body>
	@include('frontend.common.header')
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="{{ url('/') }}">@lang('Home')</a> » <span class="breadcrumb_last" aria-current="page">@lang('Services')</span>
		</div>
	</nav>
	<!-- //breadcrumbs -->
	<!-- services block 2 -->
	<div class="w3l-services-block py-5" id="classes custom-services-background">
		<div class="container py-lg-5 py-md-5">
			<div class="title-content text-left mb-lg-5 mt-4">
				<h3 class="hny-title text-center">@lang('Our Services')</h3>
				<p class="text-center">{{ $contents->serviceText ?? '' }}</p>
			</div>
			<div class="services-block_grids_bottom">
				<div class="row">

					 @php
    $images = [
        'assets/images/services/bc0.jpg',
        'assets/images/services/bc1.jpg',
        'assets/images/services/bc2.jpg',
        'assets/images/services/bc3.jpg',
        'assets/images/services/bc4.jpg',
        'assets/images/services/bc5.jpg',
    ];
@endphp

@for ($i = 0; $i < 6; $i++)
    @php
        $service = $contents->serviceName[$i] ?? null;
    @endphp

    @if (!empty($service))
        <div class="col-lg-4 col-md-6 service_grid_btm_left mt-lg-5 mt-4">
            <div class="service_grid_btm_left1">
                <a href="#"><img src="{{ asset($images[$i]) }}" alt=" " class="img-fluid"  loading="lazy" /></a>
                <div class="service_grid_btm_left2">
                    <h5>{{ $contents->serviceName[$i] ?? '' }}</h5>
                    <p>{{ $contents->serviceDescription[$i] ?? '' }}
                </div>
            </div>
        </div>
    @endif
@endfor

                    
				</div>
			</div>
		</div>
	</div>
	<!-- // services block2 -->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-lg-5 mt-4">
					<h3 class="hny-title two text-center">@lang('We Are Here For You')</h3>
					<p class="fea-para text-center">{{ $contents->feature ?? '' }}</p>
				</div>
				<div class="row features4-grids text-center">
					<div class="col-lg-4 col-md-6 features4-grid">
						<div class="features4-grid-inn">
							<span class="fas fa-pencil-square-o icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">@lang('Free Check Up')</a></h5>
						

						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid">
						<div class="features4-grid-inn">
							<span class="fas fa-umbrella icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">@lang('Always Open')</a></h5>
						

						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid third">
						<div class="features4-grid-inn">
							<span class="fas fa-cogs icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">
								@lang('Serve with Smile')</a></h5>
						

						</div>
					</div>
				
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- features-4 -->

	@include('frontend.common.footer')
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
    @if(session('locale') == 'ar')
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @endif
    <script src="{{ asset('assets/js/custom/frontend/services.js') }}"></script>
</body>

</html>
