@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('service.services'))

@section('content')

@include('partials.modals-service')


<!-- Hero Section -->
<section class="about-hero position-relative" style="background-image: url('{{ asset('uploads/our_services.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.5); top: 0; left: 0;"></div>
    <div class="container text-center position-relative py-5" style="z-index: 2; font-weight: 900 !important;">
        <h1 class="display-4 fw-bold text-white">{{ __('service.main_title') }}</h1>
        <p class="text-white">{{ __('service.main_description') }}</p>
        <div class="d-flex justify-content-center">
                    <a href="#services" class="btn btn-primary btn-lg px-4 py-2 me-3">
                        <i class="bi bi-arrow-down-circle me-2"></i>{{ __('service.explore_services_button') }}
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="bi bi-headset me-2"></i>{{ __('service.contact_us_button') }}
                    </a>
                    
                </div>
    </div>
</section>




<!-- Services Section -->

<!-- Services Navigation -->
<section class="services-navigation">
    <div class="container">
        <div class="services-nav-wrapper">
            <ul class="services-nav">
                <li><a href="#it-managed-services" class="nav-link">{{ __('service.it_managed_services') }}</a></li>
                <li><a href="#cloud-transformation-services" class="nav-link">{{ __('service.cloud_transformation_services') }}</a></li>
                <li><a href="#data-analytics-services" class="nav-link">{{ __('service.data_analytics_services') }}</a></li>
                <li><a href="#it-training-services" class="nav-link">{{ __('service.it_training_services') }}</a></li>
                <li><a href="#ai-services" class="nav-link">{{ __('service.ai_services') }}</a></li>
                <li><a href="#domain-services" class="nav-link">{{ __('service.domain_services') }}</a></li>
                <li><a href="#operating-model-services" class="nav-link">{{ __('service.operating_model_services') }}</a></li>
                <li><a href="#cybersecurity" class="nav-link">{{ __('service.cybersecurity') }}</a></li>
                <li><a href="#resource-outsourcing-services" class="nav-link">{{ __('service.resource_outsourcing_services') }}</a></li>
                <li><a href="#it-infrastructure-services" class="nav-link">{{ __('service.it_infrastructure_services') }}</a></li>
                <li><a href="#application-services" class="nav-link">{{ __('service.application_services') }}</a></li>
                <li><a href="#strategy-consulting-services" class="nav-link">{{ __('service.strategy_consulting_services') }}</a></li>
                <li><a href="#intelligent-automation-services" class="nav-link">{{ __('service.intelligent_automation_services') }}</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- IT Managed Services -->
<section id="it-managed-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center" style ="flex-direction: row; !important">
                <div class="col-lg-7">
                    <div class="services-header">
                        <i class="fa-solid fa-gear-complex-code"></i>
                        <div class="icon-box">
                            
                            <img src="{{ asset('icons/gear-icon.svg') }}" alt="IT Managed Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS41IDIuMTNhMSAxIDAgMCAxIDEuOTkgMGwuMzggMS4yOEEzLjAxIDMuMDEgMCAwIDEgMTMuMTggNWw1LjgxLjU0YTEgMSAwIDAgMSAuNzkgMS42NmwtLjk5IDEuMDZjLjA1LjE1LjA5LjMxLjEzLjQ3bC44MSAxLjQ1YTEgMSAwIDAgMS0xLjExIDEuNDhsLTEuMi0uMmEzLjAxIDMuMDEgMCAwIDEtMy45MSAxLjYxbC0uNjkgMS40M2ExIDEgMCAwIDEtMS43NS4yOUwtOCA5LjVhMSAxIDAgMCAxLTEuOTkgMGwtLjM4LTEuMjhBMy4wMSAzLjAxIDAgMCAxIDMuODIgN2wtLjgxLS41NGExIDEgMCAwIDEtLjc5LTEuNjZsLjk5LTEuMDZhMy4zMyAzLjMzIDAgMCAxLS4xMy0uNDdMMS4xIDEuODJBMSAxIDAgMCAxIDIuMjEuMzRsMSAuMmEzLjAxIDMuMDEgMCAwIDEgMy45MS0xLjYxbC42OS0xLjQzQTEgMSAwIDAgMSA5LjUgMi4xM3pNOCA5YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('service.it_managed_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.it_managed_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_managed_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_managed_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_managed_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/it_managed_services.jpg') }}" alt="IT Managed Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik02LjUgNy41YS41LjUgMCAwIDEgMSAwdjFhLjUuNSAwIDAgMS0xIDB2LTF6TTcgMTBhLjUuNSAwIDAgMSAuNS41di4xYS41LjUgMCAwIDEtMSAwdi0uMWEuNS41IDAgMCAxIC41LS41ek04LjUgNWEuNS41IDAgMCAxIDEgMHYuMWEuNS41IDAgMSAxLTEgMFY1em0xIDFhLjUuNSAwIDAgMSAuNS41djFhLjUuNSAwIDAgMS0xIDB2LTFhLjUuNSAwIDAgMSAuNS0uNXptLTMgLjVhLjUuNSAwIDAgMSAxIDB2LjFhLjUuNSAwIDAgMS0xIDB2LS4xem0xLTFhLjUuNSAwIDAgMSAuNS41djJhLjUuNSAwIDAgMS0xIDB2LTJhLjUuNSAwIDAgMSAuNS0uNXptMSA0LjVhMS41IDEuNSAwIDAgMS0zIDB2LjFhMS41IDEuNSAwIDAgMSAzIDB2LS4xeiIvPjxwYXRoIGQ9Ik0xNC40IDE0YTQgNCAwIDAgMS03LjggMEgyLjFhMSAxIDAgMCAxLS45OC0uOGwtMS0yYTEgMSAwIDAgMSAwLS43bC4xNS0uMjlBMSAxIDAgMCAxIDEgOS4yVjhhMiAyIDAgMCAxIDEuMDktMS43OWwuMTYtLjA4QTIgMiAwIDAgMSA0LjA5IDZIMmExIDEgMCAwIDEgMC0yaDEyYTEgMSAwIDAgMSAwIDJoLTIuMDlhMiAyIDAgMCAxIDEuODQuMS4xNkEyIDIgMCAwIDEgMTUgOHYxLjJhMSAxIDAgMCAxIC43My45MmwuMTUuMjlhMSAxIDAgMCAxIDAgLjdsLTEuMDAyIDJhMSAxIDAgMCAxLS45NzguOEg3LjR6TTEzIDhWNS45YTEgMSAwIDAgMC0uNDUtLjgzbC0uMTYtLjA4YTEgMSAwIDAgMC0uNzctLjA5bC0uNTMuMTZhMS4zNDggMS4zNDggMCAwIDEtMS43LTEuNjIuNS41IDAgMCAwLS40OC0uNjRIOGEuNS41IDAgMCAwLS40Ny4zTDcuNCA0LjIzYTEuMzQ3IDEuMzQ3IDAgMCAxLTIuNTQtLjAybC0uMTQtLjQyYS41LjUgMCAwIDAtLjQ3LS4zSDE2Ljk2YS41LjUgMCAwIDAtLjQ4LjY0djQuMjZNOCAxNGMxLjEgMCAyLS42MyAyLjQ2LTEuNjVhLjUuNSAwIDAgMCAuMDktLjQ3bC0uNDMtMS42NWEuNS41IDAgMCAwLS42My0uMzNMMTAuNSAxMGEuNS41IDAgMCAwLS4zNC42M2wuNDMgMS42NS0uMDUtLjA1QzEwLjE3IDEzLjA0IDkuMTQgMTMuNjQgOCAxMy42NGMtMS4xNCAwLTIuMTctLjYxLTIuNTQtMS40MWwtLjA1LjA1LjQzLTEuNjVhLjUuNSAwIDAgMC0uMzQtLjYzbC0xLjAxLS4yNWEuNS41IDAgMCAwLS42My4zM2wtLjQzIDEuNjVhLjUuNSAwIDAgMCAuMDkuNDdDNC4wMiAxMy4zNiA1LjkgMTQgOCAxNHptLTYuNjMtLjk5YS41LjUgMCAwIDAtLjI4LS4xMUgyLjFsMS0uMTNhLjUuNSAwIDAgMCAuNDUtLjZsLS4yNS0uOTYuMzEuMTVhLjUuNSAwIDAgMCAuNzMtLjQ0VjhhMSAxIDAgMCAxIC41NC0uODlsLjE2LS4wOGExIDEgMCAwIDEgLjg3LS4wMWwuNTMuMTZhMSAxIDAgMCAwIDEuMjUtMS4yNWwtLjE0LS40MmEuNS41IDAgMCAwLS45NC0uMDlMMTAuNTUgM2ExLjUgMS41IDAgMCAwLTIuMTIuMDlsLS4xNC40MmExIDEgMCAwIDAgLjYyIDEuMjZsLjUzLS4xNmExIDEgMCAwIDEgMS4wMy4wN2wxLjY4LjgyYTEgMSAwIDAgMSAuNTQuODlWOGEuNS41IDAgMCAwIC43My40NGwuMzEtLjE1LS4yNS45NWEuNS41IDAgMCAwIC40NS42bDEtLjEzaC0uOTlhLjUuNSAwIDAgMC0uMzkuMThsLS42My43YS41LjUgMCAwIDAgLjA2LjdsLjc1Ljc1YS41LjUgMCAwIDAgLjcxIDBsLjctLjdhLjUuNSAwIDAgMCAuMDYtLjdsLS42My0uN2EuNS41IDAgMCAwLS4zOC0uMThIOS45N2wtMSAuMTMuMjUtLjk1YS41LjUgMCAwIDAtLjQ1LS42bC0xLjA1LS4yNi0uMDQuMDFhMSAxIDAgMCAwLS43LS4xMWwtLjU0LjE3YS44NDcuODQ3IDAgMCAxLTEuMDgtLjU1bC0uMTMtLjQyYTEgMSAwIDAgMC0uNzYtLjY5bC0uNTUtLjE0YTEgMSAwIDAgMC0xLjA0LjI4eiIvPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
/* Additional styling for alternating layout */
.service-section:nth-child(odd) .row {
    flex-direction: row-reverse;
}
</style>

<!-- Cloud Transformation Services -->
<section id="cloud-transformation-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/cloud-icon.svg') }}" alt="Cloud Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNNC40MDYgMy4zNDJBNS41MyA1LjUzIDAgMCAxIDggMi41YzIuNjkgMCA0Ljk0IDIgNS4yNyA0LjU5aC4zODFjMS45NDYgMCAzLjMyOCAxLjYyNCAzLjM0NiAzLjU2M0E0LjAwMyA0LjAwMyAwIDAgMSA4IDE0Ljc1MWMtMS41MyAwLTIuOTktLjcwOC0zLjkxLTEuOTEybC0uNTI3LS42NUE0IDQgMCAwIDEgMy41OSAxMGgtLjViLS4wMDJjLS40OTkgMC0uMTc1LTEuMTc1LjMyNS0xLjE3NWguNThjLjY2OCAwIDEuMTM5LS41OCAxLjUyMy0xLjE3NSAwIDAgLjIwMy0uNDAzLjc3Mi0uNDAzLjU1OSAwIC44LjMzNi44LjMzNnYtLjMyYzEuODktLjg2NyAyLjk1Ni0yLjc0MiA0LjQwNi0zLjQyWiIvPgo8L3N2Zz4='">
                        </div>
                        <h2>{{ __('service.cloud_transformation_services') }}</h2>
                    </div>
                    <div class="services-body">
                       
                        <p>
                            {{ __('service.cloud_transformation_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cloud_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cloud_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cloud_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/cloud_based_services.jpg') }}" alt="Cloud Transformation Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xMy45MSA2Ljc1Yy0uMzQtMy40LTMuOTEtNC41NC0zLjM4LTQuNTRBNS4yMyA1LjIzIDAgMCAwIDUuMDkgNS4xQTMuMjQgMy4yNCAwIDAgMCAyLjA1IDguOWMwIDQuNDQgNC4zMSAyLjcgNC4zMSAyLjdoLjAzYy44IDAgMi4wMyAxLjIzIDMuMDcgMS4yM2guMzRjLjEgMCAuMiAwIC4zLS4yLjE1LS4xLjI4LS4yNS4zNy0uNDJhMS4wMiAxLjAyIDAgMCAxIC4wNS0uMDJsMS40My0uOWMuMjUtLjE0LjQ1LS4zNy41OC0uNjMuMTItLjI1LjItLjU0LjItLjc3IDAtLjA1IDAtLjEgMC0uMTV2LS4wOGMwIDAgMi4yLS4yMyAyLjItMi43LjA2LS41MS0uMDYtMS0uMy0xLjQxeiIvPjwvc3ZnPg=='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data Analytics Services -->
<section id="data-analytics-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/chart-icon.svg') }}" alt="Data Analytics" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC41IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVabTQgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41WiIvPjxwYXRoIGQ9Ik0wIDExYS41LjUgMCAwIDEgLjUtLjVoNGEuNS41IDAgMCAxIDAgMWgtNGEuNS41IDAgMCAxLS41LS41Wm00LTNhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('service.data_analytics_services') }}</h2>
                    </div>
                    <div class="services-body">
                         <p>
                            {{ __('service.data_analytics_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.data_analytics_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.data_analytics_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.data_analytics_feature3') }}</span>
                            </li>
                        </ul>
       
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/data-analytics.jpg') }}" alt="Data Analytics Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik00LjUgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41Wm00IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVaIi8+PHBhdGggZD0iTTAgMTFhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVptNC0zYS41LjUgMCAwIDEgLjUtLjVoNGEuNS41IDAgMCAxIDAgMWgtNGEuNS41IDAgMCAxLS41LS41WiIvPjwvc3ZnPg=='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IT Training Services -->
<section id="it-training-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/education-icon.svg') }}" alt="IT Training" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxYS44LjggMCAwIDAtLjguOFY1YS44LjggMCAwIDAgMS42IDBWMS44QS44LjggMCAwIDAgOCAxem0wIDE0YS44LjggMCAwIDAgLjgtLjh2LTJhLjguOCAwIDAgMC0xLjYgMHYyYS44LjggMCAwIDAgLjguOHpNMCA4YS44LjggMCAwIDEgLjgtLjhoNGEuOC44IDAgMCAxIDAgMS42aC00QS44LjggMCAwIDEgMCA4em0xNS4yLS44YS44LjggMCAwIDAgMCAxLjZoLTRhLjguOCAwIDAgMCAwLTEuNmg0ek0zLjY0MiAxMS4wNjVhLjguOCAwIDAgMS0uMDc3IDEuMTNMMSwxNCBhLjguOCAwIDAgMS0xLjEzLTEuMTNsMS4xLTEuMTMyYS44LjggMCAwIDEgMS4xMy4wNzd6bTcuMi0zLjYyQS44LjggMCAwIDAgOS43IDguMTJMOC41NTcgNy4wMWEuOC44IDAgMCAwLTEuMTMgMS4xM2wxLjEzMiAxLjEzMmEuOC44IDAgMCAwIDEuMTMxLS4wNzd6TTE0LjEgMy42NDJhLjguOCAwIDAgMC0xLjEzLTEuMTNsLTEuMTMyIDEuMTMyYS44LjggMCAwIDAgMS4xMzEgMS4xM0wxNC4xIDMuNjQyek0xLjg5OCAxLjU3YS44LjggMCAwIDEgMS4xMy4wNzdsMS4xMzIgMS4xMzJhLjguOCAwIDAgMS0xLjEzIDEuMTNMMS44OTggMi43YS44LjggMCAwIDEgMC0xLjEzeiIvPjwvc3ZnPg=='">

                        </div>
                        <h2>{{ __('service.it_training_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.it_training_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_training_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_training_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_training_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/it_training_services.jpg') }}" alt="IT Training Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04LjIxMSAyLjA0N2MuNDcgMCAuOTU3LjMzNCAxLjM4NC43NGE2LjgxMiA2LjgxMiAwIDAgMSAuOTUyIDEuMDY2Yy4zMTQuNDQ4LjUzIDEuMDY2LjUzMiAxLjYxNy0uMDAyLjU1Mi0uMjE5IDEuMTctLjUzOSAxLjYyLS4zMi40NS0uNjI4Ljc0My0uOTUxLjk3NC0uMzIyLjIzLS42OC4zODMtLjc2NC4zOTMtLjMwMi4wMzctLjU0OS0uMDA2LS40NTQtLjIwNmwuMDgtLjE2Yy4xMzctLjI3NCAyLS44NiAxLjc1OC0xLjY3NS0uMDE4LS4wNi0uMDkxLS4wOTYtLjI0NS0uMTJhMi4wMDggMi4wMDggMCAwIDAtLjU0MS0uMDA4Yy0uMzM2LjAyNC0uNjY5LjA3Ny0uNjkyLjAyNi0uMDIzLS4wNTIuMjY3LS4yMzIuNTgtLjMzNy42OTMtLjIzNS45MTUtLjY3My45Mi0xLjEyOS0uMDA2LS40NTUtLjIzNS0uODg4LS42ODktMS4xMmE1LjI1IDUuMjUgMCAwIDAtLjU2LS4yMjUgOS43NjUgOS43NjUgMCAwIDAtLjA1NCAxLjU4NWwuMDYyLjE1Yy4xMDMuMjQ4LjE0Ni40NS4xNDYuNzA2di4wMTJsLS4wMDUuMDEydi4wMDJjLS4wMDIuMDAzLS4wMTguMDM3LS4wNjcuMDg5LS4wNS4wNTItLjE2Ni4wODUtLjI3OS4wODMtLjA4OS0uMDAxLS4yMDMtLjA0LS4yOTgtLjEtMC4wNzUtLjA3LS4xMzEtLjItLjEzMy0uNDE0bC0uMDAyLS4wNTJhMTcuOTcgMTcuOTcgMCAwIDAtLjQwOC0yLjUwMSAyLjQyNiAyLjQyNiAwIDAgMC0uOTEuNDMzYy0uMzIuMjQ4LS42NC42MDUtLjkyNSAxLjA2NGEzLjg4MyAzLjg4MyAwIDAgMC0uNTcgMS42MjdjLS4wMS41NjIuMTkzIDEuMTk0LjU0QS45NTEuOTUxIDAgMCAxIDYuNTAxLjAzNi4xNDguMTQ4IDAgMCAxLTYuNTY3LjlhLjgzLjgzIDAgMCAxLS4wOTctLjA4OWMtLjAwOC0uMDA4LS4wMTYtLjAxNi0uMDI0LS4wMjQtLjEwMy0uMDY2LS4yMS0uMjQ4LS4yNS0uNzY3LS4wNC0uNTIuMDU0LTEuMTA0LjI3LTEuNjYuMjE2LS41NTYuNTYxLTEuMDM0Ljk0MS0xLjM5OGEyLjc2IDIuNzYgMCAwIDEgMS4wNTUtLjYxYy4xODktLjA2My4zODktLjEwMy42MDEtLjExOGExLjkyIDEuOTIgMCAwIDEgLjE4LS4wMDhaIi8+PHBhdGggZD0iTTggMTVBNyA3IDAgMSAxIDggMWE3IDcgMCAwIDEgMCAxNFptMC0xQTYgNiAwIDEgMCA4IDJhNiA2IDAgMCAwIDAgMTJaIi8+PC9zdmc+'}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- AI Services -->
<section id="ai-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/gear-icon.svg') }}" alt="IT Managed Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS41IDIuMTNhMSAxIDAgMCAxIDEuOTkgMGwuMzggMS4yOEEzLjAxIDMuMDEgMCAwIDEgMTMuMTggNWw1LjgxLjU0YTEgMSAwIDAgMSAuNzkgMS42NmwtLjk5IDEuMDZjLjA1LjE1LjA5LjMxLjEzLjQ3bC44MSAxLjQ1YTEgMSAwIDAgMS0xLjExIDEuNDhsLTEuMi0uMmEzLjAxIDMuMDEgMCAwIDEtMy45MSAxLjYxbC0uNjkgMS40M2ExIDEgMCAwIDEtMS43NS4yOUwtOCA5LjVhMSAxIDAgMCAxLTEuOTkgMGwtLjM4LTEuMjhBMy4wMSAzLjAxIDAgMCAxIDMuODIgN2wtLjgxLS41NGExIDEgMCAwIDEtLjc5LTEuNjZsLjk5LTEuMDZhMy4zMyAzLjMzIDAgMCAxLS4xMy0uNDdMMS4xIDEuODJBMSAxIDAgMCAxIDIuMjEuMzRsMSAuMmEzLjAxIDMuMDEgMCAwIDEgMy45MS0xLjYxbC42OS0xLjQzQTEgMSAwIDAgMSA5LjUgMi4xM3pNOCA5YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiLz48L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.ai_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.ai_services_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.ai_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.ai_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.ai_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/ai_services.jpg') }}" alt="AI Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik01IDBhLjUuNSAwIDAgMCAwIDFoMVYxQTIgMiAwIDAgMSA4IDN2MUEyIDIgMCAwIDEgNiA2djFINWEuNS41IDAgMCAwIDAgMWgxLjY2bC4wOTYtLjIuNjIzLTEuMjRDOC4xNiA1LjMyOCA4IDUuMTcgOCA1di0xaC0uNTg2QTEgMSAwIDAgMCA2LjUgM2MwLS4yODYuMTIxLS41NzguMzQtLjc5NEw5LjQxIDBNNCAwYS41LjUgMCAwIDAgMCAxdjFhMiAyIDAgMCAxIDIgMnYxSDVhMiAyIDAgMCAxLTItMlYyYS41LjUgMCAwIDAtLjUtLjVoLTJhLjUuNSAwIDAgMC0uNS41djEuMjkzQTIgMiAwIDAgMCAxIDV2MWEyIDIgMCAwIDAgMSAxLjcwN3YxLjM3OGEuNS41IDAgMCAwIDAgMS4wMDZ2MS4zNzJBMiAyIDAgMCAwIDEgMTJ2MWEyIDIgMCAwIDAgMiAydjFhLjUuNSAwIDAgMCAuNS41aDJhLjUuNSAwIDAgMCAuNS0uNVYxNWEyIDIgMCAwIDEgMi0ydi0xYTIgMiAwIDAgMSAyLTJIMTV2LS41YS41LjUgMCAwIDAgMC0xSDEwdi0yaDVhLjUuNSAwIDAgMCAwLTFoLTVWNmEyIDIgMCAwIDEgMi0yVjNhMiAyIDAgMCAxIDItMlYwYS41LjUgMCAwIDAgMC0xek0zIDE1LjV2LS43MDdBMiAyIDAgMCAwIDIgMTR2LTFhMSAxIDAgMCAwLTEtMVY2dUwxUzEgNCAyIDRWMmgxdi41QS41LjUgMCAwIDAgMy41IDNoLjI4NmEyIDIgMCAwIDAtLjI2OSAxSDNWMy4zNUEuMzUuMzUgMCAwIDEgMy4zNSAzaC4xMzdjMCAuMDE2LS4wMDMuMDMxLS4wMDMuMDQ3SDRWMmgxdjJINHZjLjIgMCAuMzIzLjA2NS4zNDUuMjA2LjAzNC4waC0uMDA5bC4wNjcuMTM0LjI0My40ODZDNCwNDYgNS4wMTMgNC41MTcgNSA0LjUgNUg0di41YS41LjUgMCAwIDAgLjUuNUgzVjVhMSAxIDAgMCAwLTEtMVYyTTUgOWExIDEgMCAwIDAtMS0xSDN2MmgxYTEgMSAwIDAgMCAxLTEiLz48L3N2Zz4='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Domain Services -->
<section id="domain-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                             <img src="{{ asset('icons/cloud-icon.svg') }}" alt="Cloud Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNNC40MDYgMy4zNDJBNS41MyA1LjUzIDAgMCAxIDggMi41YzIuNjkgMCA0Ljk0IDIgNS4yNyA0LjU5aC4zODFjMS45NDYgMCAzLjMyOCAxLjYyNCAzLjM0NiAzLjU2M0E0LjAwMyA0LjAwMyAwIDAgMSA4IDE0Ljc1MWMtMS41MyAwLTIuOTktLjcwOC0zLjkxLTEuOTEybC0uNTI3LS42NUE0IDQgMCAwIDEgMy41OSAxMGgtLjViLS4wMDJjLS40OTkgMC0uMTc1LTEuMTc1LjMyNS0xLjE3NWguNThjLjY2OCAwIDEuMTM5LS41OCAxLjUyMy0xLjE3NSAwIDAgLjIwMy0uNDAzLjc3Mi0uNDAzLjU1OSAwIC44LjMzNi44LjMzNnYtLjMyYzEuODktLjg2NyAyLjk1Ni0yLjc0MiA0LjQwNi0zLjQyWiIvPgo8L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.domain_services') }}</h2>
                    </div>
                    <div class="services-body">
                         <p>
                            {{ __('service.domain_services_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.domain_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.domain_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.domain_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/domain_services.jpg') }}" alt="Domain Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0wIDhhOCA4IDAgMSAxIDE2IDBBIHI4IDAgMCAxIDAgOFptNy41LS41YTUgNSAwIDAgMCA1LjUgLjl2Mi41YS41LjUgMCAwIDAgMSAwVjguNWEuNS41IDAgMCAwLS41LS41SDhhLjUuNSAwIDAgMC0uNS41djIuNWEuNS41IDAgMCAwIDEgMHYtMmE0LjcgNC43IDAgMCAxIDItLjggNC43IDQuNyAwIDAgMSA2IDBsLS43MDcuNzA3QS41LjUgMCAwIDAgOS41IDlIOGEuNS41IDAgMCAwLS41LjV2Mi41YS41LjUgMCAwIDAgMSAwdi0yYTEuNSAxLjUgMCAwIDEgLjU5IDBsLS42NzMuNjZhLjUuNSAwIDAgMC0uNjYuNjZsLjY2Ny42NjZBLjUuNSAwIDAgMCA5LjUgMTRIOGEuNS41IDAgMCAwLS41LjV2MS41YS41LjUgMCAwIDAgMSAwVjE0aDMuNWEuNS41IDAgMCAwIC4zNTQtLjg1NGwtLjY2LS42NmEuNS41IDAgMCAwLS43MDggMGwtLjY1My42NjdhLjUuNSAwIDAgMC0uMzU0Ljg1M2wuNjYuNjZhLjUuNSAwIDAgMCAuNzA4IDBsLjcuNzA3YS41LjUgMCAwIDAgLjcwNy0uNzA3bC0uNzA4LS43MDdhLjUuNSAwIDAgMC0uNzA3IDBsLS42NjcuNjdhLjUuNSAwIDAgMC0uNjYuNjZsLjY2Ny42NjZhLjUuNSAwIDAgMCAuNzA2IDBsLjcxLS42MDdhLjUuNSAwIDAgMCAuMTI4LS4yeiIvPjwvc3ZnPg=='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Operating Model Services -->
<section id="operating-model-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/chart-icon.svg') }}" alt="Data Analytics" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC41IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVabTQgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41WiIvPjxwYXRoIGQ9Ik0wIDExYS41LjUgMCAwIDEgLjUtLjVoNGEuNS41IDAgMCAxIDAgMWgtNGEuNS41IDAgMCAxLS41LS41Wm00LTNhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVoiLz48L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.operating_model_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.operating_model_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.operating_model_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.operating_model_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.operating_model_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/operating_model_services.jpg') }}" alt="Operating Model Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik02IDFjLm4uNSAwIDAgMSAuNS0uNWgzYS41LjUgMCAwIDEgLjUuNWgyQTEuNSAxLjUgMCAwIDEgMTMuNSAyLjV2M0ExLjUgMS41IDAgMCAxIDEyIDdoNGExLjUgMS41IDAgMCAxIDEuNSAxLjV2M0ExLjUgMS41IDAgMCAxIDE2IDEzaC0xYTIgMiAwIDAgMS0yLTJIM2EyIDIgMCAwIDEtMiAySDFhMS41IDEuNSAwIDAgMS0xLjUtMS41di0zQTIuNSAyLjUgMCAwIDEgMiA2aC41QTIuNSAyLjUgMCAwIDEgNSAzSDl2MUg2YTEuNSAxLjUgMCAwIDAtMS41IDEuNXYzQTEuNSAxLjUgMCAwIDAgNiA5aDMuNWEyLjUgMi41IDAgMCAxIDIuNSAyLjVWMTNoMWEuNS41IDAgMCAwIC41LS41di0zYS41LjUgMCAwIDAtLjUtLjVoLTRhMS41IDEuNSAwIDAgMS0xLjUtMS41di0zQS41LjUgMCAwIDAgNyA0di0zSDVjNC0xIDggMCAwIDgiLz48L3N2Zz4='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Cybersecurity -->
<section id="cybersecurity" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/education-icon.svg') }}" alt="IT Training" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxYS44LjggMCAwIDAtLjguOFY1YS44LjggMCAwIDAgMS42IDBWMS44QS44LjggMCAwIDAgOCAxem0wIDE0YS44LjggMCAwIDAgLjgtLjh2LTJhLjguOCAwIDAgMC0xLjYgMHYyYS44LjggMCAwIDAgLjguOHpNMCA4YS44LjggMCAwIDEgLjgtLjhoNGEuOC44IDAgMCAxIDAgMS42aC00QS44LjggMCAwIDEgMCA4em0xNS4yLS44YS44LjggMCAwIDAgMCAxLjZoLTRhLjguOCAwIDAgMCAwLTEuNmg0ek0zLjY0MiAxMS4wNjVhLjguOCAwIDAgMS0uMDc3IDEuMTNMMSwxNCBhLjguOCAwIDAgMS0xLjEzLTEuMTNsMS4xLTEuMTMyYS44LjggMCAwIDEgMS4xMy4wNzd6bTcuMi0zLjYyQS44LjggMCAwIDAgOS43IDguMTJMOC41NTcgNy4wMWEuOC44IDAgMCAwLTEuMTMgMS4xM2wxLjEzMiAxLjEzMmEuOC44IDAgMCAwIDEuMTMxLS4wNzd6TTE0LjEgMy42NDJhLjguOCAwIDAgMC0xLjEzLTEuMTNsLTEuMTMyIDEuMTMyYS44LjggMCAwIDAgMS4xMzEgMS4xM0wxNC4xIDMuNjQyek0xLjg5OCAxLjU3YS44LjggMCAwIDEgMS4xMy4wNzdsMS4xMzIgMS4xMzJhLjguOCAwIDAgMS0xLjEzIDEuMTNMMS44OTggMi43YS44LjggMCAwIDEgMC0xLjEzeiIvPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('service.cybersecurity') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.cybersecurity_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cybersecurity_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cybersecurity_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.cybersecurity_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/cybersecurity.jpg') }}" alt="Cybersecurity Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDBjMy4yIDAgNi4yIDEuNiA4IDQuMnYxLjVjMCA1LjEtMy44IDkuNS04LjkgMTAuM0g2LjlDMS44IDE1LjItMiAxMC44MiAxNS43VjQuMkMzLjggMS42IDYuOCAwIDggMFpNNi41IDEyYS41LjUgMCAwIDEgMC0uOTlMOCA4bC41LTUgMiA0djNhLjUuNSAwIDAgMS0xIDBINi41WiIvPjwvc3ZnPg=='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Resource Outsourcing Services -->
    <section id="resource-outsourcing-services" class="service-section">
        <div class="container">
            <div class="services-item">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="services-header">
                            <div class="icon-box">
                                <img src="{{ asset('icons/gear-icon.svg') }}" alt="IT Managed Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS41IDIuMTNhMSAxIDAgMCAxIDEuOTkgMGwuMzggMS4yOEEzLjAxIDMuMDEgMCAwIDEgMTMuMTggNWw1LjgxLjU0YTEgMSAwIDAgMSAuNzkgMS42NmwtLjk5IDEuMDZjLjA1LjE1LjA5LjMxLjEzLjQ3bC44MSAxLjQ1YTEgMSAwIDAgMS0xLjExIDEuNDhsLTEuMi0uMmEzLjAxIDMuMDEgMCAwIDEtMy45MSAxLjYxbC0uNjkgMS40M2ExIDEgMCAwIDEtMS43NS4yOUwtOCA5LjVhMSAxIDAgMCAxLTEuOTkgMGwtLjM4LTEuMjhBMy4wMSAzLjAxIDAgMCAxIDMuODIgN2wtLjgxLS41NGExIDEgMCAwIDEtLjc5LTEuNjZsLjk5LTEuMDZhMy4zMyAzLjMzIDAgMCAxLS4xMy0uNDdMMS4xIDEuODJBMSAxIDAgMCAxIDIuMjEuMzRsMSAuMmEzLjAxIDMuMDEgMCAwIDEgMy45MS0xLjYxbC42OS0xLjQzQTEgMSAwIDAgMSA5LjUgMi4xM3pNOCA5YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiLz48L3N2Zz4='">

                            </div>
                            <h2>{{ __('service.resource_outsourcing_services') }}</h2>
                        </div>
                        <div class="services-body">
                        <p>
                            {{ __('service.resource_outsourcing_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.resource_outsourcing_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.resource_outsourcing_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.resource_outsourcing_feature3') }}</span>
                            </li>
                        </ul>

                            <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('uploads/resource_outsourcing_services.jpg') }}" alt="Resource Outsourcing Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNSAxNkg5Yy0uNSAwLTEtLjUtMS0xVjdjMC0uNS41LTEgMS0xaDZjLjUgMCAxIC41IDEgMXY4YzAgLjUtLjUgMS0xIDF6TTE0IDEyYTIgMiAwIDEgMS00IDAgMiAyIDAgMCAxIDQgMHoiLz48cGF0aCBkPSJNNyAxNkgxYy0uNSAwLTEtLjUtMS0xVjdjMC0uNS41LTEgMS0xaDZjLjUgMCAxIC41IDEgMXY4YzAgLjUtLjUgMS0xIDF6TTYgMTJhMiAyIDAgMSAxLTQgMCAyIDIgMCAwIDEgNCAweiIvPjwvc3ZnPg=='}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- IT Infrastructure Services -->
<section id="it-infrastructure-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                             <img src="{{ asset('icons/cloud-icon.svg') }}" alt="Cloud Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNNC40MDYgMy4zNDJBNS41MyA1LjUzIDAgMCAxIDggMi41YzIuNjkgMCA0Ljk0IDIgNS4yNyA0LjU5aC4zODFjMS45NDYgMCAzLjMyOCAxLjYyNCAzLjM0NiAzLjU2M0E0LjAwMyA0LjAwMyAwIDAgMSA4IDE0Ljc1MWMtMS41MyAwLTIuOTktLjcwOC0zLjkxLTEuOTEybC0uNTI3LS42NUE0IDQgMCAwIDEgMy41OSAxMGgtLjViLS4wMDJjLS40OTkgMC0uMTc1LTEuMTc1LjMyNS0xLjE3NWguNThjLjY2OCAwIDEuMTM5LS41OCAxLjUyMy0xLjE3NSAwIDAgLjIwMy0uNDAzLjc3Mi0uNDAzLjU1OSAwIC44LjMzNi44LjMzNnYtLjMyYzEuODktLjg2NyAyLjk1Ni0yLjc0MiA0LjQwNi0zLjQyWiIvPgo8L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.it_infrastructure_services') }}</h2>
                    </div>
                    <div class="services-body">
                       <p>
                            {{ __('service.it_infrastructure_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_infrastructure_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_infrastructure_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.it_infrastructure_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/it_infrastructure.jpg') }}" alt="IT Infrastructure Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik00LjUgM2EuNS41IDAgMSAwIDAtMWEuNS41IDAgMCAwIDAgMVptMyAwYS41LjUgMCAxIDAgMC0xYS41LjUgMCAwIDAgMCAxWk04IDhhLjUuNSAwIDEgMCAwLTFhLjUuNSAwIDAgMCAwIDFabTMuNSAwYS41LjUgMCAxIDAgMC0xYS41LjUgMCAwIDAgMCAxWk00LjUgOGEuNS41IDAgMSAwIDAtMWEuNS41IDAgMCAwIDAgMVptNy41LTZoLTEwYTEgMSAwIDAgMC0xIDF2NmExIDEgMCAwIDAgMSAxaDEwYTEgMSAwIDAgMCAxLTFWM2ExIDEgMCAwIDAtMS0xWm0tNSA2YS41LjUgMCAxIDEgMC0xYS41LjUgMCAwIDEgMCAxWm0wIDBhLjUuNSAwIDEgMSAwIDFhLjUuNSAwIDAgMSAwLTF6bTcgM0g3LjVhMSAxIDAgMCAwLTEgMXYxYTEgMSAwIDAgMCAxIDFoNi41YTEgMSAwIDAgMCAxLTF2LTFhMSAxIDAgMCAwLTEtMVptLjI1IDQuMjVhMi4yNSAyLjI1IDAgMSAxLTQuNSAwIDIuMjUgMi4yNSAwIDAgMSA0LjUgMFoiLz48L3N2Zz4='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Services -->
<section id="application-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/chart-icon.svg') }}" alt="Data Analytics" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC41IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVabTQgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41WiIvPjxwYXRoIGQ9Ik0wIDExYS41LjUgMCAwIDEgLjUtLjVoNGEuNS41IDAgMCAxIDAgMWgtNGEuNS41IDAgMCAxLS41LS41Wm00LTNhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVoiLz48L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.application_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.application_services_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.application_services_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.application_services_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.application_services_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/application_services.jpeg') }}" alt="Application Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0wIDRhMyAzIDAgMCAxIDMtM2gxMGEzIDMgMCAwIDEgMyAzdjhhMyAzIDAgMCAxLTMgM0gzYTMgMyAwIDAgMS0zLTNWNHptMi0uNVY0aDE1djEwSDF2LjloLjA1YTIgbC41LTEyem0xMiAyYS41LjUgMCAwIDAtLjUtLjVoLTVhLjUuNSAwIDAgMCAwIDFoNWEuNS41IDAgMCAwIC41LS41em0tMTAgNGEuNS41IDAgMCAwIC41LjVoN2YuNS41IDAgMCAwIDAtMWgtN2YuNS41IDAgMCAwLS41LjV6Ii8+PC9zdmc+'}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategy Consulting Services -->
<section id="strategy-consulting-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/education-icon.svg') }}" alt="IT Training" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxYS44LjggMCAwIDAtLjguOFY1YS44LjggMCAwIDAgMS42IDBWMS44QS44LjggMCAwIDAgOCAxem0wIDE0YS44LjggMCAwIDAgLjgtLjh2LTJhLjguOCAwIDAgMC0xLjYgMHYyYS44LjggMCAwIDAgLjguOHpNMCA4YS44LjggMCAwIDEgLjgtLjhoNGEuOC44IDAgMCAxIDAgMS42aC00QS44LjggMCAwIDEgMCA4em0xNS4yLS44YS44LjggMCAwIDAgMCAxLjZoLTRhLjguOCAwIDAgMCAwLTEuNmg0ek0zLjY0MiAxMS4wNjVhLjguOCAwIDAgMS0uMDc3IDEuMTNMMSwxNCBhLjguOCAwIDAgMS0xLjEzLTEuMTNsMS4xLTEuMTMyYS44LjggMCAwIDEgMS4xMy4wNzd6bTcuMi0zLjYyQS44LjggMCAwIDAgOS43IDguMTJMOC41NTcgNy4wMWEuOC44IDAgMCAwLTEuMTMgMS4xM2wxLjEzMiAxLjEzMmEuOC44IDAgMCAwIDEuMTMxLS4wNzd6TTE0LjEgMy42NDJhLjguOCAwIDAgMC0xLjEzLTEuMTNsLTEuMTMyIDEuMTMyYS44LjggMCAwIDAgMS4xMzEgMS4xM0wxNC4xIDMuNjQyek0xLjg5OCAxLjU3YS44LjggMCAwIDEgMS4xMy4wNzdsMS4xMzIgMS4xMzJhLjguOCAwIDAgMS0xLjEzIDEuMTNMMS44OTggMi43YS44LjggMCAwIDEgMC0xLjEzeiIvPjwvc3ZnPg=='">

                        </div>
                        <h2>{{ __('service.strategy_consulting_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.strategy_consulting_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.strategy_consulting_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.strategy_consulting_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.strategy_consulting_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/strategy_consulting_services.jpeg') }}" alt="Strategy Consulting Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDE2QTExIDggMCAxIDAgOCA0YTExIDggMCAwIDAgMCAxMnpNNCA4YTQgNCAwIDEgMSA4IDBhNCA0IDAgMCAxLTggMHptNSAwYTEgMSAwIDEgMC0yIDAgMSAxIDAgMCAwIDIgMHoiLz48L3N2Zz4='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intelligent Automation Services -->
<section id="intelligent-automation-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/gear-icon.svg') }}" alt="IT Managed Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS41IDIuMTNhMSAxIDAgMCAxIDEuOTkgMGwuMzggMS4yOEEzLjAxIDMuMDEgMCAwIDEgMTMuMTggNWw1LjgxLjU0YTEgMSAwIDAgMSAuNzkgMS42NmwtLjk5IDEuMDZjLjA1LjE1LjA5LjMxLjEzLjQ3bC44MSAxLjQ1YTEgMSAwIDAgMS0xLjExIDEuNDhsLTEuMi0uMmEzLjAxIDMuMDEgMCAwIDEtMy45MSAxLjYxbC0uNjkgMS40M2ExIDEgMCAwIDEtMS43NS4yOUwtOCA5LjVhMSAxIDAgMCAxLTEuOTkgMGwtLjM4LTEuMjhBMy4wMSAzLjAxIDAgMCAxIDMuODIgN2wtLjgxLS41NGExIDEgMCAwIDEtLjc5LTEuNjZsLjk5LTEuMDZhMy4zMyAzLjMzIDAgMCAxLS4xMy0uNDdMMS4xIDEuODJBMSAxIDAgMCAxIDIuMjEuMzRsMSAuMmEzLjAxIDMuMDEgMCAwIDEgMy45MS0xLjYxbC42OS0xLjQzQTEgMSAwIDAgMSA5LjUgMi4xM3pNOCA5YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiLz48L3N2Zz4='">

                        </div>
                        <h2>{{ __('service.intelligent_automation_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('service.intelligent_automation_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.intelligent_automation_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.intelligent_automation_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('service.intelligent_automation_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">{{ __('service.learn_more') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/intelligent_automation_services.jpeg') }}" alt="Intelligent Automation Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik02IDNhMyAyIDAgMSAxLTYgMCAzIDIgMCAwIDEgNiAwem0uNSAyaC41YS41LjUgMCAwIDEgLjUuNXYxYS41LjUgMCAwIDEtLjUuNVYyYS41LjUgMCAwIDEtLjUtLjVWMWEuNS41IDAgMCAxIC41LS41SDZjMi4yMDYgMCA0IDIuMDQ5IDQgNiAwIDMuOTUzLTEuNzk0IDYtNCA2aC0uNUM5IDcsIDkgNyA5IDcgNi44ODQgNyA1LjUgNi4zMTQgNS41IDV6bTEuNSA0YTIuNSAyLjUgMCAxIDAgMCA1IDIuNSAyLjUgMCAwIDAgMC01eiIvPjwvc3ZnPg=='}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
/* Services Hero Styles */
.services-hero {
    background: linear-gradient(135deg, #0d47a1, #1976d2);
    color: white;
    padding: 100px 0 50px;
    position: relative;
    overflow: hidden;
}

.services-hero:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGNpcmNsZSBjeD0iMyIgY3k9IjMiIHI9IjMiIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+');
    opacity: 0.2;
    z-index: 0;
}

.services-hero .container {
    position: relative;
    z-index: 1;
}

.page-title {
    font-weight: 800;
    margin-bottom: 1.5rem;
    font-size: 2.5rem;
}

/* Services Navigation Styles */
.services-navigation {
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 100;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
}

.services-nav-wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    padding: 5px 0;
}

/* .services-nav {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: max-content;
} */
/* 
.services-nav li {
    margin: 0 5px;
}

.services-nav li:first-child {
    margin-left: 0;
}

.services-nav li:last-child {
    margin-right: 0;
} */

.services-nav .nav-link {
    display: block;
    padding: 10px 15px;
    color: #555;
    text-decoration: none;
    font-weight: 500;
    border-radius: 30px;
    white-space: nowrap;
    transition: all 0.3s ease;
}

.services-nav .nav-link:hover,
.services-nav .nav-link:focus {
    color: #0d6efd;
    background-color: rgba(13, 110, 253, 0.05);
}

.services-nav .nav-link.active {
    background-color: #0d6efd;
    color: white;
}

/* Service Section Styles */
.service-section {
    padding: 80px 0;
    position: relative;
}

.service-section:nth-of-type(even) {
    background-color: #f8f9fa;
}

.services-item {
    max-width: 900px;
    margin: 0 auto;
    background-color: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
}

.services-header {
    padding: 40px 40px 20px;
    display: flex;
    align-items: center;
    position: relative;
}

.services-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 40px;
    right: 40px;
    height: 1px;
    background-color: rgba(0, 0, 0, 0.05);
}

.icon-box {
    width: 80px;
    height: 80px;
    /* background-color: rgba(13, 110, 253, 0.1); */
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 25px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.service-icon {
    margin: 0px;
    width: 40px;
    height: 40px;
    transition: all 0.3s ease;
}

.services-header h2 {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    /* color: #212529; */
    line-height: 1.2;
}

.services-body {
    padding: 30px 40px 40px;
}

.services-body p {
    /* color: #555; */
    margin-bottom: 25px;
    font-size: 1.1rem;
    line-height: 1.7;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
}

.features-list li {
    display: flex;
    align-items: center;
    font-size: 1rem;
    /* color: #444; */
}

.check-icon {
    width: 26px;
    height: 26px;
    background-color: rgba(13, 110, 253, 0.1);
    border-radius: 50%;
    margin-right: 12px;
    position: relative;
    flex-shrink: 0;
}

.check-icon::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
    width: 6px;
    height: 12px;
    border-bottom: 2px solid #0d6efd;
    border-right: 2px solid #0d6efd;
    margin-top: -2px;
}

.service-link {
    display: inline-flex;
    align-items: center;
    color: #0d6efd;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    padding: 12px 25px;
    border: 2px solid #0d6efd;
    border-radius: 8px;
}

.service-link:hover {
    background-color: #0d6efd;
    color: white;
}

.service-link::after {
    content: '';
    width: 6px;
    height: 6px;
    border-top: 2px solid currentColor;
    border-right: 2px solid currentColor;
    transform: rotate(45deg);
    margin-left: 10px;
    transition: all 0.2s ease;
}

.service-link:hover::after {
    transform: rotate(45deg) translate(3px, -3px);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #0d47a1, #1976d2);
    color: white;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.cta-section:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGNpcmNsZSBjeD0iMyIgY3k9IjMiIHI9IjMiIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+');
    opacity: 0.2;
    z-index: 0;
}

.cta-section .container {
    position: relative;
    z-index: 1;
}

.cta-section h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.cta-section p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-section .btn {
    padding: 12px 30px;
    font-weight: 600;
    font-size: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.cta-section .btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Responsive Adjustments */
@media (max-width: 991px) {
    .services-header {
        padding: 30px 30px 15px;
    }
    
    .services-body {
        padding: 25px 30px 30px;
    }
    
    .services-header h2 {
        font-size: 1.75rem;
    }
    
    .service-section {
        padding: 60px 0;
    }
    
    .icon-box {
        width: 60px;
        height: 60px;
    }
    
    .service-icon {
        width: 30px;
        height: 30px;
    }
}

@media (max-width: 767px) {
    .page-title {
        font-size: 2rem;
    }
    
    .services-header {
        flex-direction: column;
        text-align: center;
        padding: 30px 20px 15px;
    }
    
    .services-body {
        padding: 20px 20px 30px;
    }
    
    .icon-box {
        margin-right: 0;
        margin-bottom: 20px;
    }
    
    .services-hero,
    .service-section,
    .cta-section {
        padding: 50px 0;
    }
    
    .features-list {
        grid-template-columns: 1fr;
    }
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
    scroll-padding-top: 80px; /* Height of the sticky navigation */
}

/* Active navigation highlighting */

</style>


<!-- Call to Action -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h3 class="mb-4">{{ __('service.ready_to_transform') }}</h3>
                <p class="mb-4">{{ __('service.cta_description') }}</p>
                <a href="#contact" class="btn btn-light btn-lg">
                    <i class="bi bi-envelope me-2"></i>{{ __('service.contact_us') }}
                </a>
            </div>
        </div>
    </div>
</section>


@endsection


