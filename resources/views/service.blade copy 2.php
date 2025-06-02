@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('site.page_title'))

@section('content')

<style>
/* Services Section Styles */
.services-hero {
    background: linear-gradient(135deg, #0d47a1, #1976d2);
    color: white;
    padding: 100px 0;
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
    background-image: url('assets/img/services/hero-pattern.svg');
    background-size: cover;
    opacity: 0.1;
    z-index: 0;
}

.services-hero .container {
    position: relative;
    z-index: 1;
}

.page-title {
    font-weight: 800;
    margin-bottom: 1.5rem;
}

.section-title {
    position: relative;
    margin-bottom: 1.5rem;
}

.subheading {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    font-size: 0.85rem;
    display: block;
    margin-bottom: 0.5rem;
}

.services-section {
    padding: 100px 0;
    background-color: #f8f9fa;
}

.service-card {
    background-color: white;
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.service-card:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #0d6efd, #0dcaf0);
    transition: height 0.3s ease;
    z-index: -1;
}

.service-card:hover:before {
    height: 10px;
}

.service-icon-wrapper {
    position: relative;
    width: 80px;
    height: 80px;
    margin-bottom: 25px;
}

.service-icon {
    width: 70px;
    height: 70px;
    background-color: rgba(13, 110, 253, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #0d6efd;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}

.service-card:hover .service-icon {
    background-color: #0d6efd;
    color: white;
    transform: scale(1.1);
}

.service-icon-wrapper:after {
    content: '';
    position: absolute;
    top: 10px;
    left: 10px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background-color: rgba(13, 110, 253, 0.05);
    z-index: 1;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #212529;
}

.service-description {
    color: #6c757d;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.service-features {
    margin-bottom: 20px;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
}

.feature-item i {
    color: #0d6efd;
    margin-right: 10px;
    font-size: 14px;
}

.feature-item span {
    font-size: 0.9rem;
    color: #495057;
}

.service-link {
    color: #0d6efd;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.service-link i {
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.service-link:hover {
    color: #0b5ed7;
}

.service-link:hover i {
    transform: translateX(5px);
}

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
    background-image: url('assets/img/services/cta-pattern.svg');
    background-size: cover;
    opacity: 0.1;
    z-index: 0;
}

.cta-section .container {
    position: relative;
    z-index: 1;
}

/* Animation effects */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.service-card {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
.service-card:nth-child(4) { animation-delay: 0.4s; }
.service-card:nth-child(5) { animation-delay: 0.5s; }
.service-card:nth-child(6) { animation-delay: 0.6s; }
.service-card:nth-child(7) { animation-delay: 0.7s; }
.service-card:nth-child(8) { animation-delay: 0.8s; }
.service-card:nth-child(9) { animation-delay: 0.9s; }
.service-card:nth-child(10) { animation-delay: 1.0s; }
.service-card:nth-child(11) { animation-delay: 1.1s; }
.service-card:nth-child(12) { animation-delay: 1.2s; }
.service-card:nth-child(13) { animation-delay: 1.3s; }

@media (max-width: 991px) {
    .services-hero,
    .cta-section {
        padding: 60px 0;
    }
    
    .services-section {
        padding: 60px 0;
    }
    
    .service-card {
        margin-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .page-title {
        font-size: 2.5rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
}
</style>

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

<!-- <section class="services-hero py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="badge bg-primary text-white px-3 py-2 mb-3">{{ __('site.our_services') }}</span>
                <h1 class="page-title display-4 fw-bold mb-4">{{ __('site.main_title') }}</h1>
                <p class="lead fs-5 mb-5 text-secondary">{{ __('site.main_description') }}</p>
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
</section> -->

<!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <span class="subheading text-primary">{{ __('site.what_we_offer') }}</span>
                <h2 class="section-title display-5 fw-bold">{{ __('site.comprehensive_services') }}</h2>
            </div>
            <div class="col-lg-6">
                <p class="section-description fs-5">{{ __('site.services_description') }}</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- IT Managed Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.it_managed_services') }}</h3>
                    <p class="service-description">
                        Comprehensive IT management solutions that optimize your technology infrastructure while reducing costs. Our proactive monitoring, maintenance, and support ensure maximum uptime and efficiency.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>24/7 System Monitoring</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Help Desk Support</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Network Management</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Cloud Transformation Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.cloud_transformation_services') }}</h3>
                    <p class="service-description">
                        Accelerate your digital journey with our cloud transformation services. We help businesses migrate, modernize, and optimize their applications and infrastructure in the cloud for improved scalability and agility.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Cloud Migration Strategy</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Multi-Cloud Management</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Cloud Cost Optimization</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Data Analytics Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-bar-chart-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.data_analytics_services') }}</h3>
                    <p class="service-description">
                        Transform raw data into valuable insights with our advanced analytics solutions. We help you leverage your data assets to drive better decision-making, identify trends, and create competitive advantages.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Business Intelligence</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Predictive Analytics</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Data Visualization</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- IT Training Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.it_training_services') }}</h3>
                    <p class="service-description">
                        Empower your team with cutting-edge technology skills through our comprehensive training programs. Our expert-led courses cover the latest tools, methodologies, and best practices in the IT industry.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Customized Curriculums</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Hands-on Workshops</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Certification Preparation</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- AI Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.ai_services') }}</h3>
                    <p class="service-description">
                        Harness the power of artificial intelligence to solve complex business challenges. Our AI solutions help automate processes, enhance customer experiences, and uncover insights from your data.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Machine Learning Solutions</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Natural Language Processing</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Computer Vision Applications</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Domain Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.domain_services') }}</h3>
                    <p class="service-description">
                        Comprehensive domain management solutions to protect your online identity and establish a professional web presence. From registration to security, we handle all aspects of your domain needs.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Domain Registration</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>DNS Management</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Domain Security</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Operating Model Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.operating_model_services') }}</h3>
                    <p class="service-description">
                        Transform how your organization delivers value with our operating model services. We help redesign organizational structures, processes, and technologies to achieve greater efficiency and responsiveness.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Business Process Redesign</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Organizational Alignment</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Technology Integration</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.cybersecurity') }}</h3>
                    <p class="service-description">
                        Protect your critical assets with our comprehensive cybersecurity services. We provide robust solutions to identify vulnerabilities, prevent attacks, and ensure business continuity in today's threat landscape.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Security Assessments</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Threat Detection & Response</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Compliance Management</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Resource Outsourcing Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.resource_outsourcing_services') }}</h3>
                    <p class="service-description">
                        Access specialized talent and expertise with our resource outsourcing solutions. We provide skilled professionals to augment your team, accelerate projects, and fill critical capability gaps.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Staff Augmentation</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Dedicated Development Teams</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Project-based Resources</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- IT Infrastructure Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-hdd-network-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.it_infrastructure_services') }}</h3>
                    <p class="service-description">
                        Build a scalable, reliable, and secure technology foundation with our infrastructure services. We design, implement, and manage robust IT environments that support your business objectives.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Network Architecture</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Server Management</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Storage Solutions</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Application Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-window-stack"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.application_services') }}</h3>
                    <p class="service-description">
                        Develop, modernize, and maintain applications that drive your business forward. Our application services cover the complete software lifecycle, from concept to deployment and ongoing enhancement.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Custom Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Legacy Modernization</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>DevOps Implementation</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Strategy Consulting Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-compass-fill"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.strategy_consulting_services') }}</h3>
                    <p class="service-description">
                        Navigate the path to digital transformation with our strategic consulting services. We help you develop clear technology roadmaps aligned with your business goals to drive innovation and growth.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Digital Transformation Strategy</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Technology Assessment</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>IT Roadmap Development</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Intelligent Automation Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100">
                    <div class="service-icon-wrapper mb-4">
                        <div class="service-icon">
                            <i class="bi bi-robot"></i>
                        </div>
                    </div>
                    <h3 class="service-title">{{ __('site.intelligent_automation_services') }}</h3>
                    <p class="service-description">
                        Streamline operations and enhance productivity through intelligent automation. Our solutions combine RPA, AI, and workflow optimization to automate repetitive tasks and complex business processes.
                    </p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Robotic Process Automation</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Business Process Automation</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle"></i>
                            <span>Cognitive Automation</span>
                        </div>
                    </div>
                    <a href="" class="service-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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


