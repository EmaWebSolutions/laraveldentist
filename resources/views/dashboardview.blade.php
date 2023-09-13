@extends('layouts.layout')

@section('one_page_css')
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('one_page_js')
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>@lang('Dashboard')</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">@lang('Dashboard')</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-user-md"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('Doctor')</span>
                    <span class="info-box-number">{{ $dashboardCounts['doctors'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-user-injured"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('Patient')</span>
                    <span class="info-box-number">{{ $dashboardCounts['patients'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-calendar-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">@lang('Patient Appointment')</span>
                    <span class="info-box-number">{{ $dashboardCounts['appointments'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-file-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('Patient Case Studies')</span>
                    <span class="info-box-number">{{ $dashboardCounts['caseStudies'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-pills"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('Prescription')</span>
                    <span class="info-box-number">{{ $dashboardCounts['prescriptions'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        
    
    </div>





@endsection

@push('footer')
    <script src="{{ asset('assets/js/custom/dashboard/view.js') }}"></script>
@endpush
