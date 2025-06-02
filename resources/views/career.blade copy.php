@extends('layouts.app')

@section('title', 'Career Opportunities | BV Logic')
@section('styles')
<style>
    /* Global styles for the page */
    .career-page {
        background-color: #f9f9f9;
    }
    
    /* Header styles */
    .page-header h1 {
        color: #2c3e50;
        font-weight: 700;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .page-header h1:hover .header-line {
        width: 120px;
    }
    
    .header-line {
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #3498db, #2980b9);
        margin: 15px auto 0;
        transition: all 0.3s ease;
        border-radius: 2px;
    }
    
    /* Card styles */
    .card {
        transition: all 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-body {
        border-radius: 8px;
    }
    
    /* Values list */
    .values-list li {
        padding: 10px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .values-list li:last-child {
        border-bottom: none;
    }
    
    .values-list i {
        color: #3498db;
        font-size: 18px;
    }
    
    /* Form styling */
    .form-control {
        padding: 12px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #3498db, #2980b9);
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #2980b9, #3498db);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    }
    
    /* Openings section */
    .openings-section {
        border-radius: 10px;
        background: linear-gradient(to right, #f5f7fa, #f1f4f8);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2rem;
        }
    }
</style>
@endsection
@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold" style="color: #2c3e50; margin-bottom: 1.5rem; position: relative; padding-bottom: 15px;">
                Career Opportunities
                <span style="display: block; width: 80px; height: 4px; background-color: #3498db; margin: 15px auto 0;"></span>
            </h1>
            <p class="lead">Join our team of innovators and make an impact</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2>Why Work With Us?</h2>
            <p>At BV Logic, we believe in creating an environment where talented individuals can thrive, innovate, and grow. We are constantly looking for passionate professionals who want to make a difference and contribute to cutting-edge solutions.</p>
            <p>We offer competitive compensation, opportunities for professional development, and a collaborative work culture that values diversity and inclusion.</p>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title">Our Core Values</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Innovation and excellence in everything we do</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Respect and integrity in all interactions</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Continuous learning and growth</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Work-life balance for our team members</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Client satisfaction through quality service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="bg-light p-4 p-md-5 rounded">
                <h2>Current Openings</h2>
                <div class="alert alert-info">
                    <h5 class="alert-heading">No Current Vacancies</h5>
                    <p class="mb-0">We don't have any open positions at the moment. Please check back later or send us your resume for future opportunities.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Submit Your Resume</h2>
                    <p class="text-center mb-4">Even though we don't have current openings, we're always interested in meeting talented professionals. Send us your resume, and we'll keep it on file for future opportunities.</p>
                    
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position of Interest</label>
                            <input type="text" class="form-control" id="position">
                        </div>
                        <div class="mb-3">
                            <label for="resume" class="form-label">Upload Resume (PDF only)</label>
                            <input type="file" class="form-control" id="resume" accept=".pdf" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Cover Letter / Additional Information</label>
                            <textarea class="form-control" id="message" rows="4"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection