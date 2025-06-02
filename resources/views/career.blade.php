@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('career.page_title'))

@section('content')


<!-- Hero Section -->
<section class="about-hero position-relative" style="background-image: url('{{ asset('uploads/career.jpeg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="position-absolute w-100 h-100" style="background-color: rgba(0,0,0,0.5); top: 0; left: 0;"></div>
    <div class="container text-center position-relative py-5" style="z-index: 2; font-weight: 900 !important;">
        <h1 class="display-4 fw-bold text-white">{{ __('career.main_title') }}</h1>
        <p class="text-white">{{ __('career.main_description') }}</p>
        
    </div>
</section>


<!-- Join Our Team Section -->
<section id="join-our-team" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4 mb-lg-0">
                    <img src="{{ asset('images/team-collaboration.jpg') }}" alt="{{ __('career.team_collaboration_alt') }}" class="img-fluid rounded shadow" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4YzAgNC40Mi0zLjU4IDgtOCA4cy04LTMuNTgtOC04IDMuNTgtOCA4LThTMTYgMy41OCAxNiA4ek04IDFjLTMuODcgMC03IDMuMTMtNyA3IDAgMy44NyAzLjEzIDcgNyA3czctMy4xMyA3LTdjMC0zLjg3LTMuMTMtNy03LTd6TTYgNWMwLTEuMSAwLjktMiAyLTJzMiAwLjkgMiAyYzAgMS4xLTAuOSAyLTIgMlM2IDYuMSA2IDV6TTMgMTMuNmMwLTIgNCAtMy4xIDUtMy4xczUtMS4xIDUtMy4xYzAgMC0xIDMuMS01IDMuMXMtNSAwLTUgMFoiLz48L3N2Zz4='">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <h2 class="section-title">{{ __('career.join_our_team_title') }}</h2>
                    <p class="lead">{{ __('career.join_our_team_lead') }}</p>
                    <p>{{ __('career.join_our_team_p1') }}</p>
                    <p>{{ __('career.join_our_team_p2') }}</p>
                    <a href="#future-opportunities" class="btn btn-primary">{{ __('career.learn_about_future_opportunities') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Culture Section -->
<section id="our-culture" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('career.our_culture_title') }}</h2>
                <p class="lead">{{ __('career.our_culture_lead') }}</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_innovation_title') }}</h3>
                        <p>{{ __('career.culture_innovation_text') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_collaboration_title') }}</h3>
                        <p>{{ __('career.culture_collaboration_text') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_growth_title') }}</h3>
                        <p>{{ __('career.culture_growth_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_excellence_title') }}</h3>
                        <p>{{ __('career.culture_excellence_text') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_inclusion_title') }}</h3>
                        <p>{{ __('career.culture_inclusion_text') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-balance-scale"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ __('career.culture_balance_title') }}</h3>
                        <p>{{ __('career.culture_balance_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employee Testimonials -->
<section id="testimonials" class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('career.hear_from_our_team') }}</h2>
                <p class="lead">{{ __('career.testimonials_lead') }}</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>{{ __('career.testimonial_1_text') }}</p>
                    </div>
                    <div class="testimonial-author d-flex align-items-center mt-3">
                        <div class="testimonial-avatar">
                            <img src="{{ asset('images/testimonial-1.jpg') }}" alt="{{ __('career.testimonial_1_name') }}" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iIzZjNzU3ZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTEgNmEzIDMgMCAxIDEtNiAwIDMgMyAwIDAgMSA2IDB6bTAgMmE1IDUgMCAxIDAtMTAgMCA1IDUgMCAwIDAgMTAgMHoiLz48L3N2Zz4='">
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-0">{{ __('career.testimonial_1_name') }}</h5>
                            <p class="text-muted mb-0">{{ __('career.testimonial_1_position') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>{{ __('career.testimonial_2_text') }}</p>
                    </div>
                    <div class="testimonial-author d-flex align-items-center mt-3">
                        <div class="testimonial-avatar">
                            <img src="{{ asset('images/testimonial-2.jpg') }}" alt="{{ __('career.testimonial_2_name') }}" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iIzZjNzU3ZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTEgNmEzIDMgMCAxIDEtNiAwIDMgMyAwIDAgMSA2IDB6bTAgMmE1IDUgMCAxIDAtMTAgMCA1IDUgMCAwIDAgMTAgMHoiLz48L3N2Zz4='">
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-0">{{ __('career.testimonial_2_name') }}</h5>
                            <p class="text-muted mb-0">{{ __('career.testimonial_2_position') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Benefits -->
<section id="career-benefits" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('career.our_benefits') }}</h2>
                <p class="lead">{{ __('career.benefits_lead') }}</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_health_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_health_1') }}</li>
                        <li>{{ __('career.benefit_health_2') }}</li>
                        <li>{{ __('career.benefit_health_3') }}</li>
                        <li>{{ __('career.benefit_health_4') }}</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_learning_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_learning_1') }}</li>
                        <li>{{ __('career.benefit_learning_2') }}</li>
                        <li>{{ __('career.benefit_learning_3') }}</li>
                        <li>{{ __('career.benefit_learning_4') }}</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_balance_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_balance_1') }}</li>
                        <li>{{ __('career.benefit_balance_2') }}</li>
                        <li>{{ __('career.benefit_balance_3') }}</li>
                        <li>{{ __('career.benefit_balance_4') }}</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-piggy-bank-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_financial_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_financial_1') }}</li>
                        <li>{{ __('career.benefit_financial_2') }}</li>
                        <li>{{ __('career.benefit_financial_3') }}</li>
                        <li>{{ __('career.benefit_financial_4') }}</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_team_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_team_1') }}</li>
                        <li>{{ __('career.benefit_team_2') }}</li>
                        <li>{{ __('career.benefit_team_3') }}</li>
                        <li>{{ __('career.benefit_team_4') }}</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <h3>{{ __('career.benefit_workspace_title') }}</h3>
                    <ul class="benefit-list">
                        <li>{{ __('career.benefit_workspace_1') }}</li>
                        <li>{{ __('career.benefit_workspace_2') }}</li>
                        <li>{{ __('career.benefit_workspace_3') }}</li>
                        <li>{{ __('career.benefit_workspace_4') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Future Opportunities -->
<section id="future-opportunities" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('career.future_opportunities') }}</h2>
                <p class="lead mb-5">{{ __('career.future_opportunities_lead') }}</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="future-opportunities-card p-4 p-md-5 shadow rounded">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h3>{{ __('career.join_talent_network') }}</h3>
                            <p>{{ __('career.talent_network_description') }}</p>
                            <ul class="check-list mb-4">
                                <li>{{ __('career.talent_network_benefit_1') }}</li>
                                <li>{{ __('career.talent_network_benefit_2') }}</li>
                                <li>{{ __('career.talent_network_benefit_3') }}</li>
                            </ul>
                            <a href="#resume-form" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#resumeModal">{{ __('career.submit_resume') }}</a>
                        </div>
                        <div class="col-md-5 d-none d-md-block">
                            <img src="{{ asset('images/career-growth.svg') }}" alt="{{ __('career.career_growth_alt') }}" class="img-fluid" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4YzAgNC40Mi0zLjU4IDgtOCA4cy04LTMuNTgtOC04IDMuNTgtOCA4LThTMTYgMy41OCAxNiA4ek04IDFjLTMuODcgMC03IDMuMTMtNyA3IDAgMy44NyAzLjEzIDcgNyA3czctMy4xMyA3LTdjMC0zLjg3LTMuMTMtNy03LTd6TTggNmEyIDIgMCAxIDAgMCA0IDIgMiAwIDAgMCAwLTR6bTQuOTUgMS41YTQuNDkgNC40OSAwIDAgMC0uMzctMWwtLjUzLjE0YTMuNSAzLjUgMCAwIDEgLjI4Ljc5bC42Mi0uMDd6bS0xLjQ1LTIuNjhhMy41MSAzLjUxIDAgMCAwLTEtLjdsLS4yOS40OWMuMy4xOS41Ny40Mi44LjU3bC40OS0uMzZ6bS0zLjAyLTEuMzJjLS4zMy4wNC0uNjcuMTEtLjk5LjIybC4xNy41NGMuMjctLjEuNTQtLjE2LjgyLS4xOGwtLjA2LS41OHptLTIuMjUuOTRhNC40OTYgNC40OTYgMCAwIDAtLjc4LjkzbC41LjMxYy4xOS0uMzIuNC0uNjIuNjQtLjg4bC0uMzYtLjM2ek0yLjUgN3YyaDFWN2gtMXptMTEgMXYxaC0xVjhoMXptLTExIC0xbC0uMzggLjM4YS40Mi40MiAwIDAgMCAuMDQuNTlsLjMyLS4zNGEuNS41IDAgMCAxIC0uMDItLjYzbC4wNC0uMXptMCAxbC0uNS0uMWEuNS41IDAgMCAxIC4wMi0uMDhsLjQ4LjE4ek0xMSA1aC0xVjRoMXYxeiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
                <div class="frequently-hired-positions">
                    <h3 class="text-center mb-4">{{ __('career.frequently_hired_positions') }}</h3>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>{{ __('career.software_development') }}</h4>
                                <ul class="position-list">
                                    <li>{{ __('career.position_frontend') }}</li>
                                    <li>{{ __('career.position_backend') }}</li>
                                    <li>{{ __('career.position_fullstack') }}</li>
                                    <li>{{ __('career.position_mobile') }}</li>
                                    <li>{{ __('career.position_devops') }}</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>{{ __('career.it_infrastructure') }}</h4>
                                <ul class="position-list">
                                    <li>{{ __('career.position_sysadmin') }}</li>
                                    <li>{{ __('career.position_cloud') }}</li>
                                    <li>{{ __('career.position_network') }}</li>
                                    <li>{{ __('career.position_dba') }}</li>
                                    <li>{{ __('career.position_security') }}</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>{{ __('career.business_operations') }}</h4>
                                <ul class="position-list">
                                    <li>{{ __('career.position_pm') }}</li>
                                    <li>{{ __('career.position_ba') }}</li>
                                    <li>{{ __('career.position_product') }}</li>
                                    <li>{{ __('career.position_account') }}</li>
                                    <li>{{ __('career.position_success') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq-section" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">{{ __('career.frequently_asked_questions') }}</h2>
                <p class="lead">{{ __('career.faq_lead') }}</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="careerFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ __('career.faq1_question') }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>{{ __('career.faq1_answer') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{ __('career.faq2_question') }}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>{{ __('career.faq2_answer_intro') }}</p>
                                <ol>
                                    <li>{{ __('career.faq2_step1') }}</li>
                                    <li>{{ __('career.faq2_step2') }}</li>
                                    <li>{{ __('career.faq2_step3') }}</li>
                                    <li>{{ __('career.faq2_step4') }}</li>
                                    <li>{{ __('career.faq2_step5') }}</li>
                                    <li>{{ __('career.faq2_step6') }}</li>
                                    <li>{{ __('career.faq2_step7') }}</li>
                                </ol>
                                <p>{{ __('career.faq2_answer_conclusion') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{ __('career.faq3_question') }}
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>{{ __('career.faq3_answer') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                {{ __('career.faq4_question') }}
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>{{ __('career.faq4_answer_intro') }}</p>
                                <ul>
                                    <li>{{ __('career.faq4_point1') }}</li>
                                    <li>{{ __('career.faq4_point2') }}</li>
                                    <li>{{ __('career.faq4_point3') }}</li>
                                    <li>{{ __('career.faq4_point4') }}</li>
                                    <li>{{ __('career.faq4_point5') }}</li>
                                    <li>{{ __('career.faq4_point6') }}</li>
                                </ul>
                                <p>{{ __('career.faq4_answer_conclusion') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                {{ __('career.faq5_question') }}
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>{{ __('career.faq5_answer_intro') }}</p>
                                <ul>
                                    <li><strong>{{ __('career.faq5_category1') }}:</strong> {{ __('career.faq5_tech1') }}</li>
                                    <li><strong>{{ __('career.faq5_category2') }}:</strong> {{ __('career.faq5_tech2') }}</li>
                                    <li><strong>{{ __('career.faq5_category3') }}:</strong> {{ __('career.faq5_tech3') }}</li>
                                    <li><strong>{{ __('career.faq5_category4') }}:</strong> {{ __('career.faq5_tech4') }}</li>
                                    <li><strong>{{ __('career.faq5_category5') }}:</strong> {{ __('career.faq5_tech5') }}</li>
                                    <li><strong>{{ __('career.faq5_category6') }}:</strong> {{ __('career.faq5_tech6') }}</li>
                                </ul>
                                <p>{{ __('career.faq5_answer_conclusion') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resume Modal -->
<div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resumeModalLabel">{{ __('career.join_talent_network') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="resume-form" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">{{ __('career.form_first_name') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstName" required>
                            <div class="invalid-feedback">
                                {{ __('career.form_first_name_error') }}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">{{ __('career.form_last_name') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastName" required>
                            <div class="invalid-feedback">
                                {{ __('career.form_last_name_error') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('career.form_email') }} <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">
                            {{ __('career.form_email_error') }}
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('career.form_phone') }}</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">{{ __('career.form_linkedin') }}</label>
                        <input type="url" class="form-control" id="linkedin">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jobInterest" class="form-label">{{ __('career.form_interest') }} <span class="text-danger">*</span></label>
                        <select class="form-select" id="jobInterest" required>
                            <option value="" selected disabled>{{ __('career.form_interest_placeholder') }}</option>
                            <option value="Software Development">{{ __('career.software_development') }}</option>
                            <option value="IT & Infrastructure">{{ __('career.it_infrastructure') }}</option>
                            <option value="Data Analytics">{{ __('career.data_analytics') }}</option>
                            <option value="Project Management">{{ __('career.project_management') }}</option>
                            <option value="Product Management">{{ __('career.product_management') }}</option>
                            <option value="UX/UI Design">{{ __('career.design') }}</option>
                            <option value="Sales & Marketing">{{ __('career.sales_marketing') }}</option>
                            <option value="Customer Success">{{ __('career.customer_success') }}</option>
                            <option value="Other">{{ __('career.other') }}</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ __('career.form_interest_error') }}
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="experience" class="form-label">{{ __('career.form_experience') }} <span class="text-danger">*</span></label>
                        <select class="form-select" id="experience" required>
                            <option value="" selected disabled>{{ __('career.form_experience_placeholder') }}</option>
                            <option value="0-1">{{ __('career.experience_0_1') }}</option>
                            <option value="1-3">{{ __('career.experience_1_3') }}</option>
                            <option value="3-5">{{ __('career.experience_3_5') }}</option>
                            <option value="5-10">{{ __('career.experience_5_10') }}</option>
                            <option value="10+">{{ __('career.experience_10_plus') }}</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ __('career.form_experience_error') }}
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="resumeUpload" class="form-label">{{ __('career.form_resume') }} <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="resumeUpload" accept=".pdf,.doc,.docx" required>
                        <div class="form-text">{{ __('career.form_resume_formats') }}</div>
                        <div class="invalid-feedback">
                            {{ __('career.form_resume_error') }}
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="coverLetter" class="form-label">{{ __('career.form_introduction') }}</label>
                        <textarea class="form-control" id="coverLetter" rows="3" placeholder="{{ __('career.form_introduction_placeholder') }}"></textarea>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="privacyConsent" required>
                        <label class="form-check-label" for="privacyConsent">{{ __('career.form_privacy_consent') }} <span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            {{ __('career.form_privacy_error') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('career.close') }}</button>
                <button type="submit" form="resume-form" class="btn btn-primary">{{ __('career.submit_application') }}</button>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
/* Career Hero Styles */
.career-hero {
    background: linear-gradient(135deg, #0d47a1, #1976d2);
    color: white;
    padding: 120px 0 80px;
    position: relative;
    overflow: hidden;
}

.career-hero:before {
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

.career-hero .container {
    position: relative;
    z-index: 1;
}

.page-title {
    font-weight: 800;
    margin-bottom: 1.5rem;
    font-size: 3rem;
}

/* Section Styles */
.section-title {
    font-weight: 700;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 1rem;
}

.section-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #0d6efd;
}

/* Culture Cards */
.icon-box {
    width: 70px;
    height: 70px;
    background-color: rgba(13, 110, 253, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.icon-box i {
    font-size: 30px;
    color: #0d6efd;
}

.card {
    transition: all 0.3s ease;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
}

.card:hover .icon-box {
    background-color: #0d6efd;
}

.card:hover .icon-box i {
    color: white;
}

/* Testimonial Styles */
.testimonial-card {
    background-color: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
    position: relative;
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.testimonial-content {
    position: relative;
    padding-left: 20px;
    margin-bottom: 20px;
}

.testimonial-content:before {
    content: '"';
    font-size: 60px;
    color: #e6e6e6;
    position: absolute;
    top: -20px;
    left: -15px;
    font-family: Georgia, serif;
}

.testimonial-content p {
    font-style: italic;
    color: #555;
    line-height: 1.8;
    margin-bottom: 0;
    position: relative;
    z-index: 1;
}

.testimonial-avatar img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

/* Benefits Styles */
.benefit-card1 {
    background-color: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
    height: 100%;
    transition: all 0.3s ease;
}

.benefit-card1:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.benefit-icon {
    font-size: 36px;
    color: #0d6efd;
    margin-bottom: 20px;
}

.benefit-card1 h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    font-weight: 600;
}

.benefit-list {
    list-style: none;
    padding-left: 0;
}

.benefit-list li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
}

.benefit-list li:before {
    content: '';
    position: absolute;
    left: 0;
    top: 14px;
    width: 15px;
    height: 15px;
    background-color: rgba(13, 110, 253, 0.2);
    border-radius: 50%;
}

.benefit-list li:after {
    content: '';
    position: absolute;
    left: 5px;
    top: 17px;
    width: 5px;
    height: 8px;
    border-right: 2px solid #0d6efd;
    border-bottom: 2px solid #0d6efd;
    transform: rotate(45deg);
}

/* Future Opportunities */
.future-opportunities-card {
    background-color: white;
    border-radius: 15px;
}

.check-list {
    list-style: none;
    padding-left: 0;
}

.check-list li {
    padding: 5px 0;
    position: relative;
    padding-left: 30px;
}

.check-list li:before {
    content: '';
    position: absolute;
    left: 0;
    top: 6px;
    width: 20px;
    height: 20px;
    background-color: rgba(13, 110, 253, 0.1);
    border-radius: 50%;
}

.check-list li:after {
    content: '';
    position: absolute;
    left: 7px;
    top: 11px;
    width: 6px;
    height: 10px;
    border-right: 2px solid #0d6efd;
    border-bottom: 2px solid #0d6efd;
    transform: rotate(45deg);
}

.position-card {
    background-color: white;
    transition: all 0.3s ease;
}

.position-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
}

.position-card h4 {
    color: #0d6efd;
    font-size: 1.25rem;
    margin-bottom: 20px;
    font-weight: 600;
}

.position-list {
    list-style: none;
    padding-left: 0;
}

.position-list li {
    padding: 6px 0;
    border-bottom: 1px dashed #e9ecef;
}

.position-list li:last-child {
    border-bottom: none;
}

/* FAQ Styles */
.accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 10px !important;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.accordion-button {
    font-weight: 600;
    padding: 20px 25px;
}

.accordion-button:not(.collapsed) {
    background-color: #0d6efd;
    color: white;
}

.accordion-button:focus {
    box-shadow: none;
}

.accordion-button::after {
    background-size: 20px;
}

.accordion-body {
    padding: 25px;
}


</style>