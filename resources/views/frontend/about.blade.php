<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <meta name="site-url" content="{{ url('/') }}">
	<title>dentistcare | @lang('About') :: ambitiousit.net</title>
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
			<a href="{{ url('/') }}">@lang('Home')</a> » <span class="breadcrumb_last" aria-current="page">@lang('About')</span>
		</div>
	</nav>

	<section class="w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
	
					<div class="content-left">
						<h3 class="hny-title">
							@lang('Why Choose Us')</h3>
						<p>{{ $contents->aboutWhyChooseUs ?? '' }}</p>
						<img src="assets/images/ab2.jpg" class="img-fluid mt-3" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //content-6-section -->
	<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="row team-row">
					<div class="team-left">
						<div class="title-content text-center">
							<h3 class="hny-title">@lang('Our Team')</h3>
							<p>{{ $contents->aboutOurTeam ?? '' }}</p>
						</div>
					</div>
					<!-- end team member -->
					@php
						$i = -1;
					@endphp
					@foreach ($contents->teams ?? [] as $team)
						@php
							$i++;
							if (empty($contents->teams[$i]) || empty($contents->teamPost[$i]))
								continue;
						@endphp
						<div class="col-lg-4 col-md-6 team-wrap">
							<div class="team-info text-left">
								<div class="column position-relative">
									<a href="#url">
										<img src="{{ asset('assets/images/bc'.$i.'.jpg') }}" alt="" class="img-fluid team-image" />
									</a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">{{ $contents->teams[$i] ?? '' }}</a></h3>
									<p>{{ $contents->teamPost[$i] ?? '' }}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	@include('frontend.common.footer')
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
    @if(session('locale') == 'ar')
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @endif
    <script src="{{ asset('assets/js/custom/frontend/about.js') }}"></script>
</body>

</html>
