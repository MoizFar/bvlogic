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

            <span class="badge bg-primary text-white px-3 py-2 mb-3">{{ __('site.our_services') }}</span>

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


<section class="services-section py-5">
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
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-gear"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.it_managed_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Comprehensive IT management solutions that optimize your technology infrastructure while reducing costs. Our proactive monitoring, maintenance, and support ensure maximum uptime and efficiency.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> 24/7 System Monitoring</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Help Desk Support</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Network Management</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Cloud Transformation Services -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-cloud-arrow-up"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.cloud_transformation_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Accelerate your digital journey with our cloud transformation services. We help businesses migrate, modernize, and optimize their applications and infrastructure in the cloud for improved scalability and agility.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cloud Migration Strategy</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Multi-Cloud Management</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cloud Cost Optimization</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Data Analytics Services -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.data_analytics_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Transform raw data into valuable insights with our advanced analytics solutions. We help you leverage your data assets to drive better decision-making, identify trends, and create competitive advantages.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Business Intelligence</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Predictive Analytics</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Data Visualization</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- IT Training Services -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.it_training_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Empower your team with cutting-edge technology skills through our comprehensive training programs. Our expert-led courses cover the latest tools, methodologies, and best practices in the IT industry.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Customized Curriculums</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Hands-on Workshops</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Certification Preparation</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Add the remaining services with the same structure -->
            <!-- AI Services -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.ai_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Harness the power of artificial intelligence to solve complex business challenges. Our AI solutions help automate processes, enhance customer experiences, and uncover insights from your data.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Machine Learning Solutions</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Natural Language Processing</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Computer Vision Applications</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Domain Services -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.domain_services') }}</h3>
                        </div>
                        <p class="card-text">
                            Comprehensive domain management solutions to protect your online identity and establish a professional web presence. From registration to security, we handle all aspects of your domain needs.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Domain Registration</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> DNS Management</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Domain Security</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
            

              <!-- Operating Model Services -->

             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.operating_model_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Transform how your organization delivers value with our operating model services. We help redesign organizational structures, processes, and technologies to achieve greater efficiency and responsiveness.

                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Business Process Redesign</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Organizational Alignment</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Technology Integration</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
           
            <!-- Cybersecurity -->


             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.cybersecurity') }}</h3>
                        </div>
                        <p class="card-text">
                        Protect your critical assets with our comprehensive cybersecurity services. We provide robust solutions to identify vulnerabilities, prevent attacks, and ensure business continuity in today's threat landscape.

                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Security Assessments</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Threat Detection & Response</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Compliance Management</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
           

            <!-- Resource Outsourcing Services -->

             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.resource_outsourcing_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Access specialized talent and expertise with our resource outsourcing solutions. We provide skilled professionals to augment your team, accelerate projects, and fill critical capability gaps.

                        </p>
                        <ul class="list-unstyled feature-list">

                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Staff Augmentation</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Dedicated Development Teams</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Project-based Resources</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- IT Infrastructure Services -->
             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.it_infrastructure_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Build a scalable, reliable, and secure technology foundation with our infrastructure services. We design, implement, and manage robust IT environments that support your business objectives.

                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Network Architecture</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Server Management</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Storage Solutions</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>

                </div>
            </div>

            <!-- Application Services -->
             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.application_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Develop, modernize, and maintain applications that drive your business forward. Our application services cover the complete software lifecycle, from concept to deployment and ongoing enhancement.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Custom Development</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Legacy Modernization</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> DevOps Implementation</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Strategy Consulting Services -->
             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.strategy_consulting_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Navigate the path to digital transformation with our strategic consulting services. We help you develop clear technology roadmaps aligned with your business goals to drive innovation and growth.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Digital Transformation Strategy</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Technology Assessment</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> IT Roadmap Development</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Intelligent Automation Services -->
             <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 service-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h3 class="card-title h5 mb-0">{{ __('site.intelligent_automation_services') }}</h3>
                        </div>
                        <p class="card-text">
                        Streamline operations and enhance productivity through intelligent automation. Our solutions combine RPA, AI, and workflow optimization to automate repetitive tasks and complex business processes.
                        </p>
                        <ul class="list-unstyled feature-list">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Robotic Process Automation</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Business Process Automation</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cognitive Automation</li>
                        </ul>
                        <a href="" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>
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


