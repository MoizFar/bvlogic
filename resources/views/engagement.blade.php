@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('site.engagement_page_title'))

@section('content')


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
                            <img src="{{ asset('assets/images/testimonials/client-1.jpg') }}" alt="Client">
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
                            <img src="{{ asset('assets/images/testimonials/client-2.jpg') }}" alt="Client">
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
                            <img src="{{ asset('assets/images/testimonials/client-3.jpg') }}" alt="Client">
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


@endsection

@push('styles')
<style>




/* Animation Classes */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-in.active {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Initialize Testimonial Slider
    $('.testimonial-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear'
    });
    
    // Animate elements on scroll
    function animateOnScroll() {
        $('.model-card, .timeline-item, .testimonial-item, .accordion-item').each(function() {
            if (isElementInViewport($(this)) && !$(this).hasClass('active')) {
                $(this).addClass('fade-in');
                setTimeout(() => {
                    $(this).addClass('active');
                }, 100);
            }
        });
    }
    
    // Check if element is in viewport
    function isElementInViewport(el) {
        if (!el.length) return false;
        
        const rect = el[0].getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        
        return (
            rect.top <= windowHeight * 0.85 &&
            rect.bottom >= 0
        );
    }
    
    // Run on page load and scroll
    setTimeout(function() {
        animateOnScroll();
    }, 200);
    
    $(window).on('scroll', function() {
        animateOnScroll();
    });
});
</script>
@endpush