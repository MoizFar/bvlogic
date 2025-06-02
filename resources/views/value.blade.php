@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('value.page_title'))

@section('content')


<!-- Hero Section -->
<section class="about-hero position-relative" style="background-image: url('{{ asset('uploads/value.jpeg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.5); top: 0; left: 0;"></div>
    <div class="container text-center position-relative py-5" style="z-index: 2; font-weight: 900 !important;">
        <h1 class="display-4 fw-bold text-white">{{ __('value.hero_title') }}</h1>
        <p class="text-white">{{ __('value.hero_description') }}</p>
       
    </div>
</section>


<!-- Benefits Grid Section -->
<section class="value-benefits-section">
    <div class="container">
        <div class="row g-4">
            <!-- Operational Benefits -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>{{ __('value.operational_title') }}</h3>
                        <p>{{ __('value.operational_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.operational_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.operational_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.operational_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project Manager -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3>{{ __('value.project_manager_title') }}</h3>
                        <p>{{ __('value.project_manager_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.project_manager_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.project_manager_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.project_manager_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLA Matrix -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h3>{{ __('value.sla_title') }}</h3>
                        <p>{{ __('value.sla_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.sla_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.sla_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.sla_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Customer Success Manager -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>{{ __('value.csm_title') }}</h3>
                        <p>{{ __('value.csm_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.csm_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.csm_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.csm_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 24/7 Support -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card featured-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>{{ __('value.support_title') }}</h3>
                        <p>{{ __('value.support_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.support_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.support_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.support_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Remote Services -->
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="card-glow"></div>
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>{{ __('value.remote_title') }}</h3>
                        <p>{{ __('value.remote_description') }}</p>
                        
                        <div class="benefit-features">
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.remote_feature_1') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.remote_feature_2') }}</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check"></i>
                                <span>{{ __('value.remote_feature_3') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Value Stats Section -->
<section class="value-stats">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="section-title">{{ __('value.stats_title') }}</h2>
                <p class="section-subtitle">{{ __('value.stats_subtitle') }}</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value" data-value="99.9">0</div>
                    <div class="stat-unit">%</div>
                    <div class="stat-label">{{ __('value.stat_uptime') }}</div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="stat-value" data-value="40">0</div>
                    <div class="stat-unit">%</div>
                    <div class="stat-label">{{ __('value.stat_efficiency') }}</div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div class="stat-value" data-value="30">0</div>
                    <div class="stat-unit">%</div>
                    <div class="stat-label">{{ __('value.stat_cost_reduction') }}</div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="stat-value" data-value="75">0</div>
                    <div class="stat-unit">%</div>
                    <div class="stat-label">{{ __('value.stat_incident_reduction') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Value Pillars Section -->
<section class="value-pillars">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="section-title">{{ __('value.pillars_title') }}</h2>
                <p class="section-subtitle">{{ __('value.pillars_subtitle') }}</p>
            </div>
        </div>
        
        <div class="pillars-container">
            <div class="pillar-item">
                <div class="pillar-number">01</div>
                <div class="pillar-content">
                    <h3>{{ __('value.pillar_1_title') }}</h3>
                    <p>{{ __('value.pillar_1_description') }}</p>
                </div>
            </div>
            
            <div class="pillar-item">
                <div class="pillar-number">02</div>
                <div class="pillar-content">
                    <h3>{{ __('value.pillar_2_title') }}</h3>
                    <p>{{ __('value.pillar_2_description') }}</p>
                </div>
            </div>
            
            <div class="pillar-item">
                <div class="pillar-number">03</div>
                <div class="pillar-content">
                    <h3>{{ __('value.pillar_3_title') }}</h3>
                    <p>{{ __('value.pillar_3_description') }}</p>
                </div>
            </div>
            
            <div class="pillar-item">
                <div class="pillar-number">04</div>
                <div class="pillar-content">
                    <h3>{{ __('value.pillar_4_title') }}</h3>
                    <p>{{ __('value.pillar_4_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Value Journey Section -->
<section class="value-journey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="section-title">{{ __('value.journey_title') }}</h2>
                <p class="section-subtitle">{{ __('value.journey_subtitle') }}</p>
            </div>
        </div>
        
        <div class="journey-steps">
            <div class="journey-line"></div>
            
            <div class="journey-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>{{ __('value.journey_step1_title') }}</h3>
                    <p>{{ __('value.journey_step1_description') }}</p>
                </div>
            </div>
            
            <div class="journey-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>{{ __('value.journey_step2_title') }}</h3>
                    <p>{{ __('value.journey_step2_description') }}</p>
                </div>
            </div>
            
            <div class="journey-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>{{ __('value.journey_step3_title') }}</h3>
                    <p>{{ __('value.journey_step3_description') }}</p>
                </div>
            </div>
            
            <div class="journey-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>{{ __('value.journey_step4_title') }}</h3>
                    <p>{{ __('value.journey_step4_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

<style>



.benefit-card:hover .card-icon {
    transform: rotate(10deg);
    background-color: rgba(255, 204, 0, 0.15);
}

.benefit-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 15px;
}

.benefit-card p {
    color: var(--text-muted);
    margin-bottom: 25px;
    line-height: 1.7;
}

.benefit-features {
    margin-top: auto;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 12px;
}

.feature-item:last-child {
    margin-bottom: 0;
}

.feature-item i {
    color: var(--gold);
    margin-right: 12px;
    flex-shrink: 0;
    margin-top: 5px;
}

.feature-item span {
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.5;
}


.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 15px;
    position: relative;
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    max-width: 700px;
    margin: 0 auto;
}




/* Responsive Styles */
@media (max-width: 991px) {
    .value-page-title {
        font-size: 2.8rem;
    }
    
    .value-hero-description {
        font-size: 1.2rem;
    }
    
    .section-title {
        font-size: 2.2rem;
    }
    
    .pillar-number {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
   
    
    .journey-steps {
        padding-left: 40px;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        font-size: 1.1rem;
        left: -40px;
    }
    
    .journey-line {
        left: 20px;
    }
}

@media (max-width: 767px) {
    .value-hero {
        padding: 80px 0 60px;
    }
    
    .value-page-title {
        font-size: 2.2rem;
    }
    
    .value-hero-description {
        font-size: 1.1rem;
    }
    
    .value-benefits-section {
        padding: 60px 0;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .stat-card {
        margin-bottom: 30px;
    }
    
    .industries-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    
    
    .value-stats,
    .industries-section,
    .value-pillars,
    .value-journey {
        padding: 60px 0;
    }
    
    .pillar-number {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
        margin-right: 20px;
    }
    
    .journey-step {
        margin-bottom: 40px;
    }
}

@media (max-width: 576px) {
    .value-page-title {
        font-size: 1.8rem;
    }
    
    .industries-grid {
        grid-template-columns: 1fr;
    }
    
    .card-inner {
        padding: 30px 20px;
    }
}

/* Animation Classes */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 1s ease, transform 1s ease;
}

.fade-in.active {
    opacity: 1;
    transform: translateY(0);
}

.slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 1s ease, transform 1s ease;
}

.slide-in-left.active {
    opacity: 1;
    transform: translateX(0);
}

.pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 var(--gold-glow);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 204, 0, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 204, 0, 0);
    }
}
</style>
