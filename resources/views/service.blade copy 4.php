@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('site.page_title'))

@section('content')


<!-- Hero Section -->
<section class="services-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">


                <h1 class="page-title">{{ __('site.main_title') }}</h1>
                <p class="lead fs-5 mb-5">{{ __('site.main_description') }}</p>

                 <div class="d-flex justify-content-center">
                    <a href="#services" class="btn btn-primary btn-lg px-4 py-2 me-3">
                        <i class="bi bi-arrow-down-circle me-2"></i>Explore Services
                    </a>
                    <a href="#contact" class="btn btn-outline-primary btn-lg px-4 py-2">
                        <i class="bi bi-headset me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->

<!-- Services Navigation -->
<section class="services-navigation">
    <div class="container">
        <div class="services-nav-wrapper">
            <ul class="services-nav">
                <li><a href="#it-managed-services" class="nav-link">{{ __('site.it_managed_services') }}</a></li>
                <li><a href="#cloud-transformation-services" class="nav-link">{{ __('site.cloud_transformation_services') }}</a></li>
                <li><a href="#data-analytics-services" class="nav-link">{{ __('site.data_analytics_services') }}</a></li>
                <li><a href="#it-training-services" class="nav-link">{{ __('site.it_training_services') }}</a></li>
                <li><a href="#ai-services" class="nav-link">{{ __('site.ai_services') }}</a></li>
                <li><a href="#domain-services" class="nav-link">{{ __('site.domain_services') }}</a></li>
                <li><a href="#operating-model-services" class="nav-link">{{ __('site.operating_model_services') }}</a></li>
                <li><a href="#cybersecurity" class="nav-link">{{ __('site.cybersecurity') }}</a></li>
                <li><a href="#resource-outsourcing-services" class="nav-link">{{ __('site.resource_outsourcing_services') }}</a></li>
                <li><a href="#it-infrastructure-services" class="nav-link">{{ __('site.it_infrastructure_services') }}</a></li>
                <li><a href="#application-services" class="nav-link">{{ __('site.application_services') }}</a></li>
                <li><a href="#strategy-consulting-services" class="nav-link">{{ __('site.strategy_consulting_services') }}</a></li>
                <li><a href="#intelligent-automation-services" class="nav-link">{{ __('site.intelligent_automation_services') }}</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- IT Managed Services -->
<section id="it-managed-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="services-header">
                        <div class="icon-box">
                            <img src="{{ asset('icons/gear-icon.svg') }}" alt="IT Managed Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS41IDIuMTNhMSAxIDAgMCAxIDEuOTkgMGwuMzggMS4yOEEzLjAxIDMuMDEgMCAwIDEgMTMuMTggNWw1LjgxLjU0YTEgMSAwIDAgMSAuNzkgMS42NmwtLjk5IDEuMDZjLjA1LjE1LjA5LjMxLjEzLjQ3bC44MSAxLjQ1YTEgMSAwIDAgMS0xLjExIDEuNDhsLTEuMi0uMmEzLjAxIDMuMDEgMCAwIDEtMy45MSAxLjYxbC0uNjkgMS40M2ExIDEgMCAwIDEtMS43NS4yOUwtOCA5LjVhMSAxIDAgMCAxLTEuOTkgMGwtLjM4LTEuMjhBMy4wMSAzLjAxIDAgMCAxIDMuODIgN2wtLjgxLS41NGExIDEgMCAwIDEtLjc5LTEuNjZsLjk5LTEuMDZhMy4zMyAzLjMzIDAgMCAxLS4xMy0uNDdMMS4xIDEuODJBMSAxIDAgMCAxIDIuMjEuMzRsMSAuMmEzLjAxIDMuMDEgMCAwIDEgMy45MS0xLjYxbC42OS0xLjQzQTEgMSAwIDAgMSA5LjUgMi4xM3pNOCA5YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiLz48L3N2Zz4='">
                        </div>
                        <h2>{{ __('site.it_managed_services') }}</h2>
                    </div>
                    <div class="services-body">
                        <p>
                            Comprehensive IT management solutions that optimize your technology infrastructure while reducing costs. Our proactive monitoring, maintenance, and support ensure maximum uptime and efficiency.
                        </p>
                        <ul class="features-list">
                            <li>
                                <span class="check-icon"></span>
                                <span>24/7 System Monitoring</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>Help Desk Support</span>
                            </li>
                            <li>
                                <span class="check-icon"></span>
                                <span>Network Management</span>
                            </li>
                        </ul>
                        <a href="" class="service-link">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('images/it-managed-services.jpg') }}" alt="IT Managed Services" class="img-fluid rounded service-image" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik02LjUgNy41YS41LjUgMCAwIDEgMSAwdjFhLjUuNSAwIDAgMS0xIDB2LTF6TTcgMTBhLjUuNSAwIDAgMSAuNS41di4xYS41LjUgMCAwIDEtMSAwdi0uMWEuNS41IDAgMCAxIC41LS41ek04LjUgNWEuNS41IDAgMCAxIDEgMHYuMWEuNS41IDAgMSAxLTEgMFY1em0xIDFhLjUuNSAwIDAgMSAuNS41djFhLjUuNSAwIDAgMS0xIDB2LTFhLjUuNSAwIDAgMSAuNS0uNXptLTMgLjVhLjUuNSAwIDAgMSAxIDB2LjFhLjUuNSAwIDAgMS0xIDB2LS4xem0xLTFhLjUuNSAwIDAgMSAuNS41djJhLjUuNSAwIDAgMS0xIDB2LTJhLjUuNSAwIDAgMSAuNS0uNXptMSA0LjVhMS41IDEuNSAwIDAgMS0zIDB2LjFhMS41IDEuNSAwIDAgMSAzIDB2LS4xeiIvPjxwYXRoIGQ9Ik0xNC40IDE0YTQgNCAwIDAgMS03LjggMEgyLjFhMSAxIDAgMCAxLS45OC0uOGwtMS0yYTEgMSAwIDAgMSAwLS43bC4xNS0uMjlBMSAxIDAgMCAxIDEgOS4yVjhhMiAyIDAgMCAxIDEuMDktMS43OWwuMTYtLjA4QTIgMiAwIDAgMSA0LjA5IDZIMmExIDEgMCAwIDEgMC0yaDEyYTEgMSAwIDAgMSAwIDJoLTIuMDlhMiAyIDAgMCAxIDEuODQuMS4xNkEyIDIgMCAwIDEgMTUgOHYxLjJhMSAxIDAgMCAxIC43My45MmwuMTUuMjlhMSAxIDAgMCAxIDAgLjdsLTEuMDAyIDJhMSAxIDAgMCAxLS45NzguOEg3LjR6TTEzIDhWNS45YTEgMSAwIDAgMC0uNDUtLjgzbC0uMTYtLjA4YTEgMSAwIDAgMC0uNzctLjA5bC0uNTMuMTZhMS4zNDggMS4zNDggMCAwIDEtMS43LTEuNjIuNS41IDAgMCAwLS40OC0uNjRIOGEuNS41IDAgMCAwLS40Ny4zTDcuNCA0LjIzYTEuMzQ3IDEuMzQ3IDAgMCAxLTIuNTQtLjAybC0uMTQtLjQyYS41LjUgMCAwIDAtLjQ3LS4zSDE2Ljk2YS41LjUgMCAwIDAtLjQ4LjY0djQuMjZNOCAxNGMxLjEgMCAyLS42MyAyLjQ2LTEuNjVhLjUuNSAwIDAgMCAuMDktLjQ3bC0uNDMtMS42NWEuNS41IDAgMCAwLS42My0uMzNMMTAuNSAxMGEuNS41IDAgMCAwLS4zNC42M2wuNDMgMS42NS0uMDUtLjA1QzEwLjE3IDEzLjA0IDkuMTQgMTMuNjQgOCAxMy42NGMtMS4xNCAwLTIuMTctLjYxLTIuNTQtMS40MWwtLjA1LjA1LjQzLTEuNjVhLjUuNSAwIDAgMC0uMzQtLjYzbC0xLjAxLS4yNWEuNS41IDAgMCAwLS42My4zM2wtLjQzIDEuNjVhLjUuNSAwIDAgMCAuMDkuNDdDNC4wMiAxMy4zNiA1LjkgMTQgOCAxNHptLTYuNjMtLjk5YS41LjUgMCAwIDAtLjI4LS4xMUgyLjFsMS0uMTNhLjUuNSAwIDAgMCAuNDUtLjZsLS4yNS0uOTYuMzEuMTVhLjUuNSAwIDAgMCAuNzMtLjQ0VjhhMSAxIDAgMCAxIC41NC0uODlsLjE2LS4wOGExIDEgMCAwIDEgLjg3LS4wMWwuNTMuMTZhMSAxIDAgMCAwIDEuMjUtMS4yNWwtLjE0LS40MmEuNS41IDAgMCAwLS45NC0uMDlMMTAuNTUgM2ExLjUgMS41IDAgMCAwLTIuMTIuMDlsLS4xNC40MmExIDEgMCAwIDAgLjYyIDEuMjZsLjUzLS4xNmExIDEgMCAwIDEgMS4wMy4wN2wxLjY4LjgyYTEgMSAwIDAgMSAuNTQuODlWOGEuNS41IDAgMCAwIC43My40NGwuMzEtLjE1LS4yNS45NWEuNS41IDAgMCAwIC40NS42bDEtLjEzaC0uOTlhLjUuNSAwIDAgMC0uMzkuMThsLS42My43YS41LjUgMCAwIDAgLjA2LjdsLjc1Ljc1YS41LjUgMCAwIDAgLjcxIDBsLjctLjdhLjUuNSAwIDAgMCAuMDYtLjdsLS42My0uN2EuNS41IDAgMCAwLS4zOC0uMThIOS45N2wtMSAuMTMuMjUtLjk1YS41LjUgMCAwIDAtLjQ1LS42bC0xLjA1LS4yNi0uMDQuMDFhMSAxIDAgMCAwLS43LS4xMWwtLjU0LjE3YS44NDcuODQ3IDAgMCAxLTEuMDgtLjU1bC0uMTMtLjQyYTEgMSAwIDAgMC0uNzYtLjY5bC0uNTUtLjE0YTEgMSAwIDAgMC0xLjA0LjI4eiIvPjwvc3ZnPg=='">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cloud Transformation Services -->
<section id="cloud-transformation-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/cloud-icon.svg') }}" alt="Cloud Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTMuOTEgNi43NWMtLjM0LTMuNA0zLjkxLTQuNTQtMy4zOC00LjU0QTUuMjMgNS4yMyAwIDAgMCA1LjA5IDUuMUEzLjI0IDMuMjQgMCAwIDAgMi4wNSA4LjljMCA0LjQ0IDQuMzEgMi43IDQuMzEgMi43aC4wM2MuOCAwIDIuMDMgMS4yMyAzLjA3IDEuMjNoLjM0Yy4xIDAgLjIgMCAuMy0uMi4xNS0uMS4yOC0uMjUuMzctLjQyYTEuMDIgMS4wMiAwIDAgMSAuMDUtLjAybDEuNDMtLjljLjI1LS4xNC40NS0uMzcuNTgtLjYzLjEyLS4yNS4yLS41NC4yLS43NyAwLS4wNSAwLS4xIDAtLjE1di0uMDhjMCAwIDIuMi0uMjMgMi4yLTIuNy4wNi0uNTEtLjA2LTEtLjMtMS40MXoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.cloud_transformation_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Accelerate your digital journey with our cloud transformation services. We help businesses migrate, modernize, and optimize their applications and infrastructure in the cloud for improved scalability and agility.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Cloud Migration Strategy</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Multi-Cloud Management</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Cloud Cost Optimization</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Data Analytics Services -->
<section id="data-analytics-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/chart-icon.svg') }}" alt="Data Analytics" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC41IDBhLjUuNSAwIDAgMSAuNS41djE1YS41LjUgMCAwIDEtMSAwVi41YS41LjUgMCAwIDEgLjUtLjVabTQgMGEuNS41IDAgMCAxIC41LjV2MTVhLjUuNSAwIDAgMS0xIDBWLjVhLjUuNSAwIDAgMSAuNS0uNVptNCAwYS41LjUgMCAwIDEgLjUuNXYxNWEuNS41IDAgMCAxLTEgMFYuNWEuNS41IDAgMCAxIC41LS41WiIvPjxwYXRoIGQ9Ik0wIDExYS41LjUgMCAwIDEgLjUtLjVoNGEuNS41IDAgMCAxIDAgMWgtNGEuNS41IDAgMCAxLS41LS41Wm00LTNhLjUuNSAwIDAgMSAuNS0uNWg0YS41LjUgMCAwIDEgMCAxaC00YS41LjUgMCAwIDEtLjUtLjVabTQtM2EuNS41IDAgMCAxIC41LS41aDRhLjUuNSAwIDAgMSAwIDFoLTRhLjUuNSAwIDAgMS0uNS0uNVoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.data_analytics_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Transform raw data into valuable insights with our advanced analytics solutions. We help you leverage your data assets to drive better decision-making, identify trends, and create competitive advantages.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Business Intelligence</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Predictive Analytics</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Data Visualization</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- IT Training Services -->
<section id="it-training-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/education-icon.svg') }}" alt="IT Training" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOC4yMTEgMi4wNDdjLjQ3IDAgLjk1Ny4zMzQgMS4zODQuNzRhNi44MTIgNi44MTIgMCAwIDEgLjk1MiAxLjA2NmMuMzE0LjQ0OC41MyAxLjA2Ni41MzIgMS42MTctLjAwMi41NTItLjIxOSAxLjE3LS41MzkgMS42Mi0uMzIuNDUtLjYyOC43NDMtLjk1MS45NzQtLjMyMi4yMy0uNjguMzgzLS43NjQuMzkzLS4zMDIuMDM3LS41NDktLjAwNi0uNDU0LS4yMDZsLjA4LS4xNmMuMTM3LS4yNzQgMi0uODYgMS43NTgtMS42NzUtLjAxOC0uMDYtLjA5MS0uMDk2LS4yNDUtLjEyYTIuMDA4IDIuMDA4IDAgMCAwLS41NDEtLjAwOGMtLjMzNi4wMjQtLjY2OS4wNzctLjY5Mi4wMjYtLjAyMy0uMDUyLjI2Ny0uMjMyLjU4LS4zMzcuNjkzLS4yMzUuOTE1LS42NzMuOTItMS4xMjktLjAwNi0uNDU1LS4yMzUtLjg4OC0uNjg5LTEuMTJhNS4yNSA1LjI1IDAgMCAwLS41Ni0uMjI1IDkuNzY1IDkuNzY1IDAgMCAwLS4wNTQgMS41ODVsLjA2Mi4xNWMuMTAzLjI0OC4xNDYuNDUuMTQ2LjcwNnYuMDEybC0uMDA1LjAxMnYuMDAyYy0uMDAyLjAwMy0uMDE4LjAzNy0uMDY3LjA4OS0uMDUuMDUyLS4xNjYuMDg1LS4yNzkuMDgzLS4wODktLjAwMS0uMjAzLS4wNC0uMjk4LS4xLTAuMDc1LS4wNy0uMTMxLS4yLS4xMzMtLjQxNGwtLjAwMi0uMDUyYTE3Ljk3IDE3Ljk3IDAgMCAwLS40MDgtMi41MDEgMi40MjYgMi40MjYgMCAwIDAtLjkxLjQzM2MtLjMyLjI0OC0uNjQuNjA1LS45MjUgMS4wNjRhMy44ODMgMy44ODMgMCAwIDAtLjU3IDEuNjI3Yy0uMDEuNTYyLjE5MyAxLjE5NC41NEEuOTUxLjk1MSAwIDAgMSA2LjUwMS4wMzYuMTQ4LjE0OCAwIDAgMS02LjU2Ny45YS44My44MyAwIDAgMS0uMDk3LS4wODljLS4wMDgtLjAwOC0uMDE2LS4wMTYtLjAyNC0uMDI0LS4xMDMtLjA2Ni0uMjEtLjI0OC0uMjUtLjc2Ny0uMDQtLjUyLjA1NC0xLjEwNC4yNy0xLjY2LjIxNi0uNTU2LjU2MS0xLjAzNC45NDEtMS4zOThhMi43NiAyLjc2IDAgMCAxIDEuMDU1LS42MWMuMTg5LS4wNjMuMzg5LS4xMDMuNjAxLS4xMThhMS45MiAxLjkyIDAgMCAxIC4xOC0uMDA4WiIvPjxwYXRoIGQ9Ik04IDE1QTcgNyAwIDEgMSA4IDFhNyA3IDAgMCAxIDAgMTRabTAtMUE2IDYgMCAxIDAgOCAyYTYgNiAwIDAgMCAwIDEyWiIvPjwvc3ZnPg=='}">
                </div>
                <h2>{{ __('site.it_training_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Empower your team with cutting-edge technology skills through our comprehensive training programs. Our expert-led courses cover the latest tools, methodologies, and best practices in the IT industry.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Customized Curriculums</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Hands-on Workshops</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Certification Preparation</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- AI Services -->
<section id="ai-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/cpu-icon.svg') }}" alt="AI Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNSAwYS41LjUgMCAwIDAgMCAxaDFWMUEyIDIgMCAwIDEgOCAzdjFBMiAyIDAgMCAxIDYgNnYxSDVhLjUuNSAwIDAgMCAwIDFoMS42NmwuMDk2LS4yLjYyMy0xLjI0QzguMTYgNS4zMjggOCA1LjE3IDggNXYtMWgtLjU4NkExIDEgMCAwIDAgNi41IDNjMC0uMjg2LjEyMS0uNTc4LjM0LS43OTRMOS40MSAwTTQgMGEuNS41IDAgMCAwIDAgMXYxYTIgMiAwIDAgMSAyIDJ2MUg1YTIgMiAwIDAgMS0yLTJWMmEuNS41IDAgMCAwLS41LS41aC0yYS41LjUgMCAwIDAtLjUuNXYxLjI5M0EyIDIgMCAwIDAgMSA1djFhMiAyIDAgMCAwIDEgMS43MDd2MS4zNzhhLjUuNSAwIDAgMCAwIDEuMDA2djEuMzcyQTIgMiAwIDAgMCAxIDEydjFhMiAyIDAgMCAwIDIgMnYxYS41LjUgMCAwIDAgLjUuNWgyYS41LjUgMCAwIDAgLjUtLjVWMTVhMiAyIDAgMCAxIDItMnYtMWEyIDIgMCAwIDEgMi0ySDE1di0uNWEuNS41IDAgMCAwIDAtMUgxMHYtMmg1YS41LjUgMCAwIDAgMC0xaC01VjZhMiAyIDAgMCAxIDItMlYzYTIgMiAwIDAgMSAyLTJWMGEuNS41IDAgMCAwIDAtMXpNMyAxNS41di0uNzA3QTIgMiAwIDAgMCAyIDE0di0xYTEgMSAwIDAgMC0xLTFWNnVMMVMxIDQgMiA0VjJoMXYuNUEuNS41IDAgMCAwIDMuNSAzaC4yODZhMiAyIDAgMCAwLS4yNjkgMUgzVjMuMzVBLjM1LjM1IDAgMCAxIDMuMzUgM2guMTM3YzAgLjAxNi0uMDAzLjAzMS0uMDAzLjA0N0g0VjJoMXYySDR2Yy4yIDAgLjMyMy4wNjUuMzQ1LjIwNi4wMzQuMGgtLjAwOWwuMDY3LjEzNC4yNDMuNDg2QzQuNTM0IDUuMDEzIDQuNTE3IDUgNC41IDVINHYuNWEuNS41IDAgMCA2IC41LjVIM1Y1YTEgMSAwIDAgMC0xLTFWMk01IDlhMSAxIDAgMCAwLTEtMUgzdjJoMWExIDEgMCAwIDAgMS0xIi8+PC9zdmc+'}">
                </div>
                <h2>{{ __('site.ai_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Harness the power of artificial intelligence to solve complex business challenges. Our AI solutions help automate processes, enhance customer experiences, and uncover insights from your data.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Machine Learning Solutions</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Natural Language Processing</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Computer Vision Applications</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Domain Services -->
<section id="domain-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/globe-icon.svg') }}" alt="Domain Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMCA4YTggOCAwIDEgMSAxNiAwQTggOCAwIDAgMSAwIDhabTcuNS0uNWE1IDUgMCAwIDAgNS41IC45djIuNWEuNS41IDAgMCAwIDEgMFY4LjVhLjUuNSAwIDAgMC0uNS0uNUg4YS41LjUgMCAwIDAtLjUuNXYyLjVhLjUuNSAwIDAgMCAxIDB2LTJhNC43IDQuNyAwIDAgMSAyLS44IDQuNyA0LjcgMCAwIDEgNiAwbC0uNzA3LjcwN0EuNS41IDAgMCAwIDkuNSA5SDhhLjUuNSAwIDAgMC0uNS41djIuNWEuNS41IDAgMCAwIDEgMHYtMmExLjUgMS41IDAgMCAxIC41OSAwbC0uNjczLjY2YS41LjUgMCAwIDAtLjY2LjY2bC42NjcuNjY2QS41LjUgMCAwIDAgOS41IDE0SDhhLjUuNSAwIDAgMC0uNS41djEuNWEuNS41IDAgMCAwIDEgMFYxNGgzLjVhLjUuNSAwIDAgMCAuMzU0LS44NTRsLS42Ni0uNjZhLjUuNSAwIDAgMC0uNzA4IDBsLS42NTMuNjY3YS41LjUgMCAwIDAtLjM1NC44NTNsLjY2LjY2YS41LjUgMCAwIDAgLjcwOCAwbC43LjcwN2EuNS41IDAgMCAwIC43MDctLjcwN2wtLjcwOC0uNzA3YS41LjUgMCAwIDAtLjcwNyAwbC0uNjY3LjY3YS41LjUgMCAwIDAtLjY2LjY2bC42NjcuNjY2YS41LjUgMCAwIDAgLjcwNiAwbC43MS0uNjA3YS41LjUgMCAwIDAgLjEyOC0uMnoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.domain_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Comprehensive domain management solutions to protect your online identity and establish a professional web presence. From registration to security, we handle all aspects of your domain needs.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Domain Registration</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>DNS Management</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Domain Security</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Operating Model Services -->
<section id="operating-model-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/diagram-icon.svg') }}" alt="Operating Model" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNiAxY2EuNS41IDAgMCAxIC41LS41aDNhLjUuNSAwIDAgMSAuNS41aDJBMS41IDEuNSAwIDAgMSAxMy41IDIuNXYzQTEuNSAxLjUgMCAwIDEgMTIgN2g0YTEuNSAxLjUgMCAwIDEgMS41IDEuNXYzQTEuNSAxLjUgMCAwIDEgMTYgMTNoLTFhMiAyIDAgMCAxLTItMkgzYTIgMiAwIDAgMS0yIDJIMWExLjUgMS41IDAgMCAxLTEuNS0xLjV2LTNBMi41IDIuNSAwIDAgMSAyIDZoLjVBMi41IDIuNSAwIDAgMSA1IDNIOXYxSDZhMS41IDEuNSAwIDAgMC0xLjUgMS41djNBMS41IDEuNSAwIDAgMCA2IDloMy41YTIuNSAyLjUgMCAwIDEgMi41IDIuNVYxM2gxYS41LjUgMCAwIDAgLjUtLjV2LTNhLjUuNSAwIDAgMC0uNS0uNWgtNGExLjUgMS41IDAgMCAxLTEuNS0xLjV2LTNBLjUuNSAwIDAgMCA3IDR2LTNINWM0LTEgOCAwIDgvOCIvPjwvc3ZnPg=='}">
                </div>
                <h2>{{ __('site.operating_model_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Transform how your organization delivers value with our operating model services. We help redesign organizational structures, processes, and technologies to achieve greater efficiency and responsiveness.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Business Process Redesign</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Organizational Alignment</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Technology Integration</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Cybersecurity -->
<section id="cybersecurity" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/shield-icon.svg') }}" alt="Cybersecurity" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAwYzMuMiAwIDYuMiAxLjYgOCA0LjJ2MS41YzAgNS4xLTMuOCA5LjUtOC45IDEwLjNINi45QzEuOCAxNS4yLTIgMTAuODIgMTUuN1Y0LjJDMy44IDEuNiA2LjggMCA4IDBaTTYuNSAxMmEuNS41IDAgMCAxIDAtLjk5TDggOGwuNS01IDIgNHYzYS41LjUgMCAwIDEtMSAwSDYuNVoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.cybersecurity') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Protect your critical assets with our comprehensive cybersecurity services. We provide robust solutions to identify vulnerabilities, prevent attacks, and ensure business continuity in today's threat landscape.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Security Assessments</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Threat Detection & Response</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Compliance Management</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Resource Outsourcing Services -->
<section id="resource-outsourcing-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/people-icon.svg') }}" alt="Resource Outsourcing" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTUgMTZIOWMtLjUgMC0xLS41LTEtMVY3YzAtLjUuNS0xIDEtMWg2Yy41IDAgMSAuNSAxIDF2OGMwIC41LS41IDEtMSAxek0xNCAxMmEyIDIgMCAxIDEtNCAwIDIgMiAwIDAgMSA0IDB6Ii8+PHBhdGggZD0iTTcgMTZIMWMtLjUgMC0xLS41LTEtMVY3YzAtLjUuNS0xIDEtMWg2Yy41IDAgMSAuNSAxIDF2OGMwIC41LS41IDEtMSAxek02IDEyYTIgMiAwIDEgMS00IDAgMiAyIDAgMCAxIDQgMHoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.resource_outsourcing_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Access specialized talent and expertise with our resource outsourcing solutions. We provide skilled professionals to augment your team, accelerate projects, and fill critical capability gaps.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Staff Augmentation</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Dedicated Development Teams</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Project-based Resources</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- IT Infrastructure Services -->
<section id="it-infrastructure-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/server-icon.svg') }}" alt="IT Infrastructure" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC41IDNhLjUuNSAwIDEgMCAwLTFhLjUuNSAwIDAgMCAwIDFabTMgMGEuNS41IDAgMSAwIDAtMWEuNS41IDAgMCAwIDAgMVpNOCA4YS41LjUgMCAxIDAgMC0xYS41LjUgMCAwIDAgMCAxWm0zLjUgMGEuNS41IDAgMSAwIDAtMWEuNS41IDAgMCAwIDAgMVpNNC41IDhhLjUuNSAwIDEgMCAwLTFhLjUuNSAwIDAgMCAwIDFabTcuNS02aC0xMGExIDEgMCAwIDAtMSAxdjZhMSAxIDAgMCAwIDEgMWgxMGExIDEgMCAwIDAgMS0xVjNhMSAxIDAgMCAwLTEtMVptLTUgNmEuNS41IDAgMSAxIDAtMWEuNS41IDAgMCAxIDAgMVptMCAwYS41LjUgMCAxIDEgMCAxYS41LjUgMCAwIDEgMC0xem03IDNINy41YTEgMSAwIDAgMC0xIDF2MWExIDEgMCAwIDAgMSAxaDYuNWExIDEgMCAwIDAgMS0xdi0xYTEgMSAwIDAgMC0xLTFabS4yNSA0LjI1YTIuMjUgMi4yNSAwIDEgMS00LjUgMCAyLjI1IDIuMjUgMCAwIDEgNC41IDBaIi8+PC9zdmc+'}">
                </div>
                <h2>{{ __('site.it_infrastructure_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Build a scalable, reliable, and secure technology foundation with our infrastructure services. We design, implement, and manage robust IT environments that support your business objectives.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Network Architecture</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Server Management</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Storage Solutions</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Application Services -->
<section id="application-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/window-icon.svg') }}" alt="Application Services" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMCA0YTMgMyAwIDAgMSAzLTNoMTBhMyAzIDAgMCAxIDMgM3Y4YTMgMyAwIDAgMS0zIDNIM2EzIDMgMCAwIDEtMy0zVjR6bTItLjVWNGgxNXYxMEgxdi45aC4wNWEyIGwuNS0xMnptMTIgMmEuNS41IDAgMCAwLS41LS41aC01YS41LjUgMCAwIDAgMCAxaDVhLjUuNSAwIDAgMCAuNS0uNXptLTEwIDRhLjUuNSAwIDAgMCAuNS41aDdmLjUuNSAwIDAgMCAwLTFoLTdmLjUuNSAwIDAgMC0uNS41eiIvPjwvc3ZnPg=='}">
                </div>
                <h2>{{ __('site.application_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Develop, modernize, and maintain applications that drive your business forward. Our application services cover the complete software lifecycle, from concept to deployment and ongoing enhancement.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Custom Development</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Legacy Modernization</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>DevOps Implementation</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Strategy Consulting Services -->
<section id="strategy-consulting-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/compass-icon.svg') }}" alt="Strategy Consulting" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOCAxNkExMSA4IDAgMSAwIDggNGExMSA4IDAgMCAwIDAgMTJ6TTQgOGE0IDQgMCAxIDEgOCAwYTQgNCAwIDAgMS04IDB6bTUgMGExIDEgMCAxIDAtMiAwIDEgMSAwIDAgMCAyIDB6Ii8+PC9zdmc+'}">
                </div>
                <h2>{{ __('site.strategy_consulting_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Navigate the path to digital transformation with our strategic consulting services. We help you develop clear technology roadmaps aligned with your business goals to drive innovation and growth.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Digital Transformation Strategy</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Technology Assessment</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>IT Roadmap Development</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Intelligent Automation Services -->
<section id="intelligent-automation-services" class="service-section">
    <div class="container">
        <div class="services-item">
            <div class="services-header">
                <div class="icon-box">
                    <img src="{{ asset('icons/robot-icon.svg') }}" alt="Intelligent Automation" class="service-icon" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iIzBkNmVmZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNiAzYTMgMiAwIDEgMS02IDAgMyAyIDAgMCAxIDYgMHptLjUgMmguNWEuNS41IDAgMCAxIC41LjV2MWEuNS41IDAgMCAxLS41LjVWMmEuNS41IDAgMCAxLS41LS41VjFhLjUuNSAwIDAgMSAuNS0uNUg2YzIuMjA2IDAgNCAyLjA0OSA0IDYgMCAzLjk1My0xLjc5NCA2LTQgNmgtLjVDOSA3LCA5IDcgOSA3IDYuODg0IDcgNS41IDYuMzE0IDUuNSA1em0xLjUgNGEyLjUgMi41IDAgMSAwIDAgNSAyLjUgMi41IDAgMCAwIDAtNXoiLz48L3N2Zz4='}">
                </div>
                <h2>{{ __('site.intelligent_automation_services') }}</h2>
            </div>
            <div class="services-body">
                <p>
                    Streamline operations and enhance productivity through intelligent automation. Our solutions combine RPA, AI, and workflow optimization to automate repetitive tasks and complex business processes.
                </p>
                <ul class="features-list">
                    <li>
                        <span class="check-icon"></span>
                        <span>Robotic Process Automation</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Business Process Automation</span>
                    </li>
                    <li>
                        <span class="check-icon"></span>
                        <span>Cognitive Automation</span>
                    </li>
                </ul>
                <a href="" class="service-link">Learn More</a>
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

.services-nav {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: max-content;
}

.services-nav li {
    margin: 0 5px;
}

.services-nav li:first-child {
    margin-left: 0;
}

.services-nav li:last-child {
    margin-right: 0;
}

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
    width: 40px;
    height: 40px;
    transition: all 0.3s ease;
}

.services-header h2 {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    color: #212529;
    line-height: 1.2;
}

.services-body {
    padding: 30px 40px 40px;
}

.services-body p {
    color: #555;
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
    color: #444;
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
                <h3 class="mb-4">{{ __('site.ready_to_transform') }}</h3>
                <p class="mb-4">{{ __('site.cta_description') }}</p>
                <a href="#contact" class="btn btn-light btn-lg">
                    <i class="bi bi-envelope me-2"></i>{{ __('site.contact_us') }}
                </a>
            </div>
        </div>
    </div>
</section>


@endsection


