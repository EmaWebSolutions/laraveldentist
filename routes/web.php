<?php
use App\Models\FrontEnd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\InstallController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FinancialReportController;
use App\Http\Controllers\AccountHeaderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HospitalDepartmentController;
use App\Http\Controllers\DoctorDetailController;
use App\Http\Controllers\PatientDetailController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\PatientAppointmentController;
use App\Http\Controllers\PatientCaseStudyController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\LabReportTemplateController;
use App\Http\Controllers\LabReportController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SmsApiController;
use App\Http\Controllers\SmsTemplateController;
use App\Http\Controllers\SmsCampaignController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\EmailCampaignController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\SmtpConfigurationController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationSettingController;
use App\Http\Controllers\GeneralController;


Route::get('/lang', [
    HomeController::class, 'lang'
])->name('lang.index');

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        if (!Schema::hasTable('application_settings')) {
            return redirect('/install');
        }
    } catch (\Exception $e) {
        return redirect('/install');
    }

    $frontEndContent = FrontEnd::find(1)->content;
    return view('frontend.index', ['contents' => json_decode($frontEndContent)]);
});

Route::get('/about', function () {
    $frontEndContent = FrontEnd::find(2)->content;
    return view('frontend.about', ['contents' => json_decode($frontEndContent)]);
});

Route::get('/services', function () {
    $frontEndContent = FrontEnd::find(3)->content;
    return view('frontend.services', ['contents' => json_decode($frontEndContent)]);
});

Route::get('/contact', function () {
    $frontEndContent = FrontEnd::find(4)->content;
    return view('frontend.contact', ['contents' => json_decode($frontEndContent)]);
});

Route::post('/contact-form', [ContactUsFormController::class, 'store'])->name('contact-form.store');

Auth::routes(['register' => false]);

Route::get('/install', [
    InstallController::class, 'index'
])->name('install.index');

Route::post('/install', [
    InstallController::class, 'install'
])->name('install.install');


Route::middleware(['auth'])->group(function () {
    Route::get('/company/companyAccountSwitch', [
        CompanyController::class, 'companyAccountSwitch'
    ])->name('company.companyAccountSwitch');

    Route::get('/financial-reports', [FinancialReportController::class, 'index'])->name('financial-reports.index');

    Route::resources([
        'account-headers' => AccountHeaderController::class,
        'payments' => PaymentController::class,
        'hospital-departments' => HospitalDepartmentController::class,
        'doctor-details' => DoctorDetailController::class,
        'patient-details' => PatientDetailController::class,
        'doctor-schedules' => DoctorScheduleController::class,
        'patient-appointments' => PatientAppointmentController::class,
        'patient-case-studies' => PatientCaseStudyController::class,
        'prescriptions' => PrescriptionController::class,
        'lab-report-templates' => LabReportTemplateController::class,
        'lab-reports' => LabReportController::class,
        'front-ends' => FrontEndController::class,
        'contacts' => ContactUsController::class,
        'sms-apis' => SmsApiController::class,
        'sms-templates' => SmsTemplateController::class,
        'sms-campaigns' => SmsCampaignController::class,
        'email-templates' => EmailTemplateController::class,
        'email-campaigns' => EmailCampaignController::class,
        'insurances' => InsuranceController::class,
        'invoices' => InvoiceController::class,
        'roles' => RoleController::class,
        'users' => UserController::class,
        'currency' => CurrencyController::class,
        'tax' => TaxController::class,
        'smtp-configurations' => SmtpConfigurationController::class,
        'company' => CompanyController::class
    ]);

    Route::put('/front-ends/updateHome/{frontEnd}', [FrontEndController::class, 'updateHome'])->name('front-ends.updateHome');
    Route::put('/front-ends/updateContact/{frontEnd}', [FrontEndController::class, 'updateContact'])->name('front-ends.updateContact');
    Route::put('/front-ends/updateAbout/{frontEnd}', [FrontEndController::class, 'updateAbout'])->name('front-ends.updateAbout');
    Route::put('/front-ends/updateServices/{frontEnd}', [FrontEndController::class, 'updateServices'])->name('front-ends.updateServices');

    Route::get('/patient-appointments/get-schedule/doctorwise', [PatientAppointmentController::class, 'getScheduleDoctorWise'])->name('patient-appointments.getScheduleDoctorWise');
    
    Route::post('/labreport/generateTemplateData', [LabReportController::class, 'generateTemplateData'])->name('labreport.generateTemplateData');
    
    Route::post('/smsCampaign/generateTemplateData', [SmsCampaignController::class, 'generateTemplateData'])->name('smsCampaign.generateTemplateData');
    
    Route::post('/emailCampaign/generateTemplateData', [EmailCampaignController::class, 'generateTemplateData'])->name('emailCampaign.generateTemplateData');
    
    Route::get('/c/c', [CurrencyController::class, 'code'])->name('currency.code');

    Route::get('/update', [UpdateController::class, 'index'])->name('update.index');

    Route::get('/profile/setting', [ProfileController::class, 'setting'])->name('profile.setting');
    Route::post('/profile/updateSetting', [ProfileController::class, 'updateSetting'])->name('profile.updateSetting');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::post('/profile/updatePassword', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [
        DashboardController::class, 'index'
    ])->name('dashboard');

    Route::get('/dashboard/get-chart-data', [
        DashboardController::class, 'getChartData'
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/apsetting', [
        ApplicationSettingController::class, 'index'
    ])->name('apsetting');

    Route::post('/apsetting/update', [
        ApplicationSettingController::class, 'update'
    ])->name('apsetting.update');
});

// general Setting
Route::middleware(['auth'])->group(function () {
    Route::get('/general', [
        GeneralController::class, 'index'
    ])->name('general');

    Route::post('/general', [
        GeneralController::class, 'edit'
    ])->name('general.edit');

    Route::post('/general/localisation', [
        GeneralController::class, 'localisation'
    ])->name('general.localisation');

    Route::post('/general/invoice', [
        GeneralController::class, 'invoice'
    ])->name('general.invoice');

    Route::post('/general/defaults', [
        GeneralController::class, 'defaults'
    ])->name('general.defaults');
});

Route::get('/home', function () {
    return redirect()->route('dashboard');
});
