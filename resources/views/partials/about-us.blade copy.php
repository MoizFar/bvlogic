<style>

/* About Section Styling */
.about-image {
  position: relative;
  margin-bottom: 30px;
}

.main-image {
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.experience-badge {
  position: absolute;
  right: -20px;
  bottom: 40px;
  width: 120px;
  height: 120px;
  background-color: var(--primary-color, #007bff);
  color: #fff;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.experience-badge .years {
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 1;
  margin-bottom: 5px;
}

.experience-badge .text {
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.accent-shape {
  position: absolute;
  width: 100px;
  height: 100px;
  background-color: rgba(var(--secondary-color-rgb, 108, 117, 125), 0.15);
  border-radius: 50%;
  top: -30px;
  left: -30px;
  z-index: -1;
}

/* About Content Styling */
.about-content h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 20px;
  /* color: var(--heading-color, #212529); */
}

.about-content .lead {
  font-size: 1.125rem;
  margin-bottom: 20px;
  color: var(--text-color, #495057);
}

/* Stats Section */
.stats-highlights {
  margin: 30px 0;
  text-align: center;
}

.stat-item {
  margin-bottom: 20px;
}

.stat-number {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  color: var(--primary-color, #007bff);
  margin-bottom: 5px;
}

.stat-label {
  display: block;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--text-muted, #6c757d);
}

/* Features Styling */
.features-row {
  margin: 30px 0;
}

.feature-item {
  margin-bottom: 30px;
  transition: transform 0.3s ease;
}

.feature-item:hover {
  transform: translateY(-5px);
}

.feature-item .icon {
  margin-bottom: 15px;
  width: 60px;
  height: 60px;
  background-color: rgba(var(--primary-color-rgb, 0, 123, 255), 0.1);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.feature-item .icon i {
  font-size: 1.5rem;
  color: var(--primary-color, #007bff);
}

.feature-item h4 {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 10px;
  /* color: var(--heading-color, #212529); */
}



/* CTA Button */
.cta-button {
  margin-top: 30px;
}

.cta-button .btn {
  padding: 10px 25px;
  margin-right: 10px;
  border-radius: 5px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.cta-button .btn-primary {
  background-color: var(--primary-color, #007bff);
  border-color: var(--primary-color, #007bff);
}

.cta-button .btn-outline-secondary {
  color: var(--secondary-color, #6c757d);
  border-color: var(--secondary-color, #6c757d);
}

.cta-button .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
  .experience-badge {
    width: 100px;
    height: 100px;
    right: 10px;
    bottom: 20px;
  }
  
  .experience-badge .years {
    font-size: 2rem;
  }
  
  .about-content h2 {
    font-size: 2rem;
  }
}

@media (max-width: 767.98px) {
  .stat-item {
    margin-bottom: 15px;
  }
  
  .feature-item {
    margin-bottom: 20px;
  }
}


/* About Section Styling - Improved Layout */
.about-content h2 {
  font-size: 2.2rem;
  font-weight: 600;
  margin-bottom: 1.5rem;
  line-height: 1.2;
  /* color: #333; */
}

.about-content .lead,
.about-content p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  /* color: #555; */
}

/* Features Styling - Fixed Layout */
.features-row {
  margin: 2rem 0;
}

.feature-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 1.5rem;
}

.feature-item .icon {
  margin-right: 1rem;
  flex-shrink: 0;
  width: 50px;
  height: 50px;
  background-color: rgba(0, 123, 255, 0.1);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.feature-item .icon i {
  font-size: 1.25rem;
  color: #0d6efd;
}

.feature-item .feature-content {
  flex-grow: 1;
}

.feature-item h4 {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
  /* color: #333; */
  line-height: 1.3;
}

.feature-item p {
  font-size: 0.95rem;
  color: #666;
  margin-bottom: 0;
  line-height: 1.5;
}
</style>
<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <!-- Left Column - Image -->
      <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
        <div class="about-image">

          <img src="{{ asset('uploads/about-square-12.webp') }}" alt="About Our Consulting Firm" class="img-fluid main-image">
          <!-- Kept original experience badge -->
         
          <!-- Added a subtle accent element using existing classes -->
          <div class="accent-shape"></div>
        </div>
         <div class="cta-button">
            <a href="{{ route('about') ?? '/about' }}" class="btn btn-primary">
                <i class="bi bi-arrow-right-circle me-2"></i>Learn More About Us
            </a>
        </div>
      </div>

      <!-- Right Column - Content -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="about-content">
          <!-- Updated heading but kept structure -->
          <h2>Transforming Businesses For Tomorrow's Success</h2>
          <p class="lead">We deliver strategic guidance and innovative solutions that help organizations navigate challenges and capitalize on opportunities in today's dynamic business landscape.</p>
          <p>With our data-driven approach and deep industry expertise, we partner with clients to optimize operations, drive growth, and achieve sustainable competitive advantage through digital transformation and operational excellence.</p>

        

         <!-- Updated HTML structure for feature items -->
        <div class="row features-row">
        <div class="col-md-6">
            <div class="feature-item">
            <div class="icon">
                <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="feature-content">
                <h4>Strategic Growth</h4>
                <p>Accelerate your business with tailored growth strategies designed for sustainable success.</p>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="feature-item">
            <div class="icon">
                <i class="bi bi-lightbulb"></i>
            </div>
            <div class="feature-content">
                <h4>Innovative Solutions</h4>
                <p>Leverage cutting-edge technologies and methodologies to solve complex business challenges.</p>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="feature-item">
            <div class="icon">
                <i class="bi bi-people"></i>
            </div>
            <div class="feature-content">
                <h4>Expert Consultants</h4>
                <p>Work with seasoned professionals bringing decades of industry and functional expertise.</p>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="feature-item">
            <div class="icon">
                <i class="bi bi-trophy"></i>
            </div>
            <div class="feature-content">
                <h4>Measurable Results</h4>
                <p>Achieve tangible outcomes with our proven methodologies and performance metrics.</p>
            </div>
            </div>
        </div>
        </div>

         
       
        </div>
      </div>
    </div>
  </div>
</section>


