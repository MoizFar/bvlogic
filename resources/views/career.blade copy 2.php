@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp

@section('title', __('career.page_title'))

@section('content')

<!-- Hero Section -->
<section class="career-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="page-title">{{ __('career.main_title') }}</h1>
                <p class="lead fs-5 mb-5">{{ __('career.main_description') }}</p>
              
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team Section -->
<section id="join-our-team" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4 mb-lg-0">
                    <img src="{{ asset('images/team-collaboration.jpg') }}" alt="Team Collaboration" class="img-fluid rounded shadow" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4YzAgNC40Mi0zLjU4IDgtOCA4cy04LTMuNTgtOC04IDMuNTgtOCA4LThTMTYgMy41OCAxNiA4ek04IDFjLTMuODcgMC03IDMuMTMtNyA3IDAgMy44NyAzLjEzIDcgNyA3czctMy4xMyA3LTdjMC0zLjg3LTMuMTMtNy03LTd6TTYgNWMwLTEuMSAwLjktMiAyLTJzMiAwLjkgMiAyYzAgMS4xLTAuOSAyLTIgMlM2IDYuMSA2IDV6TTMgMTMuNmMwLTIgNCAtMy4xIDUtMy4xczUtMS4xIDUtMy4xYzAgMC0xIDMuMS01IDMuMXMtNSAwLTUgMFoiLz48L3N2Zz4='">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <h2 class="section-title">{{ __('career.join_our_team_title') }}</h2>
                    <p class="lead">We're building a team of exceptional talent to solve complex technology challenges and drive innovation.</p>
                    <p>At our company, we believe that our success is directly tied to the quality, creativity, and dedication of our team members. We're constantly looking for passionate individuals who are excited about technology and eager to make an impact.</p>
                    <p>While we don't have any open positions at the moment, we encourage you to submit your resume for future opportunities. We're growing rapidly and new positions open regularly.</p>
                    <a href="#future-opportunities" class="btn btn-primary">Learn About Future Opportunities</a>
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
                <p class="lead">We foster an environment of innovation, collaboration, and continuous growth.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">Innovation</h3>
                        <p>We encourage creative thinking and embrace new ideas. Our team members have the freedom to explore innovative solutions and challenge the status quo.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">Collaboration</h3>
                        <p>We believe in the power of teamwork. Our collaborative environment brings together diverse perspectives to solve complex problems and deliver exceptional results.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="h4 mb-3">Growth</h3>
                        <p>We invest in our people. Through mentorship, training programs, and challenging projects, we provide opportunities for continuous professional development.</p>
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
                        <h3 class="h4 mb-3">Excellence</h3>
                        <p>We hold ourselves to the highest standards of quality in everything we do. Our commitment to excellence drives us to continually improve our skills and deliverables.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h3 class="h4 mb-3">Inclusion</h3>
                        <p>We celebrate diversity and create an inclusive environment where everyone feels valued and respected. Different perspectives make us stronger as a team.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mx-auto mb-4">
                            <i class="bi bi-balance-scale"></i>
                        </div>
                        <h3 class="h4 mb-3">Work-Life Balance</h3>
                        <p>We understand the importance of balance. We promote flexible work arrangements that allow our team members to thrive both professionally and personally.</p>
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
                <p class="lead">Our employees share their experiences working with us.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Working here has been a transformative experience for my career. The collaborative environment and challenging projects have helped me grow both technically and professionally. The supportive leadership team genuinely cares about employee development."</p>
                    </div>
                    <div class="testimonial-author d-flex align-items-center mt-3">
                        <div class="testimonial-avatar">
                            <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Sarah Johnson" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iIzZjNzU3ZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTEgNmEzIDMgMCAxIDEtNiAwIDMgMyAwIDAgMSA2IDB6bTAgMmE1IDUgMCAxIDAtMTAgMCA1IDUgMCAwIDAgMTAgMHoiLz48L3N2Zz4='">
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-0">Sarah Johnson</h5>
                            <p class="text-muted mb-0">Senior Developer, 3 years</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The culture of innovation here is unlike anywhere I've worked before. We're encouraged to explore new ideas and technologies, which keeps the work exciting and fulfilling. The mentorship program has been invaluable for my growth in project management."</p>
                    </div>
                    <div class="testimonial-author d-flex align-items-center mt-3">
                        <div class="testimonial-avatar">
                            <img src="{{ asset('images/testimonial-2.jpg') }}" alt="David Kim" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iIzZjNzU3ZCIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMTEgNmEzIDMgMCAxIDEtNiAwIDMgMyAwIDAgMSA2IDB6bTAgMmE1IDUgMCAxIDAtMTAgMCA1IDUgMCAwIDAgMTAgMHoiLz48L3N2Zz4='">
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-0">David Kim</h5>
                            <p class="text-muted mb-0">Project Manager, 2 years</p>
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
                <p class="lead">We offer a comprehensive benefits package designed to support your well-being and growth.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h3>Health & Wellness</h3>
                    <ul class="benefit-list">
                        <li>Comprehensive health insurance</li>
                        <li>Dental and vision coverage</li>
                        <li>Mental health support</li>
                        <li>Wellness programs and fitness allowance</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3>Learning & Development</h3>
                    <ul class="benefit-list">
                        <li>Professional development budget</li>
                        <li>Training and certification programs</li>
                        <li>Mentorship opportunities</li>
                        <li>Conference attendance</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <h3>Work-Life Balance</h3>
                    <ul class="benefit-list">
                        <li>Flexible working hours</li>
                        <li>Remote work options</li>
                        <li>Generous paid time off</li>
                        <li>Parental leave</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-piggy-bank-fill"></i>
                    </div>
                    <h3>Financial Benefits</h3>
                    <ul class="benefit-list">
                        <li>Competitive compensation</li>
                        <li>Performance bonuses</li>
                        <li>Retirement plans with employer match</li>
                        <li>Stock options</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>Team Building</h3>
                    <ul class="benefit-list">
                        <li>Regular team events</li>
                        <li>Annual company retreats</li>
                        <li>Community volunteer opportunities</li>
                        <li>Recognition programs</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="benefit-card1">
                    <div class="benefit-icon">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <h3>Workspace</h3>
                    <ul class="benefit-list">
                        <li>Modern, collaborative office space</li>
                        <li>Ergonomic workstations</li>
                        <li>Home office stipend</li>
                        <li>Snacks and refreshments</li>
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
                <p class="lead mb-5">While we don't have current openings, we're always interested in connecting with talented professionals.</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="future-opportunities-card p-4 p-md-5 shadow rounded">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h3>Join Our Talent Network</h3>
                            <p>Submit your resume to be considered for future opportunities that match your skills and interests. We'll notify you when relevant positions become available.</p>
                            <ul class="check-list mb-4">
                                <li>Be among the first to know about new openings</li>
                                <li>Get personalized job alerts based on your qualifications</li>
                                <li>Connect with our recruitment team</li>
                            </ul>
                            <a href="#resume-form" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#resumeModal">Submit Your Resume</a>
                        </div>
                        <div class="col-md-5 d-none d-md-block">
                            <img src="{{ asset('images/career-growth.svg') }}" alt="Career Growth" class="img-fluid" onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIiB2aWV3Qm94PSIwIDAgMTYgMTYiPjxwYXRoIGQ9Ik0xNiA4YzAgNC40Mi0zLjU4IDgtOCA4cy04LTMuNTgtOC04IDMuNTgtOCA4LThTMTYgMy41OCAxNiA4ek04IDFjLTMuODcgMC03IDMuMTMtNyA3IDAgMy44NyAzLjEzIDcgNyA3czctMy4xMyA3LTdjMC0zLjg3LTMuMTMtNy03LTd6TTggNmEyIDIgMCAxIDAgMCA0IDIgMiAwIDAgMCAwLTR6bTQuOTUgMS41YTQuNDkgNC40OSAwIDAgMC0uMzctMWwtLjUzLjE0YTMuNSAzLjUgMCAwIDEgLjI4Ljc5bC42Mi0uMDd6bS0xLjQ1LTIuNjhhMy41MSAzLjUxIDAgMCAwLTEtLjdsLS4yOS40OWMuMy4xOS41Ny40Mi44LjU3bC40OS0uMzZ6bS0zLjAyLTEuMzJjLS4zMy4wNC0uNjcuMTEtLjk5LjIybC4xNy41NGMuMjctLjEuNTQtLjE2LjgyLS4xOGwtLjA2LS41OHptLTIuMjUuOTRhNC40OTYgNC40OTYgMCAwIDAtLjc4LjkzbC41LjMxYy4xOS0uMzIuNC0uNjIuNjQtLjg4bC0uMzYtLjM2ek0yLjUgN3YyaDFWN2gtMXptMTEgMXYxaC0xVjhoMXptLTExIC0xbC0uMzggLjM4YS40Mi40MiAwIDAgMCAuMDQuNTlsLjMyLS4zNGEuNS41IDAgMCAxIC0uMDItLjYzbC4wNC0uMXptMCAxbC0uNS0uMWEuNS41IDAgMCAxIC4wMi0uMDhsLjQ4LjE4ek0xMSA1aC0xVjRoMXYxeiI+PC9wYXRoPjwvc3ZnPg=='">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
                <div class="frequently-hired-positions">
                    <h3 class="text-center mb-4">Positions We Frequently Hire For</h3>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>Software Development</h4>
                                <ul class="position-list">
                                    <li>Frontend Developers</li>
                                    <li>Backend Developers</li>
                                    <li>Full Stack Engineers</li>
                                    <li>Mobile Developers</li>
                                    <li>DevOps Engineers</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>IT & Infrastructure</h4>
                                <ul class="position-list">
                                    <li>Systems Administrators</li>
                                    <li>Cloud Architects</li>
                                    <li>Network Engineers</li>
                                    <li>Database Administrators</li>
                                    <li>Security Specialists</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="position-card p-4 rounded shadow-sm h-100">
                                <h4>Business & Operations</h4>
                                <ul class="position-list">
                                    <li>Project Managers</li>
                                    <li>Business Analysts</li>
                                    <li>Product Managers</li>
                                    <li>Account Managers</li>
                                    <li>Customer Success Specialists</li>
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
                <p class="lead">Find answers to common questions about careers at our company.</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="careerFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How can I stay updated on new job openings?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>The best way to stay informed about new opportunities is to join our talent network by submitting your resume through the form on this page. We'll notify you when positions matching your qualifications become available. You can also follow us on LinkedIn for announcements about new openings.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is your hiring process like?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>Our typical hiring process includes:</p>
                                <ol>
                                    <li>Initial application review</li>
                                    <li>Phone screening with a recruiter</li>
                                    <li>Technical assessment or skills test (role-dependent)</li>
                                    <li>1-2 rounds of interviews with the hiring team</li>
                                    <li>Final interview with senior leadership</li>
                                    <li>Reference checks</li>
                                    <li>Job offer</li>
                                </ol>
                                <p>The entire process typically takes 2-4 weeks, depending on the position and scheduling availability.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer remote work options?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>Yes, we offer flexible working arrangements including hybrid and fully remote options for many positions. Our approach to work location is based on role requirements, team needs, and individual circumstances. We believe in focusing on results rather than where the work happens, and we provide the necessary tools and support for effective remote collaboration.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What opportunities are there for career advancement?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>We're committed to helping our employees grow their careers. We offer:</p>
                                <ul>
                                    <li>Clear career paths with defined progression opportunities</li>
                                    <li>Regular performance reviews and development planning</li>
                                    <li>Internal mobility across teams and departments</li>
                                    <li>Leadership development programs</li>
                                    <li>Mentorship from senior team members</li>
                                    <li>Training and professional development budgets</li>
                                </ul>
                                <p>Many of our leaders have grown their careers within the company, and we prioritize internal promotions when possible.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What technologies and tools does your team use?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#careerFaqAccordion">
                            <div class="accordion-body">
                                <p>We use a variety of modern technologies and tools across our organization, including:</p>
                                <ul>
                                    <li><strong>Development:</strong> JavaScript (React, Node.js), Python, .NET, Java, Docker, Kubernetes</li>
                                    <li><strong>Cloud:</strong> AWS, Azure, Google Cloud Platform</li>
                                    <li><strong>Database:</strong> PostgreSQL, MongoDB, SQL Server, Redis</li>
                                    <li><strong>DevOps:</strong> GitHub, Jenkins, GitLab CI/CD, Terraform</li>
                                    <li><strong>Collaboration:</strong> Slack, Microsoft Teams, Jira, Confluence</li>
                                    <li><strong>Design:</strong> Figma, Adobe Creative Suite</li>
                                </ul>
                                <p>We're always evaluating and adopting new technologies that help us deliver better solutions for our clients.</p>
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
                <h5 class="modal-title" id="resumeModalLabel">Join Our Talent Network</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="resume-form" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstName" required>
                            <div class="invalid-feedback">
                                Please provide your first name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastName" required>
                            <div class="invalid-feedback">
                                Please provide your last name.
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">
                            Please provide a valid email address.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn Profile URL</label>
                        <input type="url" class="form-control" id="linkedin">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jobInterest" class="form-label">Areas of Interest <span class="text-danger">*</span></label>
                        <select class="form-select" id="jobInterest" required>
                            <option value="" selected disabled>Select an area of interest</option>
                            <option value="Software Development">Software Development</option>
                            <option value="IT & Infrastructure">IT & Infrastructure</option>
                            <option value="Data Analytics">Data Analytics & Business Intelligence</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Product Management">Product Management</option>
                            <option value="UX/UI Design">UX/UI Design</option>
                            <option value="Sales & Marketing">Sales & Marketing</option>
                            <option value="Customer Success">Customer Success</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select an area of interest.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="experience" class="form-label">Years of Experience <span class="text-danger">*</span></label>
                        <select class="form-select" id="experience" required>
                            <option value="" selected disabled>Select years of experience</option>
                            <option value="0-1">0-1 years</option>
                            <option value="1-3">1-3 years</option>
                            <option value="3-5">3-5 years</option>
                            <option value="5-10">5-10 years</option>
                            <option value="10+">10+ years</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your years of experience.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="resumeUpload" class="form-label">Upload Resume <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="resumeUpload" accept=".pdf,.doc,.docx" required>
                        <div class="form-text">Accepted formats: PDF, DOC, DOCX. Max file size: 5MB.</div>
                        <div class="invalid-feedback">
                            Please upload your resume.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="coverLetter" class="form-label">Brief Introduction (Optional)</label>
                        <textarea class="form-control" id="coverLetter" rows="3" placeholder="Tell us a bit about yourself and what you're looking for in your next role"></textarea>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="privacyConsent" required>
                        <label class="form-check-label" for="privacyConsent">I consent to the processing of my personal data according to the Privacy Policy <span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            You must agree to the privacy policy.
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="resume-form" class="btn btn-primary">Submit Application</button>
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

/* Contact Styles */
.contact-method {
    background-color: white;
    transition: all 0.3s ease;
}

.contact-method:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
}

.contact-icon {
    font-size: 40px;
    color: #0d6efd;
}

/* Modal Styles */
.modal-header {
    background-color: #f8f9fa;
}

.modal-title {
    font-weight: 600;
}

/* Responsive Adjustments */
@media (max-width: 991px) {
    .page-title {
        font-size: 2.5rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    .career-hero {
        padding: 80px 0 50px;
    }
    
    .page-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 1.75rem;
    }
}


</style>