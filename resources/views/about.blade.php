@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('site.about_us'))

@section('content')


<!-- Hero Section -->
<section class="about-hero position-relative" style="background-image: url('{{ asset('uploads/about-hero.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.5); top: 0; left: 0;"></div>
    <div class="container text-center position-relative py-5" style="z-index: 2; font-weight: 900 !important;">
        <h1 class="display-4 fw-bold text-white">{{ __('site.about_title') }}</h1>
        <p class="text-white">{{ __('site.about_description') }}</p>
        <div class="founded mt-3">
            <span class="text-white-50">{{ __('site.founded') }}</span>
            <strong class="text-primary ms-2 fs-5">{{ __('site.founded_year') }}</strong>
        </div>
    </div>
</section>


<!-- Our Story Section -->
<section class="section section-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('site.our_story_title') }}</h2>
                <p class="section-subtitle">{{ __('site.our_story_subtitle') }}</p>
            </div>
        </div>
        
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <div class="story-image">
                    <div class="quote-box">
                        <p>"{{ __('site.founder_quote') }}"</p>
                        <span>- {{ __('site.founder_name') }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h3>{{ __('site.vision_begins') }}</h3>
                    <p>{{ __('site.story_paragraph_1') }}</p>
                    <p>{{ __('site.story_paragraph_2') }}</p>
                    
                    <!-- <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-number" data-count="10">0</div>
                            <div class="stat-label">{{ __('site.countries') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="200">0</div>
                            <div class="stat-label">{{ __('site.professionals') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="100">0</div>
                            <div class="stat-label">{{ __('site.enterprises') }}</div>
                        </div>
                    </div> -->

                    <div class="stats-row d-flex justify-content-around text-center mt-4">
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold display-6" data-count="10">0</div>
                            <div class="stat-label">{{ __('site.countries') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold display-6" data-count="200">0</div>
                            <div class="stat-label">{{ __('site.professionals') }}</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold display-6" data-count="100">0</div>
                            <div class="stat-label">{{ __('site.enterprises') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="section section-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('site.our_mission') }}</h2>
                <p class="section-subtitle">{{ __('site.mission_text') }}</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>{{ __('site.technology_innovation') }}</h4>
                    <p>{{ __('site.technology_innovation_text') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>{{ __('site.youth_enablement') }}</h4>
                    <p>{{ __('site.youth_enablement_text') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-venus"></i>
                    </div>
                    <h4>{{ __('site.women_empowerment') }}</h4>
                    <p>{{ __('site.women_empowerment_text') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Core Values Section -->
<!-- <section class="section section-values py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">The guiding principles behind everything we do</p>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-handshake text-primary fa-2x mb-3"></i>
                    <h5>Integrity</h5>
                    <p>We uphold the highest standards of honesty and transparency in all our actions.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-lightbulb text-primary fa-2x mb-3"></i>
                    <h5>Innovation</h5>
                    <p>We believe in creativity and are constantly looking for new ways to solve problems.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-users text-primary fa-2x mb-3"></i>
                    <h5>Collaboration</h5>
                    <p>We work together to achieve more and build lasting relationships with our clients.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-chart-line text-primary fa-2x mb-3"></i>
                    <h5>Excellence</h5>
                    <p>We strive to exceed expectations and deliver outstanding results.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="section section-values py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="section-title">{{ __('site.core_values') }}</h2>
                <p class="section-subtitle">{{ __('site.core_values_subtitle') }}</p>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-handshake text-primary fa-2x mb-3"></i>
                    <h5>{{ __('site.integrity_title') }}</h5>
                    <p>{{ __('site.integrity_description') }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-lightbulb text-primary fa-2x mb-3"></i>
                    <h5>{{ __('site.innovation_title') }}</h5>
                    <p>{{ __('site.innovation_description') }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-users text-primary fa-2x mb-3"></i>
                    <h5>{{ __('site.collaboration_title') }}</h5>
                    <p>{{ __('site.collaboration_description') }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card p-4 bg-white rounded">
                    <i class="fas fa-chart-line text-primary fa-2x mb-3"></i>
                    <h5>{{ __('site.excellence_title') }}</h5>
                    <p>{{ __('site.excellence_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Initiatives Section -->
<section class="section section-initiatives">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('site.initiatives_title') }}</h2>
                <p class="section-subtitle">{{ __('site.initiatives_subtitle') }}</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="initiative-box">
                    <div class="initiative-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>{{ __('site.bvlogic_academy') }}</h4>
                    <p>{{ __('site.bvlogic_academy_description') }}</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="initiative-box">
                    <div class="initiative-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>{{ __('site.bvlogic_dev') }}</h4>
                    <p>{{ __('site.bvlogic_dev_description') }}</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="initiative-box">
                    <div class="initiative-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>{{ __('site.bvlogic_space') }}</h4>
                    <p>{{ __('site.bvlogic_space_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Services Section -->
<!-- <section class="section section-services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('site.what_we_do') }}</h2>
                <p class="section-subtitle">{{ __('site.what_we_do_subtitle') }}</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4>{{ __('site.ai_automation') }}</h4>
                    <p>{{ __('site.ai_automation_text') }}</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>{{ __('site.cybersecurity') }}</h4>
                    <p>{{ __('site.cybersecurity_text') }}</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h4>{{ __('site.cloud_erp') }}</h4>
                    <p>{{ __('site.cloud_erp_text') }}</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>{{ __('site.custom_software') }}</h4>
                    <p>{{ __('site.custom_software_text') }}</p>
                </div>
            </div>
        </div>
    </div>
</section> -->



<!-- Hero Section -->
<section class="engagement-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="engagement-page-title">{{ __('site.hero_title') }}</h1>
                <p class="hero-description">{{ __('site.hero_description') }}</p>
            </div>
        </div>
    </div>
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
</section>

<!-- Models Grid Section -->
<section class="models-grid">
    <div class="container">
        <div class="row g-4">
            <!-- NOC Outsourcing -->
            <div class="col-lg-6">
                <div class="model-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h2>{{ __('site.noc_title') }}</h2>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.noc_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.noc_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.noc_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.noc_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                     
                    </div>
                </div>
            </div>
            
            <!-- IT Support Outsourcing -->
            <div class="col-lg-6">
                <div class="model-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h2>{{ __('site.it_support_title') }}</h2>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.it_support_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_support_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_support_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_support_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
            
            <!-- Help Desk Outsourcing -->
            <div class="col-lg-6">
                <div class="model-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-life-ring"></i>
                        </div>
                        <h2>{{ __('site.help_desk_title') }}</h2>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.help_desk_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.help_desk_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.help_desk_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.help_desk_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            <!-- Offshore Development Center -->
            <div class="col-lg-6">
                <div class="model-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h2>{{ __('site.odc_title') }}</h2>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.odc_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.odc_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.odc_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.odc_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
            
            <!-- Team Outsourcing -->
            <div class="col-lg-6">
                <div class="model-card highlight-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h2>{{ __('site.team_title') }}</h2>
                        <div class="popular-tag">{{ __('site.popular_tag') }}</div>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.team_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.team_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.team_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.team_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
            
            <!-- IT Department Outsourcing -->
            <div class="col-lg-6">
                <div class="model-card">
                    <div class="model-header">
                        <div class="model-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h2>{{ __('site.it_dept_title') }}</h2>
                    </div>
                    <div class="model-body">
                        <p>{{ __('site.it_dept_description') }}</p>
                        
                        <div class="benefits-list">
                            <h4>{{ __('site.benefits_title') }}</h4>
                            <ul>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_dept_benefit_1') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_dept_benefit_2') }}</span>
                                </li>
                                <li>
                                    <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                    <span class="benefit-text">{{ __('site.it_dept_benefit_3') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>{{ __('site.process_title') }}</h2>
            <p>{{ __('site.process_subtitle') }}</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-item">
                <div class="timeline-number">01</div>
                <div class="timeline-content">
                    <h3>{{ __('site.process_step_1_title') }}</h3>
                    <p>{{ __('site.process_step_1_description') }}</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">02</div>
                <div class="timeline-content">
                    <h3>{{ __('site.process_step_2_title') }}</h3>
                    <p>{{ __('site.process_step_2_description') }}</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">03</div>
                <div class="timeline-content">
                    <h3>{{ __('site.process_step_3_title') }}</h3>
                    <p>{{ __('site.process_step_3_description') }}</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">04</div>
                <div class="timeline-content">
                    <h3>{{ __('site.process_step_4_title') }}</h3>
                    <p>{{ __('site.process_step_4_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>{{ __('site.testimonial_title') }}</h2>
            <p>{{ __('site.testimonial_subtitle') }}</p>
        </div>
        
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>{{ __('site.testimonial_1_text') }}</p>
                    <div class="client-info">
                        <div class="client-image">
                        </div>
                        <div class="client-details">
                            <h4>{{ __('site.testimonial_1_name') }}</h4>
                            <p>{{ __('site.testimonial_1_position') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>{{ __('site.testimonial_2_text') }}</p>
                    <div class="client-info">
                        <div class="client-image">
                        </div>
                        <div class="client-details">
                            <h4>{{ __('site.testimonial_2_name') }}</h4>
                            <p>{{ __('site.testimonial_2_position') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>{{ __('site.testimonial_3_text') }}</p>
                    <div class="client-info">
                        <div class="client-image">
                        </div>
                        <div class="client-details">
                            <h4>{{ __('site.testimonial_3_name') }}</h4>
                            <p>{{ __('site.testimonial_3_position') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>{{ __('site.faq_title') }}</h2>
            <p>{{ __('site.faq_subtitle') }}</p>
        </div>
        
        <div class="faq-accordion">
            <div class="accordion" id="engagementFAQ">
                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ __('site.faq_q1') }}
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#engagementFAQ">
                        <div class="accordion-body">
                            {{ __('site.faq_a1') }}
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ __('site.faq_q2') }}
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#engagementFAQ">
                        <div class="accordion-body">
                            {{ __('site.faq_a2') }}
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('site.faq_q3') }}
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#engagementFAQ">
                        <div class="accordion-body">
                            {{ __('site.faq_a3') }}
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            {{ __('site.faq_q4') }}
                        </button>
                    </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#engagementFAQ">
                        <div class="accordion-body">
                            {{ __('site.faq_a4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="section-cta">
    <div class="container">
        <div class="cta-box">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2>{{ __('site.cta_title') }}</h2>
                    <p>{{ __('site.cta_text') }}</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light">{{ __('site.contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
