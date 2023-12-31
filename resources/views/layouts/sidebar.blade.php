@php
$c = Request::segment(1);
$m = Request::segment(2);
$roleName = Auth::user()->getRoleNames();
@endphp

<aside class="main-sidebar sidebar-light-info elevation-4">
    <a href="{{ route('dashboard')  }}" class="brand-link sidebar-light-info">
        <img src="{{ asset('assets/images/logo.jpg') }}" alt="{{ $ApplicationSetting->item_name }}" id="custom-opacity-sidebar" class="brand-image">
        <span class="brand-text font-weight-light">Dentistcare</span>
    </a>
    <div class="sidebar">
        <?php
            if(Auth::user()->photo == NULL)
            {
                $photo = "assets/images/profile/male.png";
            } else {
                $photo = Auth::user()->photo;
            }
        ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset($photo) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info my-auto">
                {{ Auth::user()->name }}
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if($c == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                @canany(['doctor-detail-read', 'doctor-detail-create', 'doctor-detail-update', 'doctor-detail-delete'])
                    <li class="nav-item">
                        <a href="{{ route('doctor-details.index') }}" class="nav-link @if($c == 'doctor-details') active @endif">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>@lang('Doctor')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['patient-detail-read', 'patient-detail-create', 'patient-detail-update', 'patient-detail-delete'])
                    <li class="nav-item">
                        <a href="{{ route('patient-details.index') }}" class="nav-link @if($c == 'patient-details') active @endif">
                            <i class="nav-icon fas fa-user-injured"></i>
                            <p>@lang('Patient')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['doctor-schedule-read', 'doctor-schedule-create', 'doctor-schedule-update', 'doctor-schedule-delete'])
                    <li class="nav-item">
                        <a href="{{ route('doctor-schedules.index') }}" class="nav-link @if($c == 'doctor-schedules') active @endif">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>@lang('Doctor Schedule')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['patient-appointment-read', 'patient-appointment-create', 'patient-appointment-update', 'patient-appointment-delete'])
                    <li class="nav-item">
                        <a href="{{ route('patient-appointments.index') }}" class="nav-link @if($c == 'patient-appointments') active @endif">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>@lang('Patient Appointment')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['patient-case-studies-read', 'patient-case-studies-create', 'patient-case-studies-update', 'patient-case-studies-delete'])
                    <li class="nav-item">
                        <a href="{{ route('patient-case-studies.index') }}" class="nav-link @if($c == 'patient-case-studies') active @endif">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>@lang('Patient Case Studies')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['prescription-read', 'prescription-create', 'prescription-update', 'prescription-delete'])
                    <li class="nav-item">
                        <a href="{{ route('prescriptions.index') }}" class="nav-link @if($c == 'prescriptions') active @endif">
                            <i class="nav-icon fas fa-pills"></i>
                            <p>@lang('Prescription')</p>
                        </a>
                    </li>
                @endcanany

                @canany(['contact-us-read', 'contact-us-delete'])
                    <li class="nav-item">
                        <a href="{{ route('contacts.index') }}" class="nav-link @if($c == 'contacts') active @endif">
                            <i class="nav-icon far fa-address-book"></i>
                            <p>@lang('Contact Us')</p>
                        </a>
                    </li>
                @endcanany
                @canany(['email-template-read', 'email-template-create', 'email-template-update', 'email-template-delete', 'email-campaign-read', 'email-campaign-create', 'email-campaign-update', 'email-campaign-delete'])
                    <li class="nav-item has-treeview @if($c == 'email-templates' || $c == 'email-campaigns') menu-open @endif">
                        <a href="javascript:void(0)" class="nav-link @if($c == 'email-templates' || $c == 'email-campaigns') active @endif">
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                            <p>
                                @lang('Email')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @canany(['email-template-read', 'email-template-create', 'email-template-update', 'email-template-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('email-templates.index') }}" class="nav-link @if($c == 'email-templates') active @endif ">
                                        <i class="fas fa-crop-alt"></i>
                                        <p>@lang('Email Tempaltes')</p>
                                    </a>
                                </li>
                            @endcanany
                            @canany(['email-campaign-read', 'email-campaign-create', 'email-campaign-update', 'email-campaign-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('email-campaigns.index') }}" class="nav-link @if($c == 'email-campaigns') active @endif ">
                                        <i class="fas fa-bullhorn"></i>
                                        <p>@lang('Email Campaigns')</p>
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </li>
                @endcanany
               
                @canany(['role-read', 'role-create', 'role-update', 'role-delete', 'user-read', 'user-create', 'user-update', 'user-delete', 'smtp-read', 'smtp-create', 'smtp-update', 'smtp-delete','company-read', 'company-create', 'company-update', 'company-delete', 'currencies-read', 'currencies-create', 'currencies-update', 'currencies-delete','tax-rate-read', 'tax-rate-create', 'tax-rate-update', 'tax-rate-delete'])
                    <li class="nav-item has-treeview @if($c == 'roles' || $c == 'users' || $c == 'apsetting' || $c == 'smtp-configurations' || $c == 'general' || $c == 'currency' || $c == 'tax' ) menu-open @endif">
                        <a href="javascript:void(0)" class="nav-link @if($c == 'roles' || $c == 'users' || $c == 'apsetting' || $c == 'smtp-configurations' || $c == 'general' || $c == 'currency' || $c == 'tax'  ) active @endif">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                @lang('Settings')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @canany(['role-read', 'role-create', 'role-update', 'role-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link @if($c == 'roles') active @endif ">
                                        <i class="fas fa-cube nav-icon"></i>
                                        <p>@lang('Role Management')</p>
                                    </a>
                                </li>
                            @endcanany
                            @canany(['user-read', 'user-create', 'user-update', 'user-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link @if($c == 'users') active @endif ">
                                        <i class="fa fa-users nav-icon"></i>
                                        <p>@lang('User Management')</p>
                                    </a>
                                </li>
                            @endcanany
                            @if ($roleName['0'] = "Super Admin")
                                <li class="nav-item">
                                    <a href="{{ route('apsetting') }}" class="nav-link @if($c == 'apsetting' && $m == null) active @endif ">
                                        <i class="fa fa-globe nav-icon"></i>
                                        <p>@lang('Application Settings')</p>
                                    </a>
                                </li>
                            @endif
                            @canany(['smtp-read', 'smtp-create', 'smtp-update', 'smtp-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('smtp-configurations.index') }}" class="nav-link @if($c == 'smtp-configurations') active @endif ">
                                        <i class="fas fa-mail-bulk nav-icon"></i>
                                        <p>@lang('SMTP Settings')</p>
                                    </a>
                                </li>
                            @endcanany
                            @canany(['company-read', 'company-create', 'company-update', 'company-delete'])
                                <li class="nav-item">
                                    <a href="{{ route('general') }}" class="nav-link @if($c == 'general') active @endif ">
                                        <i class="fas fa-align-left nav-icon"></i>
                                        <p>@lang('General Settings')</p>
                                    </a>
                                </li>
                            @endcanany
                           
                        </ul>
                    </li>
                @endcanany
            </ul>
        </nav>
    </div>
</aside>
