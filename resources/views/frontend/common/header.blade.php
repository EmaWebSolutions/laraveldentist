@php
    $headers = json_decode(\App\Models\FrontEnd::find(1)->content);
@endphp
<!--header-->
<section class="w3l-top-header-content">
    <div class="hny-top-menu">
        <div class="container">
            <div class="row">
                <div class="top-left col-lg-6">
                    <ul class="accounts">
                        <li class="top_li"><span class="far fa-map"></span> <a href="#"> 10 laradentist new city</a>
                        </li>
                        <li class="top_li mr-lg-0"><span class="far fa-envelope"></span> <a
                                href="mailto:{{ $headers->topEmail ?? '' }}" class="mail"> {{ $headers->topEmail ?? '' }}</a>
                        </li>
                    </ul>
                </div>
                  <div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
                    <div class="top-bar-text"><a class="bk-button" href="#">@lang('CALL US') </a> {{ $headers->questionCall ?? '' }}</div>
                </div>
              <!--  <div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
                    <div class="top-bar-text"><a class="bk-button" href="#">@lang('BOOK ONLINE') </a> @lang('You can request appointment in 24 hours')</div>
                </div>-->

            </div>
        </div>
    </div>
</section>
<!--//top-header-content-->
<!--header-->
<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">DENSTISTCARE</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fas icon-expand fa-bars"></span>
                <span class="fas icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item @if(request()->is('/')) active @endif">
                        <a class="nav-link" href="{{ url('/') }}">@lang('Home')</a>
                    </li>
                    <li class="nav-item @if(request()->is('about')) active @endif">
                        <a class="nav-link" href="{{ url('/about') }}">@lang('About')</a>
                    </li>
                    <li class="nav-item @if(request()->is('services')) active @endif">
                        <a class="nav-link" href="{{ url('/services') }}">@lang('Services')</a>
                    </li>

                    <li class="nav-item @if(request()->is('contact')) active @endif">
                        <a class="nav-link" href="{{ url('/contact') }}">@lang('Contact')</a>
                    </li>

                    <li class="nav-item">
                         @if(Auth::user()==!NULL)
                          <a id="custom-header-nav-item" class="btn btn-primary" href="{{ url('/dashboard') }}">{{Auth::user()->name}}</a>
                         @else
                          <a id="custom-header-nav-item" class="btn btn-primary" href="{{ url('/login') }}">@lang('Log in')</a>
                         @endif
                        
                    </li>
         
                </ul>
              
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //header -->
