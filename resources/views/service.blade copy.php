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
                <p class="lead">{{ __('site.main_description') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="services-navigation">
    <div class="container">
        <div class="services-nav-wrapper">
            <ul class="services-nav">
                <li><a href="#app-modernization" class="active">{{ __('site.app_modernization_tab') }}</a></li>
                <li><a href="#strategy-consulting">{{ __('site.strategy_consulting_tab') }}</a></li>
                <li><a href="#cloud-services">{{ __('site.cloud_services_tab') }}</a></li>
                <li><a href="#cybersecurity">{{ __('site.cybersecurity_tab') }}</a></li>
                <li><a href="#data-analytics">{{ __('site.data_analytics_tab') }}</a></li>
                <li><a href="#digital-transformation">{{ __('site.digital_transformation_tab') }}</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- App Modernization -->
<section id="app-modernization" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/app-modernization.png') }}" alt="Application Modernization" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h2>{{ __('site.app_modernization_title') }}</h2>
                    <p>{{ __('site.app_modernization_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.microservices_title') }}</h4>
                                <p>{{ __('site.microservices_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.legacy_systems_title') }}</h4>
                                <p>{{ __('site.legacy_systems_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.mobile_optimization_title') }}</h4>
                                <p>{{ __('site.mobile_optimization_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategy & Consulting -->
<section id="strategy-consulting" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/strategy-consulting.png') }}" alt="Strategy and Consulting" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h2>{{ __('site.strategy_consulting_title') }}</h2>
                    <p>{{ __('site.strategy_consulting_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.enterprise_architecture_title') }}</h4>
                                <p>{{ __('site.enterprise_architecture_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.process_optimization_title') }}</h4>
                                <p>{{ __('site.process_optimization_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.strategic_planning_title') }}</h4>
                                <p>{{ __('site.strategic_planning_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cloud Services -->
<section id="cloud-services" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/cloud-site.png') }}" alt="Cloud Services" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h2>{{ __('site.cloud_services_title') }}</h2>
                    <p>{{ __('site.cloud_services_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.cloud_migration_title') }}</h4>
                                <p>{{ __('site.cloud_migration_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.cloud_infrastructure_title') }}</h4>
                                <p>{{ __('site.cloud_infrastructure_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.cloud_optimization_title') }}</h4>
                                <p>{{ __('site.cloud_optimization_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cybersecurity -->
<section id="cybersecurity" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/cybersecurity.png') }}" alt="Cybersecurity" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2>{{ __('site.cybersecurity_title') }}</h2>
                    <p>{{ __('site.cybersecurity_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.threat_protection_title') }}</h4>
                                <p>{{ __('site.threat_protection_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.security_assessment_title') }}</h4>
                                <p>{{ __('site.security_assessment_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.compliance_title') }}</h4>
                                <p>{{ __('site.compliance_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data Analytics -->
<section id="data-analytics" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/data-analytics.png') }}" alt="Data Analytics" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h2>{{ __('site.data_analytics_title') }}</h2>
                    <p>{{ __('site.data_analytics_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.big_data_title') }}</h4>
                                <p>{{ __('site.big_data_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.predictive_analytics_title') }}</h4>
                                <p>{{ __('site.predictive_analytics_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.data_visualization_title') }}</h4>
                                <p>{{ __('site.data_visualization_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Transformation -->
<section id="digital-transformation" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image">
                    <img src="{{ asset('assets/images/services/digital-transformation.png') }}" alt="Digital Transformation" class="img-fluid">
                    <div class="image-shape"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-digital-tachograph"></i>
                    </div>
                    <h2>{{ __('site.digital_transformation_title') }}</h2>
                    <p>{{ __('site.digital_transformation_description') }}</p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.innovation_title') }}</h4>
                                <p>{{ __('site.innovation_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-people-arrows"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.customer_experience_title') }}</h4>
                                <p>{{ __('site.customer_experience_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="feature-text">
                                <h4>{{ __('site.workflow_automation_title') }}</h4>
                                <p>{{ __('site.workflow_automation_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


