<style>

/* Additional CSS for Strategy and Intelligent Automation modals */
.steps-list {
  counter-reset: step-counter;
  list-style: none;
  padding-left: 0;
}

.steps-list li {
  position: relative;
  padding-left: 50px;
  margin-bottom: 25px;
  counter-increment: step-counter;
}

.steps-list li::before {
  content: counter(step-counter);
  position: absolute;
  left: 0;
  top: 0;
  width: 36px;
  height: 36px;
  background-color: #0d6efd;
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
}

.steps-list h5 {
  margin-bottom: 5px;
  font-weight: 600;
}

.steps-list p {
  margin-bottom: 0;
}

/* Card styling */
.card {
  border-radius: 8px;
  border: 1px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 15px rgba(0,0,0,0.1);
}

.card-title {
  font-weight: 600;
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.card-title i {
  font-size: 1.25rem;
}

.modal-footer {
  border-top: 1px solid rgba(0,0,0,0.1);
}

.modal-header {
  border-bottom: 1px solid rgba(0,0,0,0.1);
}

</style>

<!-- IT Managed Services Modal -->
<div class="modal fade" id="it-managed-services-modal" tabindex="-1" aria-labelledby="itManagedServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itManagedServicesModalLabel">IT Managed Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Comprehensive IT Management Solutions</h2>
              <p class="lead">Optimize your technology infrastructure while reducing operational costs</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-gear-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>How We Can Help</h3>
          <p>Our IT Managed Services provide comprehensive technology management that allows you to focus on your core business, while we ensure your systems run optimally. From monitoring and maintenance to support and strategic guidance, we offer end-to-end solutions tailored to your specific needs.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.9%</p>
                <p class="label">Average uptime for our managed clients</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">30%</p>
                <p class="label">Average cost reduction</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">24/7</p>
                <p class="label">Continuous monitoring & support</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Reduced IT operational costs</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved system reliability</li>
                  <li><i class="bi bi-check-circle-fill"></i> 24/7 monitoring and support</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Proactive issue resolution</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced security measures</li>
                  <li><i class="bi bi-check-circle-fill"></i> Predictable monthly costs</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Managed Services Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-display text-primary"></i> 24/7 System Monitoring</h5>
              <p>Continuous monitoring of your servers, networks, and critical infrastructure to detect and address issues before they impact your business.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-headset text-primary"></i> Help Desk Support</h5>
              <p>Responsive technical support for your team, available through multiple channels to quickly resolve user issues and minimize downtime.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> Network Management</h5>
              <p>Complete oversight of your network infrastructure to ensure optimal performance, security, and reliability across your organization.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Since implementing their managed IT services, we've experienced 99.9% uptime and reduced our IT support costs by 30%. Their proactive approach has virtually eliminated the disruptive emergencies we used to face regularly."</em></p>
              <p class="mb-0 text-end"><strong>— Financial Services Client</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to optimize your IT operations?</h4>
            <p>Let's discuss how our Managed IT Services can support your business goals.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule a Consultation</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Cloud Transformation Services Modal -->
<div class="modal fade" id="cloud-transformation-services-modal" tabindex="-1" aria-labelledby="cloudTransformationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cloudTransformationServicesModalLabel">Cloud Transformation Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Accelerate Digital Innovation with Cloud</h2>
              <p class="lead">Transform your business with scalable, efficient cloud solutions</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-cloud-arrow-up-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Driving Business Transformation</h3>
          <p>Our Cloud Transformation Services help organizations leverage the power of cloud technologies to achieve greater agility, efficiency, and innovation. Whether you're looking to migrate existing applications, modernize your infrastructure, or develop cloud-native solutions, our expert team guides you through every step of your cloud journey.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">Average IT cost reduction</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">60%</p>
                <p class="label">Faster deployment times</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.99%</p>
                <p class="label">Service availability</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced business agility</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced capital expenditure</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved scalability</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Advanced security capabilities</li>
                  <li><i class="bi bi-check-circle-fill"></i> Global accessibility</li>
                  <li><i class="bi bi-check-circle-fill"></i> Disaster recovery & resilience</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Cloud Solutions Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-2 text-primary"></i> Cloud Migration Strategy</h5>
              <p>Comprehensive assessment and planning to determine the optimal migration approach for your applications and data, whether it's rehosting, replatforming, refactoring, or rebuilding.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-clouds text-primary"></i> Multi-Cloud Management</h5>
              <p>Unified management and governance across multiple cloud providers, enabling you to leverage the best services from each platform while maintaining control and visibility.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up-arrow text-primary"></i> Cloud Cost Optimization</h5>
              <p>Continuous monitoring and analysis of cloud usage to identify cost-saving opportunities, implement right-sizing strategies, and optimize your cloud investment.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their cloud transformation expertise helped us migrate our legacy systems to a modern cloud infrastructure in half the expected time. We've seen a 35% reduction in operational costs and significantly improved our ability to launch new features quickly."</em></p>
              <p class="mb-0 text-end"><strong>— E-commerce Enterprise Client</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to transform your business with cloud?</h4>
            <p>Let us help you develop and implement a cloud strategy that aligns with your business objectives.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule a Cloud Assessment</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Data Analytics Services Modal -->
<div class="modal fade" id="data-analytics-services-modal" tabindex="-1" aria-labelledby="dataAnalyticsServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataAnalyticsServicesModalLabel">Data Analytics Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Turn Data Into Actionable Insights</h2>
              <p class="lead">Unlock the power of your data assets to drive better decision-making</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-bar-chart-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Data-Driven Decision Making</h3>
          <p>Our Data Analytics Services transform your raw data into valuable insights that drive strategic decision-making and create competitive advantages. We help you harness the full potential of your data assets through advanced analytics techniques, powerful visualization tools, and tailored solutions that address your specific business challenges.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">3x</p>
                <p class="label">Faster time-to-insight</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">25%</p>
                <p class="label">Average revenue increase</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">360°</p>
                <p class="label">Customer view</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced decision-making</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved operational efficiency</li>
                  <li><i class="bi bi-check-circle-fill"></i> Identify new revenue opportunities</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Deeper customer insights</li>
                  <li><i class="bi bi-check-circle-fill"></i> Risk reduction</li>
                  <li><i class="bi bi-check-circle-fill"></i> Competitive advantage</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Data Analytics Capabilities:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-pie-chart text-primary"></i> Business Intelligence</h5>
              <p>Comprehensive BI solutions that transform your data into interactive dashboards and reports, providing real-time insights into key performance indicators and business metrics.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up text-primary"></i> Predictive Analytics</h5>
              <p>Advanced statistical models and machine learning algorithms that analyze historical data to forecast future trends, identify patterns, and predict outcomes with high accuracy.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-bar-chart-steps text-primary"></i> Data Visualization</h5>
              <p>Intuitive visual representations of complex data sets that make information more accessible and actionable for stakeholders at all levels of your organization.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their data analytics team helped us consolidate data from multiple sources and build a comprehensive customer analytics platform. We can now predict customer behavior with 82% accuracy and have increased our cross-selling revenue by 28%."</em></p>
              <p class="mb-0 text-end"><strong>— Retail Chain Client</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to leverage your data for strategic advantage?</h4>
            <p>Let our analytics experts help you unlock the full potential of your data assets.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Request a Data Assessment</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- IT Training Services Modal -->
<div class="modal fade" id="it-training-services-modal" tabindex="-1" aria-labelledby="itTrainingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itTrainingServicesModalLabel">IT Training Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Empower Your Team with Essential Tech Skills</h2>
              <p class="lead">Comprehensive training programs tailored to your organization's needs</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Bridging the Skills Gap</h3>
          <p>Our IT Training Services equip your team with the knowledge and skills they need to excel in today's technology-driven environment. We offer customized training programs that cover the latest tools, methodologies, and best practices across a wide range of technical domains, delivered through engaging and interactive learning experiences.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">92%</p>
                <p class="label">Certification pass rate</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">45%</p>
                <p class="label">Productivity increase</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">20+</p>
                <p class="label">Technology domains</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Increased team productivity</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved employee retention</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced external support costs</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced innovation capacity</li>
                  <li><i class="bi bi-check-circle-fill"></i> Better risk management</li>
                  <li><i class="bi bi-check-circle-fill"></i> Future-ready workforce</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Training Offerings Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-journal-text text-primary"></i> Customized Curriculums</h5>
              <p>Tailored training programs designed to address your organization's specific skill gaps and align with your business objectives and technology stack.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-laptop text-primary"></i> Hands-on Workshops</h5>
              <p>Interactive, practical sessions where participants apply concepts in real-world scenarios, reinforcing learning through direct experience and problem-solving.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-award text-primary"></i> Certification Preparation</h5>
              <p>Structured programs that prepare your team for industry-recognized certifications, enhancing their credentials and validating their expertise.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"After implementing their comprehensive cloud training program, our IT team successfully migrated and managed our cloud infrastructure without external consultants. The hands-on workshops and real-world scenarios were particularly effective in building practical skills."</em></p>
              <p class="mb-0 text-end"><strong>— Healthcare Provider</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to upskill your team?</h4>
            <p>Let us create a customized training program that addresses your specific technology needs.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule a Training Consultation</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- AI Services Modal -->
<div class="modal fade" id="ai-services-modal" tabindex="-1" aria-labelledby="aiServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aiServicesModalLabel">AI Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Transform Your Business with Artificial Intelligence</h2>
              <p class="lead">Harness the power of AI to solve complex challenges and drive innovation</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-cpu-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>AI-Powered Transformation</h3>
          <p>Our AI Services help organizations leverage advanced artificial intelligence technologies to enhance operations, improve customer experiences, and create new business opportunities. We combine deep technical expertise with strategic business thinking to deliver AI solutions that address real-world challenges and generate measurable value.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">70%</p>
                <p class="label">Automation of routine tasks</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">35%</p>
                <p class="label">Improved decision accuracy</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">3X</p>
                <p class="label">Faster insights delivery</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced operational efficiency</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved decision-making</li>
                  <li><i class="bi bi-check-circle-fill"></i> Personalized customer experiences</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> New revenue opportunities</li>
                  <li><i class="bi bi-check-circle-fill"></i> Predictive capabilities</li>
                  <li><i class="bi bi-check-circle-fill"></i> Competitive differentiation</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our AI Solutions Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-gear-wide-connected text-primary"></i> Machine Learning Solutions</h5>
              <p>Custom ML models that learn from your data to automate complex processes, detect patterns, and make predictions that drive better business outcomes.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-chat-text text-primary"></i> Natural Language Processing</h5>
              <p>Advanced NLP solutions that enable machines to understand, interpret, and generate human language, powering applications like chatbots, sentiment analysis, and document processing.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-camera text-primary"></i> Computer Vision Applications</h5>
              <p>Computer vision systems that can analyze and interpret visual data, enabling capabilities like object detection, facial recognition, quality control, and automated inspection.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their AI team developed a custom computer vision solution that automated our quality control process, reducing defects by 87% and inspection costs by 65%. The ROI was evident within the first three months of implementation."</em></p>
              <p class="mb-0 text-end"><strong>— Manufacturing Industry Client</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to explore AI opportunities for your business?</h4>
            <p>Let's identify the AI solutions that can deliver the greatest value for your organization.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule an AI Discovery Session</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Domain Services Modal -->
<div class="modal fade" id="domain-services-modal" tabindex="-1" aria-labelledby="domainServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="domainServicesModalLabel">Domain Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Secure and Manage Your Online Identity</h2>
              <p class="lead">Comprehensive domain management solutions for your digital presence</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-globe"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Your Digital Foundation</h3>
          <p>Our Domain Services provide complete management of your online identity, from domain registration and renewal to security and optimization. We ensure your domain assets are properly secured, efficiently managed, and strategically aligned with your business objectives.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.9%</p>
                <p class="label">Domain uptime</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">100%</p>
                <p class="label">Renewal compliance</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">24/7</p>
                <p class="label">Monitoring & support</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Secure brand protection</li>
                  <li><i class="bi bi-check-circle-fill"></i> Centralized domain management</li>
                  <li><i class="bi bi-check-circle-fill"></i> Never miss critical renewals</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Optimized DNS performance</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced security measures</li>
                  <li><i class="bi bi-check-circle-fill"></i> Expert technical support</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Domain Services Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-earmark-text text-primary"></i> Domain Registration</h5>
              <p>Comprehensive domain registration services across all major TLDs (Top Level Domains), including strategic guidance on domain selection and portfolio management.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> DNS Management</h5>
              <p>Expert configuration and optimization of your Domain Name System to ensure reliability, performance, and proper routing of your web traffic.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-lock text-primary"></i> Domain Security</h5>
              <p>Advanced protection measures including DNSSEC, domain locking, privacy protection, and monitoring to safeguard your domain assets from threats.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"After experiencing a domain hijacking attempt, we switched to their domain management services. Their security protocols and proactive monitoring have given us peace of mind, and their DNS optimization reduced our website load times by 40%."</em></p>
              <p class="mb-0 text-end"><strong>— E-commerce Business Owner</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to secure and optimize your domain assets?</h4>
            <p>Let our domain experts help you establish a strong and secure online presence.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Get Domain Management Support</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Operating Model Services Modal -->
<div class="modal fade" id="operating-model-services-modal" tabindex="-1" aria-labelledby="operatingModelServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="operatingModelServicesModalLabel">Operating Model Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Transform How Your Business Delivers Value</h2>
              <p class="lead">Redesign your organizational structure, processes, and technologies for optimal performance</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-diagram-3-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Business Transformation</h3>
          <p>Our Operating Model Services help organizations redesign how they deliver value to customers. We work with you to transform your organizational structure, business processes, technology infrastructure, and governance mechanisms to create a more efficient, agile, and customer-focused operation that can adapt to changing market demands.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">Average efficiency gain</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">60%</p>
                <p class="label">Faster time-to-market</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">30%</p>
                <p class="label">Cost reduction</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced operational efficiency</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved customer experience</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced operational costs</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Increased business agility</li>
                  <li><i class="bi bi-check-circle-fill"></i> Better cross-functional collaboration</li>
                  <li><i class="bi bi-check-circle-fill"></i> Clearer accountability</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Operating Model Services Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-bezier2 text-primary"></i> Business Process Redesign</h5>
              <p>Comprehensive analysis and optimization of your core business processes to eliminate inefficiencies, reduce costs, and improve customer outcomes.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-people text-primary"></i> Organizational Alignment</h5>
              <p>Restructuring of roles, responsibilities, and reporting relationships to create a more customer-focused and responsive organization that can execute strategy effectively.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-hdd-network text-primary"></i> Technology Integration</h5>
              <p>Strategic alignment of your technology architecture and capabilities with your business processes and organizational structure to enable seamless operations.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their operating model transformation helped us pivot from a product-centric to a customer-centric organization. Our new process architecture reduced delivery times by 50% and improved customer satisfaction scores by 35%."</em></p>
              <p class="mb-0 text-end"><strong>— Insurance Industry Leader</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to transform your operating model?</h4>
            <p>Let us help you design an organizational structure and process architecture that delivers superior results.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule a Transformation Workshop</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Cybersecurity Modal -->
<div class="modal fade" id="cybersecurity-modal" tabindex="-1" aria-labelledby="cybersecurityModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cybersecurityModalLabel">Cybersecurity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Protect Your Business from Evolving Threats</h2>
              <p class="lead">Comprehensive security solutions to safeguard your critical assets</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Enterprise Protection</h3>
          <p>Our Cybersecurity services provide robust protection for your business against the ever-evolving landscape of digital threats. We deliver comprehensive security solutions that identify vulnerabilities, protect your critical assets, detect and respond to threats, and ensure business continuity even in the face of security incidents.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.9%</p>
                <p class="label">Threat detection rate</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">85%</p>
                <p class="label">Reduction in security incidents</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">24/7</p>
                <p class="label">Security monitoring</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Comprehensive risk reduction</li>
                  <li><i class="bi bi-check-circle-fill"></i> Regulatory compliance</li>
                  <li><i class="bi bi-check-circle-fill"></i> Proactive threat prevention</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Rapid incident response</li>
                  <li><i class="bi bi-check-circle-fill"></i> Business continuity assurance</li>
                  <li><i class="bi bi-check-circle-fill"></i> Customer trust preservation</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Cybersecurity Services Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-earmark-ruled text-primary"></i> Security Assessments</h5>
              <p>Comprehensive evaluation of your security posture to identify vulnerabilities, assess risks, and develop a prioritized roadmap for security improvements.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-shaded text-primary"></i> Threat Detection & Response</h5>
              <p>Advanced monitoring and response capabilities that quickly identify security threats and contain them before they can impact your business.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-clipboard-check text-primary"></i> Compliance Management</h5>
              <p>Expert guidance and solutions to help you meet industry-specific security regulations and standards, avoiding penalties and building customer trust.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"After experiencing a ransomware attack, we engaged their cybersecurity team to rebuild our security program. Their comprehensive approach not only prevented further incidents but also streamlined our compliance processes, saving us countless hours and resources."</em></p>
              <p class="mb-0 text-end"><strong>— Healthcare Organization</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to strengthen your security posture?</h4>
            <p>Let our security experts help you protect your business from evolving cyber threats.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Request a Security Assessment</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Resource Outsourcing Services Modal -->
<div class="modal fade" id="resource-outsourcing-services-modal" tabindex="-1" aria-labelledby="resourceOutsourcingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resourceOutsourcingServicesModalLabel">Resource Outsourcing Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Access Specialized Talent On Demand</h2>
              <p class="lead">Flexible resource solutions to augment your team and accelerate your projects</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Talent Solutions</h3>
          <p>Our Resource Outsourcing Services provide access to specialized talent and expertise to help you execute critical projects, fill capability gaps, and achieve your business objectives. Whether you need short-term specialists or long-term dedicated teams, we deliver the right resources with the right skills at the right time.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">48h</p>
                <p class="label">Average resource placement time</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">Cost reduction vs. hiring</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">95%</p>
                <p class="label">Client satisfaction rate</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Access to specialized skills</li>
                  <li><i class="bi bi-check-circle-fill"></i> Faster project delivery</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced recruitment costs</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Flexible scaling of resources</li>
                  <li><i class="bi bi-check-circle-fill"></i> Lower operational overhead</li>
                  <li><i class="bi bi-check-circle-fill"></i> Focus on core business</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Outsourcing Solutions Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-person-plus text-primary"></i> Staff Augmentation</h5>
              <p>Flexible talent solutions that provide skilled professionals to supplement your in-house team on a project basis, helping you address skill gaps and manage workload fluctuations.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-people text-primary"></i> Dedicated Development Teams</h5>
              <p>Fully managed teams of specialists who work exclusively on your projects, providing consistent quality, knowledge retention, and ongoing support.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-kanban text-primary"></i> Project-based Resources</h5>
              <p>Strategic allocation of specialized resources for specific initiatives, ensuring you have the right expertise to successfully complete critical projects on time and within budget.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"When we needed to accelerate our digital transformation initiative, their resource outsourcing team provided us with specialized talent that would have taken months to recruit. The team integrated seamlessly with our staff and delivered our project six weeks ahead of schedule."</em></p>
              <p class="mb-0 text-end"><strong>— Retail Chain CIO</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to augment your team with specialized talent?</h4>
            <p>Let us help you identify and secure the resources you need to achieve your business goals.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Discuss Your Resource Needs</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- IT Infrastructure Services Modal -->
<div class="modal fade" id="it-infrastructure-services-modal" tabindex="-1" aria-labelledby="itInfrastructureServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itInfrastructureServicesModalLabel">IT Infrastructure Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Build a Resilient Technology Foundation</h2>
              <p class="lead">Scalable, reliable, and secure infrastructure solutions for your business</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-hdd-network-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Enterprise-Grade Infrastructure</h3>
          <p>Our IT Infrastructure Services help you design, implement, and manage a robust technical foundation that supports your business operations and growth objectives. We deliver scalable, resilient, and secure infrastructure solutions that align with your business strategy and provide the performance and reliability your organization needs.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.99%</p>
                <p class="label">Infrastructure uptime</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">45%</p>
                <p class="label">Average cost optimization</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">3X</p>
                <p class="label">Faster deployment</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced business continuity</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved operational efficiency</li>
                  <li><i class="bi bi-check-circle-fill"></i> Scalable capacity on demand</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Reduced system downtime</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced security posture</li>
                  <li><i class="bi bi-check-circle-fill"></i> Optimized infrastructure costs</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Infrastructure Solutions Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> Network Architecture</h5>
              <p>Strategic design and implementation of secure, high-performance network infrastructure that connects your people, applications, and data across your organization.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-server text-primary"></i> Server Management</h5>
              <p>Comprehensive provisioning, configuration, monitoring, and maintenance of your server environment to ensure optimal performance and reliability.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-device-hdd text-primary"></i> Storage Solutions</h5>
              <p>Scalable and resilient data storage architecture that ensures data accessibility, protection, and recovery capabilities to support your business continuity objectives.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their infrastructure team redesigned our entire corporate network, implementing a hybrid cloud solution that increased performance by 200% while reducing our infrastructure costs by 35%. The solution has scaled seamlessly as our business has grown."</em></p>
              <p class="mb-0 text-end"><strong>— Technology Company CTO</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to optimize your IT infrastructure?</h4>
            <p>Let our infrastructure experts help you build a technology foundation that supports your business objectives.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Request an Infrastructure Assessment</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Application Services Modal -->
<div class="modal fade" id="application-services-modal" tabindex="-1" aria-labelledby="applicationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applicationServicesModalLabel">Application Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Create, Modernize, and Maintain Business Applications</h2>
              <p class="lead">End-to-end application solutions to power your business processes</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-window-stack"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Software Solutions</h3>
          <p>Our Application Services provide comprehensive software development and management solutions across the entire application lifecycle. From initial concept and design to development, deployment, and ongoing enhancement, we deliver high-quality applications that drive your business forward and create exceptional user experiences.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">30%</p>
                <p class="label">Faster time-to-market</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">50%</p>
                <p class="label">Reduced defect rate</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">25%</p>
                <p class="label">Lower maintenance costs</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Tailored business solutions</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced user experiences</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved process efficiency</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Faster innovation cycles</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced technical debt</li>
                  <li><i class="bi bi-check-circle-fill"></i> Seamless integration</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Application Services Include:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-code-square text-primary"></i> Custom Development</h5>
              <p>Bespoke application development tailored to your unique business requirements, creating software solutions that address your specific challenges and opportunities.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-arrow-repeat text-primary"></i> Legacy Modernization</h5>
              <p>Strategic transformation of outdated applications into modern, agile solutions that leverage current technologies and architectures to improve performance and reduce costs while maintaining business continuity.</p>
            </div>
            <div class="feature-item mt-3">
              <h5><i class="bi bi-tools text-primary"></i> Application Management</h5>
              <p>Comprehensive management of your application portfolio, including monitoring, maintenance, and support to ensure optimal performance and alignment with business objectives.</p>
            </div>
          </div>

            <div class="case-study mt-5">
                <h4>Success Story</h4>
                <div class="case-study-content p-4 bg-light rounded">
                <p><em>"Their application development team helped us build a custom CRM solution that integrated seamlessly with our existing systems. The new application improved our sales team's efficiency by 40% and provided valuable insights into customer behavior."</em></p>
                <p class="mb-0 text-end"><strong>— E-commerce Company CEO</strong></p>
                </div>
            </div>

            <div class="service-cta mt-5 text-center">
                <h4>Ready to transform your application landscape?</h4>
                <p>Let us help you create, modernize, and manage applications that drive your business success.</p>
                <a href="/contact" class="btn btn-primary btn-lg">Schedule a Consultation</a>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>
    </div>
  </div>
</div>


<!-- Strategy Consulting Services Modal -->
<div class="modal fade" id="strategy-consulting-services-modal" tabindex="-1" aria-labelledby="strategyConsultingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="strategyConsultingServicesModalLabel">Strategy Consulting Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Navigate Digital Transformation Successfully</h2>
              <p class="lead">Strategic guidance to align technology with business objectives</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-compass-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Technology Strategy</h3>
          <p>Our Strategy Consulting Services help organizations define and implement technology roadmaps that drive innovation, growth, and competitive advantage. We combine deep industry expertise, business acumen, and technical knowledge to develop strategies that transform your digital capabilities and create measurable business value.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">32%</p>
                <p class="label">Average ROI increase</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">Faster strategy execution</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">85%</p>
                <p class="label">Success rate</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Clear technology vision</li>
                  <li><i class="bi bi-check-circle-fill"></i> Prioritized investment roadmap</li>
                  <li><i class="bi bi-check-circle-fill"></i> Accelerated digital transformation</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Alignment of IT with business goals</li>
                  <li><i class="bi bi-check-circle-fill"></i> Reduced risk in technology decisions</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced innovation capabilities</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Strategy Consulting Offerings:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shuffle text-primary"></i> Digital Transformation Strategy</h5>
              <p>Comprehensive frameworks and roadmaps to guide your organization's digital journey, ensuring that technology investments deliver meaningful business outcomes and competitive advantage.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-search text-primary"></i> Technology Assessment</h5>
              <p>In-depth evaluation of your current technology ecosystem to identify strengths, weaknesses, gaps, and opportunities for improvement that align with your business objectives.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-map text-primary"></i> IT Roadmap Development</h5>
              <p>Strategic planning that translates business goals into actionable technology initiatives, with clear priorities, dependencies, resource requirements, and timelines for execution.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their strategic consulting team helped us pivot our entire technology approach during a critical market shift. The roadmap they developed aligned perfectly with our business goals, resulting in 27% revenue growth and 35% improved operational efficiency within 18 months."</em></p>
              <p class="mb-0 text-end"><strong>— Multinational Logistics Company CEO</strong></p>
            </div>
          </div>
          
          <h4 class="mt-5">Our Strategic Consulting Process</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>Discovery & Assessment</h5>
              <p>Comprehensive analysis of your current state, business objectives, market position, and technology capabilities.</p>
            </li>
            <li>
              <h5>Strategy Development</h5>
              <p>Collaborative creation of a technology strategy and roadmap aligned with your business goals and market opportunities.</p>
            </li>
            <li>
              <h5>Implementation Planning</h5>
              <p>Detailed execution framework including initiatives, timelines, resource requirements, and governance structures.</p>
            </li>
            <li>
              <h5>Execution Support</h5>
              <p>Ongoing guidance and expertise to ensure successful implementation of the strategy and adaptation to changing conditions.</p>
            </li>
          </ul>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to develop a winning technology strategy?</h4>
            <p>Let our strategic consultants help you chart a course for digital success.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule a Strategy Session</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<!-- Intelligent Automation Services Modal -->
<div class="modal fade" id="intelligent-automation-services-modal" tabindex="-1" aria-labelledby="intelligentAutomationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="intelligentAutomationServicesModalLabel">Intelligent Automation Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>Transform Operations with Intelligent Automation</h2>
              <p class="lead">Streamline processes and enhance productivity through advanced automation solutions</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-robot"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>Next-Generation Automation</h3>
          <p>Our Intelligent Automation Services help organizations streamline operations, reduce costs, and improve quality by automating routine and complex business processes. By combining robotic process automation (RPA), artificial intelligence, and workflow optimization, we deliver end-to-end solutions that transform how work gets done and free your people to focus on higher-value activities.</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">80%</p>
                <p class="label">Task automation potential</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">65%</p>
                <p class="label">Cost reduction</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">300%</p>
                <p class="label">ROI on automation</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>Key Benefits</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced operational efficiency</li>
                  <li><i class="bi bi-check-circle-fill"></i> Significant cost reduction</li>
                  <li><i class="bi bi-check-circle-fill"></i> Improved process quality</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> Accelerated processing times</li>
                  <li><i class="bi bi-check-circle-fill"></i> Better employee experience</li>
                  <li><i class="bi bi-check-circle-fill"></i> Enhanced compliance</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>Our Intelligent Automation Solutions:</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-cpu text-primary"></i> Robotic Process Automation</h5>
              <p>Software robots that mimic human interactions with digital systems to execute rule-based tasks with speed, accuracy, and consistency, dramatically reducing processing times and error rates.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-2 text-primary"></i> Business Process Automation</h5>
              <p>End-to-end automation of complex business workflows that span multiple systems and departments, orchestrating people, systems, and robots to optimize entire processes.</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-braces text-primary"></i> Cognitive Automation</h5>
              <p>Advanced solutions that combine AI technologies like machine learning, natural language processing, and computer vision to automate tasks requiring judgment, analysis, and decision-making.</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>Success Story</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>"Their intelligent automation team transformed our claims processing operations. By implementing RPA and cognitive document processing, we reduced processing time from 5 days to just 3 hours, with a 90% reduction in errors and annual savings of $2.3 million."</em></p>
              <p class="mb-0 text-end"><strong>— Insurance Company Operations Director</strong></p>
            </div>
          </div>
          
          <h4 class="mt-5">Our Automation Approach</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>Process Discovery & Analysis</h5>
              <p>Identifying automation opportunities through detailed process mapping, data analysis, and ROI assessment.</p>
            </li>
            <li>
              <h5>Solution Design</h5>
              <p>Creating the optimal automation architecture combining RPA, AI, and workflow tools to meet your specific requirements.</p>
            </li>
            <li>
              <h5>Development & Implementation</h5>
              <p>Building, testing, and deploying your automation solution with a focus on scalability, reliability, and governance.</p>
            </li>
            <li>
              <h5>Continuous Improvement</h5>
              <p>Ongoing monitoring, optimization, and enhancement of your automation ecosystem to maximize value and adapt to changing needs.</p>
            </li>
          </ul>
          
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-lightning-charge text-primary me-2"></i>Quick-Start Automation</h5>
                  <p class="card-text">Rapidly implement automation for simple, high-volume processes with our accelerated methodology. See results in as little as 4-6 weeks.</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Rapid assessment</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Pre-built components</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Quick deployment</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-building-gear text-primary me-2"></i>Enterprise Automation</h5>
                  <p class="card-text">Comprehensive automation program for large-scale transformation across multiple processes and departments.</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Center of Excellence setup</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Governance framework</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Continuous delivery pipeline</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>Ready to transform your operations with intelligent automation?</h4>
            <p>Let our automation experts help you identify opportunities and implement solutions that deliver measurable results.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Schedule an Automation Assessment</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</div>

