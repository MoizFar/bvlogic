@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('site.page_title'))

@section('content')


@include('partials.modals-solution')


<!-- Hero Section -->
<section class="about-hero position-relative" style="background-image: url('{{ asset('uploads/our_solutions.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.5); top: 0; left: 0;"></div>
    <div class="container text-center position-relative py-5" style="z-index: 2; font-weight: 900 !important;">
        <h1 class="display-4 fw-bold text-white">{{ __('solution.main_title') }}</h1>
        <p class="text-white">{{ __('solution.main_description') }}</p>
        <div class="d-flex justify-content-center">
                    <a href="#services" class="btn btn-primary btn-lg px-4 py-2 me-3">
                        <i class="bi bi-arrow-down-circle me-2"></i>{{ __('solution.explore_services_button') }}
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="bi bi-headset me-2"></i>{{ __('solution.contact_us_button') }}
                    </a>
                </div>
    </div>
</section>




<!-- solution Section -->

<!-- solution Navigation -->
<section class="services-navigation">
    <div class="container">
        <div class="services-nav-wrapper">
            <ul class="services-nav">


                <li><a href="#hrm_solution" class="nav-link">{{ __('solution.hrm_solution') }}</a></li>
                <li><a href="#helpdesk_solution" class="nav-link">{{ __('solution.helpdesk_solution') }}</a></li>
                <li><a href="#erp_solutions" class="nav-link">{{ __('solution.erp_solutions') }} ({{ __('solution.erp_providers') }})</a></li>
                <li><a href="#cloud_offerings" class="nav-link">{{ __('solution.cloud_offerings') }} ({{ __('solution.cloud_providers') }})</a></li>
                <li><a href="#intelligent_automation_services" class="nav-link">{{ __('solution.intelligent_automation_services') }}</a></li>

                <li><a href="#banking_solutions" class="nav-link">{{ __('solution.banking_solutions') }} ({{ __('solution.banking_types') }})</a></li>
                <li><a href="#healthcare_solutions" class="nav-link">{{ __('solution.healthcare_solutions') }} ({{ __('solution.healthcare_experience') }})</a></li>
                <li><a href="#call_center_solutions" class="nav-link">{{ __('solution.call_center_solutions') }}</a></li>
                <li><a href="#telecom_services" class="nav-link">{{ __('solution.telecom_services') }}</a></li>
              
                <li><a href="#crm_and_contact_centers" class="nav-link">{{ __('solution.crm_and_contact_centers') }}</a></li>
                <li><a href="#fraud_and_compliance" class="nav-link">{{ __('solution.fraud_and_compliance') }}</a></li>
                <li><a href="#data_analytics_and_lake" class="nav-link">{{ __('solution.data_analytics_and_lake') }}</a></li>
                <li><a href="#payment_gateway" class="nav-link">{{ __('solution.payment_gateway') }}</a></li>
                <li><a href="#api_governance" class="nav-link">{{ __('solution.api_governance') }}</a></li>
                <li><a href="#bpm_rpa" class="nav-link">{{ __('solution.bpm_rpa') }}</a></li>
                <li><a href="#ai_chatbots" class="nav-link">{{ __('solution.ai_chatbots') }}</a></li>
            
            </ul>
        </div>
    </div>
</section>


<!-- hrm_solution -->
<section id="hrm_solution" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center" style="flex-direction: row; !important">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/gear-icon.svg') }}" alt="HRM Solution" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOSAxMC4zYy0uNS0uNS0xLjUtMS0yLjUtLjEtLjUuNC0xLjYgMS0yIC4xLTIuMSAwLTMtMS41LTMtMi41QzEuNSA0LjcgNC44IDIgNi41IDJjMS44IDAgNSAzLjYgNS40IDYuMi4xIDEtLjYgMi4yLTIuOSAyLjF6TTYuNSA1YzEuMSAwIDIgLjkgMiAycy0uOSAyLTIgMi0yLS45LTItMiAuOS0yIDItMnoiLz48cGF0aCBkPSJNNCAzLjVjLTEuMSAwLTIgLjktMiAydjdDMiAxMy42IDIuNCAxNCAzIDE0aDEwYy42IDAgMS0uNCAxLTEuNXYtN2MwLTEuMS0uOS0yLTItMkgxMGMtLjEgMC0uMy0uMS0uMy0uM2wtLjMtLjhjLS4xLS4yLS40LS40LS43LS40SDcuM2MtLjMgMC0uNi4yLS43LjRsLS4zLjhjMCAuMi0uMi4zLS4zLjNtMyAxMUgzYy0xLjEgMC0yLS45LTItMlY1LjVjMC0xLjEuOS0yIDItMmg0LjMuNC4zYy4yIDAgLjQuMS40LjNsLjMuN2MuMi41LjcuNyAxLjEuN2g0LjFjMS4xIDAgMiAuOSAyIDJWMTIuNWMwIDEuMS0uOSAyLTIgMkg3Ii8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.hrm_solution') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                             {{ __('solution.hrm_solution_description') }}
                        </p>
                         <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.hrm_feature_1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.hrm_feature_2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.hrm_feature_3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="hrm_solution">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/hrm.jpg') }}" alt="{{ __('solution.hrm_solution') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik02LjUgN2MxLjEgMCAyLS45IDItMnMtLjktMi0yLTItMiAuOS0yIDIgLjkgMiAyIDJ6bTAgMmMtMi4xIDAtNi41IDEuMS02LjUgMy4zVjE0aDEzdi0xLjdDMTMgMTAuMSA4LjYgOSA2LjUgOXoiLz48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- helpdesk_solution -->
<section id="helpdesk_solution" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/headset-icon.svg') }}" alt="Helpdesk Solution" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxYTUgNSAwIDAgMC01IDV2MWgyYzAgLjU1LjQ1IDEgMSAxaDRjLjU1IDAgMS0uNDUgMS0xaDJWNmE1IDUgMCAwIDAtNS01ek0zIDdjMC0uNTUuNDUtMSAxLTFoMXYzSDRjLS41NSAwLTEtLjQ1LTEtMVY3em0yLTFoNnYyYzAgLjU1LS40NSAxLTEgMUg2Yy0uNTUgMC0xLS40NS0xLTFWNnptNyAwaDFjLjU1IDAgMSAuNDUgMSAxdjFjMCAuNTUtLjQ1IDEtMSAxaC0xVjZ6Ii8+PHBhdGggZD0iTTEgMTUuNVYxMWMwLTEuMS45LTIgMi0yaDFWOGgydjNoOFY4aDJ2MWgxYzEuMSAwIDIgLjkgMiAydjQuNWMwIC4yOC0uMjIuNS0uNS41aC0yYy0uMjggMC0uNS0uMjItLjUtLjVWMTJoLTFjMCAyLjIxLTEuNzkgNC00IDRzLTQtMS43OS00LTRIM3YzLjVjMCAuMjgtLjIyLjUtLjUuNWgtMmMtLjI4IDAtLjUtLjIyLS41LS41eiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.helpdesk_solution') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.helpdesk_solution_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.helpdesk_feature_1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.helpdesk_feature_2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.helpdesk_feature_3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="helpdesk_solution">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/helpdesk.jpg') }}" alt="{{ __('solution.helpdesk_solution') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDBDMy42IDAgMCAzLjYgMCA4YzAgNC40IDMuNiA4IDggOHM4LTMuNiA4LThjMC00LjQtMy42LTgtOC04em0uOS4yYzMuNCAwIDYuMiAyLjQgNi45IDUuNS0yLjEtLjUtNC42LTEtNy03LjFDOS4xLjMgOS40LjIgOS43LjJoLS44ek03LjkgOS4xbC0xIDJjLS4xLjItLjMuMy0uNS4zaC0uMWMtLjItLjEtLjQtLjMtLjQtLjZ2LS45SDQuMmMtLjMgMC0uNS0uMi0uNS0uNSAwLS4yLjEtLjMuMy0uNGwyLS45Yy4xLS4xLjMtLjEuNC0uMWguOGMuMiAwIC41LjIuNS41djEuNmwuMi0uNGMuMS0uMi4zLS4zLjUtLjNoLjFjLjIuMS4zLjMuNC42eiI+PC9wYXRoPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- erp_solutions -->
<section id="erp_solutions" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/erp-icon.svg') }}" alt="ERP Solutions" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMCAxaDl2M0gwek0wIDZoOXYzSDB6TTAgMTFoOXYzSDB6TTExIDFoNHYzaC00ek0xMSA2aDR2M2gtNHpNMTEgMTFoNHYzaC00eiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.erp_solutions') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                             {{ __('solution.erp_solutions_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.erp_feature_1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.erp_feature_2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.erp_feature_3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="erp_solutions">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/erp.jpg') }}" alt="{{ __('solution.erp_solutions') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik00IDFjMC0uNTUuNDUtMSAxLTFoNmMuNTUgMCAxIC40NSAxIDFzLS40NSAxLTEgMUg1Yy0uNTUgMC0xLS40NS0xLTF6bS0yIDJjMC0uNTUuNDUtMSAxLTFoMTBjLjU1IDAgMSAuNDUgMSAxcy0uNDUgMS0xIDFIM2MtLjU1IDAtMS0uNDUtMS0xem0xIDJIMmMtMS4xIDAtMiAuOS0yIDJ2NmMwIDEuMS45IDIgMiAyaDEyYzEuMSAwIDItLjkgMi0yVjdjMC0xLjEtLjktMi0yLTJIM3ptMSAyaDR2Mmg0VjdINHYyek00IDEwaDF2MUg0di0xem0yIDB2MWgxdi0xSDZ6bTItMXYyaDJWOUg4em0tNCAwaDFWOEg0djF6Ij48L3BhdGg+PC9zdmc+'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cloud_offerings -->
<section id="cloud_offerings" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/cloud-icon.svg') }}" alt="Cloud Offerings" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTMuOTEgNi43NWMtLjM0LTMuNDMtMy41LTQuNTQtMy41LTQuNTRDNy40Ni40NSA0LjMgMi45OCA0LjMgMi45OGMtMS41Ny0uMzctMi42Mi42Ni0yLjYyLjY2QTMuMjQgMy4yNCAwIDAgMCAwIDYuNzVjMCAxLjc5IDEuNDQgMy4yMyAzLjIxIDMuMjNoMi40M2MuMSAwIC4yLjA2LjI3LjEzLjA4LjA5LjEzLjIuMTMuMzN2LjgyYzAgLjI0LjIuNDQuNDQuNDRoMS4yYy4yNCAwIC40My0uMi40My0uNDR2LS44MmMwLS4xMy4wNS0uMjQuMTMtLjMzLjA4LS4wNy4xNy0uMTMuMjctLjEzaDIuMzJjMS43NyAwIDMuMi0xLjQ0IDMuMi0zLjIzeiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.cloud_offerings') }} </h2>
                        <p>({{ __('solution.cloud_providers') }})</p>
                    </div>
                    <div class="services-body">
                        <p>
                             {{ __('solution.cloud_offerings_description') }}

                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.cloud_feature_1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.cloud_feature_2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.cloud_feature_3') }}</span>
                            </li>
                        </ul>
                        
                        <a href="" class="service-link learn-more-btn" data-solution="cloud_offerings">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/cloud.jpg') }}" alt="{{ __('solution.cloud_offerings') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik00LjQgMy41Yy0uNzYgMC0xLjUuMjQtMi4xLjcxYTMuMzUgMy4zNSAwIDAgMC0xLjQgMi43MkEzLjM1IDMuMzUgMCAwIDAgMi4zIDkuNjVjLjYuNDcgMS4zNC43MSAyLjEuNzFoNy4xNGMuNTcgMCAxLjEzLS4xNSAxLjYyLS40NGEzLjI2IDMuMjYgMCAwIDAgMS4xOC0xLjE3QTMuMTkgMy4xOSAwIDAgMCAxNC40OSA3YzAtLjYyLS4xNy0xLjIzLS40OC0xLjc2YTMuMjYgMy4yNiAwIDAgMC0xLjE4LTEuMTdjLS40OS0uMjktMS4wNS0uNDQtMS42Mi0uNDRoLS4yM0EzLjc2IDMuNzYgMCAwIDAgOS43IDIuMTRhMy4zNiAzLjM2IDAgMCAwLTEuOTQtMS4xNCAzLjM4IDMuMzggMCAwIDAtMi4yLjM0Yy0uNjcuMzctMS4xNSAxLTEuMzggMS43Mi0uMDMuMTQuMDUuMjYuMi4zLjE0LjA0LjI5LS4wNS4zMi0uMTguMi0uNjUuNi0xLjEgMS4xOC0xLjQuNTctLjMzIDEuMjMtLjQgMS44OC0uMjdhMi44OCAyLjg4IDAgMCAxIDEuNjQuOTdjLjM1LjQyLjU4LjkzLjY3IDEuNDYuMDMuMi4yLjIuMjcuMi4wOC0uMDMuMTItLjExLjExLS4ybC0uMDMtLjE4Yy0uMDMtLjE3LjE1LS4yOC4yNy0uMjRoLjU0Yy40OSAwIC45Ny4xMiAxLjM4LjM4LjQxLjI1LjczLjYuOTUgMS4wMi4yMS40My4zMy45Mi4zMyAxLjQuMDEuNDktLjEuOTctLjMyIDEuNC0uMjEuNDMtLjU0Ljc4LS45NCAxLjAzLS40MS4yNS0uODkuMzgtMS4zOC4zOEg0LjM5Yy0uNjUgMC0xLjI5LS4yLTEuOC0uNmEzLjAyIDMuMDIgMCAwIDEtMS4xOS0xLjYgM2E0LjUzIDQuNTMgMCAwIDEgMC0yLjQyYy4yNi0uNzguNzYtMS40NSAxLjQ0LTEuOUEzLjcyIDMuNzIgMCAwIDEgNC45IDMuOThuLS41eiI+PC9wYXRoPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- intelligent_automation_services -->
<section id="intelligent_automation_services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/robot-icon.svg') }}" alt="Intelligent Automation Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNiAwYzAgMi4yLTEuOCAzLjktNCAzLjl2MS4xaC0uN3Y3aDEuMnYtLjNjMC0uNS4zLS45LjgtMSAuNCAwIC44LjUuOCAxdjkuM2gyLjdWMTJoLjNjLjIgMCAuNC4yLjQuNXYxLjVoMi44di0zYzAtLjcuNS0xLjMgMS4yLTEuNmEzLjUgMy41IDAgMCAxLS45LTIuMWgxLjhWOWMwIC41LjQgMSAuOSAxaC40Yy41IDAgLjktLjQuOS0xVjIuMmMwLS41LS4zLS45LS44LS45aC0uNGMtLjYgMC0uOS40LS45LjlWNGgtMS44YzAtMS4xLS40LTIuMS0xLTIuOFYwSDZ6bTAgOGMwIC42LS40IDEtMSAxcy0xLS40LTEtMS40LTEtMSAxLS4zTDYgOHoiLz48cGF0aCBkPSJNOS41IDJjMCAxLjEtLjkgMi0yIDJzLTItLjktMi0yIC45LTIgMi0yIDIgLjkgMiAyeiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.intelligent_automation_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                             {{ __('solution.intelligent_automation_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.intelligent_automation_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.intelligent_automation_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.intelligent_automation_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="intelligent_automation_services">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/automation.jpg') }}" alt="{{ __('solution.learn_more_button') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0wIDBIMTZWMTZIMHoiLz48cGF0aCBkPSJNNiA5LjVhLjUuNSAwIDAgMSAuNS0uNWguNWEuNS41IDAgMCAxIC41LjV2LjVhLjUuNSAwIDAgMS0uNS41SDYuNWEuNS41IDAgMCAxLS41LS41di0uNXptMyAwYS41LjUgMCAwIDEgLjUtLjVoLjVhLjUuNSAwIDAgMSAuNS41di41YS41LjUgMCAwIDEtLjUuNUg5LjVhLjUuNSAwIDAgMS0uNS0uNXYtLjV6bS0zIDNhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjV6bTAgMmEuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNXoiIGZpbGw9IiMwZDZlZmQiLz48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- banking_solutions -->
<section id="banking_solutions" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/bank-icon.svg') }}" alt="Banking Solutions" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAwbDggMkg4TDAgMnptMCAzLjV2Mi42NWMuNjUuMTcgMS4yLjQ0IDEuNjMuOTYuNDMuNTIuNjggMS4xNy42OCAxLjg5IDAgMS4wMS0uNjggMS44NS0xLjU4IDIuMzMuMjUuMzUuNDQuNzguNDQgMS4yNnYxLjQxSDh6bS0xIDAgNyAwdjJIMmMwLS45NiAwLTIgMC0ySDZ2Mi42NWwtMS41MiAxTDYgOC45MlYzLjV6Ii8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.banking_solutions') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.banking_solutions_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.banking_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.banking_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.banking_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="banking_solutions">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/banking_solution.jpg') }}" alt="{{ __('solution.banking_solutions_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDFhNyA3IDAgMCAwLTUuOCAxMC45TDggMTZsNS44LTQuMUE3IDcgMCAwIDAgOCAxem0tLjUgM2gxVjZoLTF6bTAgMi41aDFWMTBoLTF6Ii8+PC9zdmc+'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- healthcare_solutions -->
<section id="healthcare_solutions" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/healthcare-icon.svg') }}" alt="Healthcare Solutions" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxNXYtM0g1di0yaDN2LTNoMnYzaDN2MmgtM3YzSDh6Ii8+PHBhdGggZD0iTTQgMWg4YzEuMSAwIDIgLjkgMiAydjEwYzAgMS4xLS45IDItMiAySDRjLTEuMSAwLTItLjktMi0yVjNjMC0xLjEuOS0yIDItMnptLjUgM2MtLjggMC0xLjUuNy0xLjUgMS41UzMuNyA3IDQuNSA3IDYgNi4zIDYgNS41IDUuMyA0IDQuNSA0em03IDBjLS44IDAtMS41LjctMS41IDEuNVMxMC43IDcgMTEuNSA3IDEzIDYuMyAxMyA1LjUgMTIuMyA0IDExLjUgNHoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('solution.healthcare_solutions') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.healthcare_solutions_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.healthcare_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.healthcare_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.healthcare_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="healthcare_solutions">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/healthcare.jpg') }}" alt="{{ __('solution.healthcare_solutions_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDJhNiA2IDAgMSAwIDAgMTJBNiA2IDAgMCAwIDggMnptMCAzYzAgLjYtLjQgMS0xIDFINnYyaDFjLjYgMCAxIC40IDEgMXYxaDJ2LTFjMC0uNi40LTEgMS0xaDFWNmgtMWMtLjYgMC0xLS40LTEtMVY0SDhWNXoiLz48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- call_center_solutions -->
<section id="call_center_solutions" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/call-center-icon.svg') }}" alt="Call Center Solutions" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTEgNmMwLS41NS0uNDUtMS0xLTFzLTEgLjQ1LTEgMXYyYzAgLjU1LjQ1IDEgMSAxczEtLjQ1IDEtMVY2em0yLTJjLS41NSAwLTEgLjQ1LTEgMXYyYzAgLjU1LjQ1IDEgMSAxczEtLjQ1IDEtMVY1YzAtLjU1LS40NS0xLTEtMXptLTkgM2MwIC41NS40NSAxIDEgMXMxLS40NSAxLTFWNWMwLS41NS0uNDUtMS0xLTFzLTEgLjQ1LTEgMXYyem00LTJjLS41NSAwLTEgLjQ1LTEgMXYyYzAgLjU1LjQ1IDEgMSAxczEtLjQ1IDEtMVY1YzAtLjU1LS40NS0xLTEtMXptNCA2SDJjLTEuMSAwLTIgLjktMiAydjJoMTZ2LTJjMC0xLjEtLjktMi0yLTJ6Ii8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.call_center_solutions') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.call_center_solutions_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.call_center_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.call_center_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.call_center_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="call_center_solutions">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/call_centre.jpg') }}" alt="{{ __('solution.call_center_solutions_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xMS4yNSA0YzAgLjQxLS4zNC43NS0uNzUuNzVoLTVjLS40MSAwLS43NS0uMzQtLjc1LS43NXMuMzQtLjc1Ljc1LS43NWg1Yy40MSAwIC43NS4zNC43NS43NXptMCAzYzAgLjQxLS4zNC43NS0uNzUuNzVoLTVjLS40MSAwLS43NS0uMzQtLjc1LS43NXMuMzQtLjc1Ljc1LS43NWg1Yy40MSAwIC43NS4zNC43NS43NXptMCAzYzAgLjQxLS4zNC43NS0uNzUuNzVoLTVjLS40MSAwLS43NS0uMzQtLjc1LS43NXMuMzQtLjc1Ljc1LS43NWg1Yy40MSAwIC43NS4zNC43NS43NXptLjc1IDNIMTFWMTFoMnYyaC0xeiIvPjxwYXRoIGQ9Ik0zLjUgM2gxMEE0LjUgNC41IDAgMCAxIDE4IDcuNXY1YzAgMi40OC0yLjAyIDQuNS00LjUgNC41aC0xMEE0LjUgNC41IDAgMCAxIC0xIDEyLjV2LTVDLTEgNS4wMiAxLjAyIDMgMy41IDN6bTAgMkE0LjUgNC41IDAgMCAxIDEgNi41djVjMCAuNzUuMjEgMS40Ni41OCAyLjA2bDMuNjUtMy42NWEuNzUuNzUgMCAxIDEgMS4wNiAxLjA2bC0zLjY1IDMuNjVjLjYuMzcgMS4zMS41OCAyLjA2LjU4aDEwYy43NSAwIDEuNDYtLjIxIDIuMDYtLjU4bC0zLjY1LTMuNjVhLjc1Ljc1IDAgMSAxIDEuMDYtMS4wNmwzLjY1IDMuNjVjLjM3LS42LjU4LTEuMy41OC0yLjA2di01QzE4IDUuMTIgMTYuODggNCAxNS41IDRoLTEwYy0xLjM4IDAtMi41IDEuMTItMi41IDIuNSAwIC44Mi41IDEuNTcgMS4yNSAyLjUuMzMuNDIgMS41LjgzIDIuMjUgMSAuMDguNi4xNy4xMi4yNS4xOGwzLjQ3IDIuMzFjLjI3LjE4LjU3LjI3Ljg3LjI3cy41OS0uMDkuODctLjI3bDIuODgtMi4wMWEuNzUuNzUgMCAxIDEgLjg1IDEuMjRsLTIuODggMmMtLjUuMzMtMS4wNyAuNS0xLjY1LjVzLTEuMTQtLjE3LTEuNjQtLjVMNC4yNSA3Ljk3bC0uMDktLjA2Yy0xIDAgLTIuMjQgLTQgLTIuMjUgLTQuOTEgQzMuODMgLjgyIDQuODEgLTEgNS43NS0xaDBDNS4zNS42NSA1IDEuNDcgNSAyLjVDNSA0LjQzIDYuNTcgNiA4LjUgNnMyLjUtMS41NyAyLjUtMy41QzExIDEuNDcgMTAuNjUuNjUgMTAuMjUgMGgwYy45NCAwIDEuOTIgMS44MyAxLjg0IDMuMDEtLjAxLjkxLTEgNS45LTIgNS45OWwtLjA5LjA2IC03NSAtLjVjLS41LTEtMS0yLTEtM1YzLjVDMiAyLjY3IDIuNjcgMiAzLjUgMnoiPjwvcGF0aD48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- telecom_services -->
<section id="telecom_services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/telecom-icon.svg') }}" alt="Telecom Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMS41IDFhLjUuNSAwIDAgMSAuNS41VjZoLTF2LTVBMS41IDEuNSAwIDAgMSAyLjUgMGgxMUExLjUgMS41IDAgMCAxIDE1IDEuNXY1aC0xdi01YS41LjUgMCAwIDAtLjUtLjVoLTExYS41LjUgMCAwIDAtLjUuNXptMiAyLjVhLjUuNSAwIDAgMSAuNS41djFhLjUuNSAwIDAgMS0xIDB2LTFhLjUuNSAwIDAgMSAuNS0uNXptMiAwYS41LjUgMCAwIDEgLjUuNXYxYS41LjUgMCAwIDEtMSAwdi0xYS41LjUgMCAwIDEgLjUtLjV6bTIgMGEuNS41IDAgMCAxIC41LjV2MWEuNS41IDAgMSAxLTEgMHYtMWEuNS41IDAgMCAxIC41LS41em0yIDBhLjUuNSAwIDAgMSAuNS41djFhLjUuNSAwIDAgMS0xIDB2LTFhLjUuNSAwIDAgMSAuNS0uNXptMyA1YTEgMSAwIDAgMC0xIDF2LjVhMSAxIDAgMSAwIDIgMFY5LjVhMSAxIDAgMCAwLTEtMXoiLz48cGF0aCBkPSJNMTQgOWE2IDYgMCAwIDEtMTIgMEMyLjUgOS0uNSAxMSAuMjEgMTEuNUMzLjU1IDE0IDYgMTYgOCAxNnM0LjQ1LTIgNy43OS00LjVDMTYuNSAxMSAxMy41IDkgMTQgOXptLTctM3Y0aDJWNkg3eiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.telecom_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.telecom_services_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.telecom_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.telecom_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.telecom_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="telecom_services">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/telecom.jpg') }}" alt="{{ __('solution.telecom_services_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xMiA1YzAgMi43Ni0yLjI0IDUtNSA1UzIgNy43NiAyIDVzMi4yNC01IDUtNSA1IDIuMjQgNSA1em0xIDJjMi4yMSAwIDQgMS43OSA0IDRzLTEuNzkgNC00IDRIOGMtMiAwLTMuNjItMS41My0zLjktMy41SDFjLS41NSAwLTEtLjQ1LTEtMXMuNDUtMSAxLTFoMy4xYy4yOC0xLjk3IDEuOS0zLjUgMy45LTMuNWgxem0tNyA0YzAgMS4xMS44OSAyIDIgMmgxYzEuMTEgMCAyLS44OSAyLTJzLS44OS0yLTItMkg4Yy0xLjExIDAtMiAuODktMiAyeiI+PC9wYXRoPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- crm_and_contact_centers -->
<section id="crm_and_contact_centers" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/crm-icon.svg') }}" alt="CRM and Contact Centers" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNCA4YzAgLjczLjIgMS40MS41NSAySDNhMiAyIDAgMCAxLTItMlY1YzAtMS4xLjktMiAyLTJoMTBhMiAyIDAgMCAxIDIgMnYzYTIgMiAwIDAgMS0yIDJoLTEuNDVjLjM1LS41OS41NS0xLjI3LjU1LTJDMSA0LjkgOS43MyAyIDggMnptOC01YS41LjUgMCAwIDAgLjUtLjVWMWEuNS41IDAgMCAwLS41LS41aC0xM0EuNS41IDAgMCAwIDAgMXYxLjVhLjUuNSAwIDAgMCAuNS41SDEyeiI+PC9wYXRoPjxwYXRoIGQ9Ik02IDhBMyAzIDAgMSAwIDYgMTRhMyAzIDAgMCAwIDAtNnptMCAxYTIgMiAwIDEgMSAwIDQgMiAyIDAgMCAxIDAtNHptNy41LTFhMSAxIDAgMSAwIDAgMiAxIDEgMCAwIDAgMC0yem0tMTMgMGExIDEgMCAxIDAgMCAyIDEgMSAwIDAgMCAwLTJ6Ii8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.crm_and_contact_centers') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                             {{ __('solution.crm_and_contact_centers_description') }}

                        </p>
                        
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.crm_and_contact_centers_feature_1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.crm_and_contact_centers_feature_2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.crm_and_contact_centers_feature_3') }}</span>
                            </li>
                        </ul>

                        
                        <a href="" class="service-link learn-more-btn" data-solution="crm_and_contact_centers">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/crm.jpg') }}" alt="{{ __('solution.crm_and_contact_centers') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDBjMy44NjYgMCA3IDMuMTM0IDcgN3MtMy4xMzQgNy03IDctNy0zLjEzNC03LTcgMy4xMzQtNyA3LTd6bTIuNSA0YTEuNSAxLjUgMCAxIDAgMCAzIDEuNSAxLjUgMCAwIDAgMC0zem0tNSAwYTEuNSAxLjUgMCAxIDAgMCAzIDEuNSAxLjUgMCAwIDAgMC0zem0yLjUgNWEzLjUgMy41IDAgMSAxIDAgNyAzLjUgMy41IDAgMCAxIDAtN3oiPjwvcGF0aD48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- fraud_and_compliance -->
<section id="fraud_and_compliance" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/shield-icon.svg') }}" alt="Fraud and Compliance" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAwYzUuMSAwIDguNCAxLjUgOCA0djZjMCAyLjUtMi45IDYtOCA2cy04LTMuNS04LTZWNGMwLTIuNSAzLTQgOC00em0tLjUgMTFoMWMuMjc2IDAgLjUuMjI0LjUuNXYxYS41LjUgMCAwIDEtLjUuNWgtMWEuNS41IDAgMCAxLS41LS41di0xYS41LjUgMCAwIDEgLjUtLjV6bTAgM2gxYy4yNzYgMCAuNS4yMjQuNS41VjE1YS41LjUgMCAwIDEtLjUuNWgtMWEuNS41IDAgMCAxLS41LS41di0uNWEuNS41IDAgMCAxIC41LS41em0tMi41LTNIMTBhLjUuNSAwIDAgMSAuNS41di4yNWEuNzUuNzUgMCAwIDEtLjc1Ljc1aC0yLjVhLjc1Ljc1IDAgMCAxLS43NS0uNzVWMTFhLjUuNSAwIDAgMSAuNS0uNXoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('solution.fraud_and_compliance') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.fraud_compliance_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.fraud_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.fraud_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.fraud_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="fraud_and_compliance">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/fraud_and_compliance_solution.jpeg') }}" alt="{{ __('solution.fraud_and_compliance') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik04IDBjMy44NjYgMCA3IDMuMTM0IDcgN3MtMy4xMzQgNy03IDctNy0zLjEzNC03LTcgMy4xMzQtNyA3LTd6bTAgM2ExIDEgMCAwIDAtMSAxdjVoLTFhMSAxIDAgMCAwIDAgMmg0YTEgMSAwIDEgMCAwLTJIOXYtNGExIDEgMCAwIDAtMS0xeiI+PC9wYXRoPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- data_analytics_and_lake -->
<section id="data_analytics_and_lake" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/analytics-icon.svg') }}" alt="Data Analytics and Lake" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMCAwaDR2MTZIMHptNiAzaDR2MTNINnptNiA0aDR2OWgtNHoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('solution.data_analytics_and_lake') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>

                            {{ __('solution.data_analytics_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.data_analytics_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.data_analytics_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.data_analytics_feature3') }}</span>
                            </li>
                        </ul>

                        <a href="" class="service-link learn-more-btn" data-solution="data_analytics_and_lake">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/data_analytics_lake.jpeg') }}" alt="{{ __('solution.data_analytics_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik00LjUgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41Wm00IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVaIi8+PHBhdGggZD0iTTAgMTFhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVptNCAtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVoiLz48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- payment_gateway -->
<section id="payment_gateway" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/payment-icon.svg') }}" alt="Payment Gateway" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMCAzYTEgMSAwIDAgMSAxLTFoMTRhMSAxIDAgMCAxIDEgMXYyYTAgMCAwIDAgMSAwIDF2OGExIDEgMCAwIDEtMSAxSDFhMSAxIDAgMCAxLTEtMVYzeiIvPjxwYXRoIGQ9Ik0xNSA1djdIOFY1aDd6TTE0IDRINXY5aDlWNHptLTggOGEuNS41IDAgMSAwIDAgMSAuNS41IDAgMCAwIDAtMXptMi41LjVhLjUuNSAwIDEgMSAxIDAgLjUuNSAwIDAgMS0xIDB6TTIgNGgzVjNIMnYxeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.payment_gateway') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.payment_gateway_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.payment_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.payment_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.payment_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="payment_gateway">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/payment_gateway_solution.jpeg') }}" alt="{{ __('solution.payment_gateway_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0wIDRhMiAyIDAgMCAxIDItMmgxMmEyIDIgMCAwIDEgMiAydjhhMiAyIDAgMCAxLTIgMkgyYTIgMiAwIDAgMS0yLTJWNHptMiAwdjhhMSAxIDAgMCAwIDEgMWgxMmExIDEgMCAwIDAgMS0xVjRhMSAxIDAgMCAwLTEtMUgzYTEgMSAwIDAgMC0xIDF6bTEgN2gxYS41LjUgMCAwIDAgLjUtLjVWOC41YS41LjUgMCAwIDAtLjUtLjVIM1Y3aDEuNUEuNS41IDAgMCAwIDUgNi41VjUuNWEuNS41IDAgMCAwLS41LS41aC0yYS41LjUgMCAwIDAtLjUuNXYyYS41LjUgMCAwIDAgLjUuNUgzdjFIMmEuNS41IDAgMCAwLS41LjV2MWEuNS41IDAgMCAwIC41LjVoMXpNMTQgN0g4LjVhLjUuNSAwIDAgMCAuNS41djVhLjUuNSAwIDAgMC0uNS41aDVhLjUuNSAwIDAgMCAuNS0uNXYtNWEuNS41IDAgMCAwLS41LS41eiI+PC9wYXRoPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- api_governance -->
<section id="api_governance" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/api-icon.svg') }}" alt="API Governance" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTAgMmExIDEgMCAwIDEgMS0xaDRhMSAxIDAgMCAxIDEgMXY0YTEgMSAwIDAgMS0xIDFoLTFWNGExIDEgMCAwIDAtMS0xaC0zVjJ6TTIgMTBhMiAyIDAgMCAxIDItMmg0djJINnYyaDJ2Mmg0YTIgMiAwIDAgMSAtMiAySDZhMiAyIDAgMCAxLTItMnYtMWExIDEgMCAwIDAgMC0ydi0xeiIvPjxwYXRoIGQ9Ik04IDhoMnYySDhaIi8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.api_governance') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.api_governance_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.api_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.api_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.api_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="api_governance">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/api_governance_solution.jpeg') }}" alt="{{ __('solution.api_governance_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNCAxYzAgMS4xLS45IDItMiAydjEwaC0uNVY1aC0xdjguNWgtMVY4aC0xdjUuNWgtMVYzLjVoLTF2MTBoLTFWM2gtMUMzLjkgMyAzIDIuMSAzIDFjMC0uNTUuNDUtMSAxLTFoOWMuNTUgMCAxIC40NSAxIDF6Ii8+PC9zdmc+'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bpm_rpa -->
<section id="bpm_rpa" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/workflow-icon.svg') }}" alt="BPM & RPA" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNiAwYTEgMSAwIDAgMC0xIDF2LjVBMS41IDEuNSAwIDAgMCAzLjUgM0gyYTIgMiAwIDAgMC0yIDJ2Mkg0YTIgMiAwIDAgMSAyIDJ2NGEyIDIgMCAwIDEgLTIgMkgwdjJhMiAyIDAgMCAwIDIgMmgxLjVhMS41IDEuNSAwIDAgMCAxLjUgMS41VjE2YTEgMSAwIDEgMCAyIDB2LS41QTEuNSAxLjUgMCAwIDAgOC41IDEzSDEwYTIgMiAwIDAgMCAyLTJoMWEzIDMgMCAwIDAgMy0zVjVhMyAzIDAgMCAwLTMtM2gtMXYzYTMgMyAwIDAgMS0zIDNINXYyYTEgMSAwIDEgMCAwIDJ2MmgzLjVhMS41IDEuNSAwIDAgMSAxLjUgMS41di41YTEgMSAwIDEgMCAyIDB2LS41YTEuNSAxLjUgMCAwIDEgMS41LTEuNUgxNXYtMmgtMy41YTEuNSAxLjUgMCAwIDEtMS41LTEuNVY5YTEgMSAwIDEgMCAwLTJWNWgxLjVBMS41IDEuNSAwIDAgMSAxMyA2LjV2LjVhMSAxIDAgMSAwIDIgMFY2YTIgMiAwIDAgMC0yLTJoLTEuNUExLjUgMS41IDAgMCAwIDEwIDIuNVYyYTEgMSAwIDAgMC0xLTFoMVYwSDZ6Ii8+PC9zdmc+'">
                        </div>
                        <h2>{{ __('solution.bpm_rpa') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.bpm_rpa_description') }}
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.bpm_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.bpm_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.bpm_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="bpm_rpa">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/bpm_rpa_solution.jpeg') }}" alt="{{ __('solution.bpm_rpa_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0zLjUgMGExIDEgMCAwIDAtMSAx2MTRhMSAxIDAgMCAwIDIgMFYxYTEgMSAwIDAgMC0xLTFabTkgMTJhMSAxIDAgMCAwLTEgMXYyYTEgMSAwIDAgMCAyIDB2LTJhMSAxIDAgMCAwLTEtMVptLTMtM2ExIDEgMCAwIDAtMSAxdjVhMSAxIDAgMCAwIDIgMFYxMGExIDEgMCAwIDAtMS0xWm0tMy0zYTEgMSAwIDAgMC0xIDF2OGExIDEgMCAwIDAgMiAwVjdhMSAxIDAgMCAwLTEtMVptOSAxLjVhMSAxIDAgMCAwLTEgMXY2LjVhMSAxIDAgMCAwIDIgMFY4LjVhMSAxIDAgMCAwLTEtMVoiLz48L3N2Zz4='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ai_chatbots -->
<section id="ai_chatbots" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/chatbot-icon.svg') }}" alt="AI Chatbots" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxNWMtMS45MyAwLTMuNS0xLjU3LTMuNS0zLjVWNS41QzQuNSAzLjU3IDYuMDcgMiA4IDJzMy41IDEuNTcgMy41IDMuNXY2YzAgMS45My0xLjU3IDMuNS0zLjUgMy41em0wLTJjLjgzIDAgMS41LS42NyAxLjUtMS41VjUuNUExLjUgMS41IDAgMCAwIDcuOTkgNCA2LjUgNi41IDAgMCAwIDYuNSA1LjV2NmMwIC44My42NyAxLjUgMS41IDEuNXpNMTEgMHYxLjRjMi43OCAxLjMgNCAyLjkyIDQgNC44NnY2LjMzYzAgMS41NC0uNSAyLjctMS40NSAzLjQyLS42NS40NC0yLjA0LjY4LTMuNS42OEwxMCAxNGMxLjAzIDAgMS45NC0uMjMgMi40LS43LjQ4LS40OC43Mi0xLjI1LjcyLTIuMzFWNi4yMWMwLTEuNTMtLjgtMi43Ny0yLjI1LTMuNzNBOC43IDguNyAwIDAgMCAxMSA0YTUuODIgNS44MiAwIDAgMC0zLjk2LTEuOUEzLjk5IDMuOTkgMCAwIDAgMyA2djZjMCAxLjU1IDEuMDUgMi44MSAzLjEyIDMuODRMNiAxNGMtLjgzLS4zLTEuNDUtLjY4LTEuODctMS4xNUEzLjg5IDMuODkgMCAwIDEgMyAxMFY2YzAtMS45NiAxLjA5LTMuMzYgMy0zLjg2VjBIMyI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                        <h2>{{ __('solution.ai_chatbots') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            {{ __('solution.ai_chatbots_description') }}
                        </p>
                         <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.chatbot_feature1') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.chatbot_feature2') }}</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>{{ __('solution.chatbot_feature3') }}</span>
                            </li>
                        </ul>
                        <a href="" class="service-link learn-more-btn" data-solution="ai_chatbots">{{ __('solution.learn_more_button') }}</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('uploads/ai_chatbots_solution.jpeg') }}" alt="{{ __('solution.ai_chatbots_img_alt') }}" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNCA5YTEgMSAwIDAgMC0xLTFIN3YyaDZhMSAxIDAgMCAwIDEtMXptLTEtNWExIDEgMCAwIDAtMSAxdjFoMlY1YTEgMSAwIDAgMC0xLTF6bS03IDNWM2ExIDEgMCAwIDEgMS0xaDVhMyAzIDAgMSAxIDAgNkg2em0tNSA0YTEgMSAwIDAgMSAxLTFoNXYySDJhMSAxIDAgMCAxLTEtMXptMS01YTEgMSAwIDAgMC0xIDF2MWgyVjdhMSAxIDAgMCAwLTEtMXoiPjwvcGF0aD48L3N2Zz4='">
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
    background-color: rgba(13, 110, 253, 0.1);
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
                <h3 class="mb-4">{{ __('solution.ready_to_transform') }}</h3>
                <p class="mb-4">{{ __('site.cta_description') }}</p>
                <a href="#contact" class="btn btn-light btn-lg">
                    <i class="bi bi-envelope me-2"></i>{{ __('site.contact_us') }}
                </a>
            </div>
        </div>
    </div>
</section>


@endsection


