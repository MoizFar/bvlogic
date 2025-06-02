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
        <h5 class="modal-title" id="itManagedServicesModalLabel">{{ __('service_modal.it_managed.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.it_managed.heading') }}</h2>
              <p class="lead">{{ __('service_modal.it_managed.subheading') }}</p>
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
          <h3>{{ __('service_modal.it_managed.how_title') }}</h3>
          <p>{{ __('service_modal.it_managed.how_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.it_managed.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.it_managed.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.it_managed.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.it_managed.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.it_managed.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.it_managed.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.it_managed.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.it_managed.services_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-display text-primary"></i> {{ __('service_modal.it_managed.feature1_title') }}</h5>
              <p>{{ __('service_modal.it_managed.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-headset text-primary"></i> {{ __('service_modal.it_managed.feature2_title') }}</h5>
              <p>{{ __('service_modal.it_managed.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> {{ __('service_modal.it_managed.feature3_title') }}</h5>
              <p>{{ __('service_modal.it_managed.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.it_managed.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.it_managed.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.it_managed.cta_heading') }}</h4>
            <p>{{ __('service_modal.it_managed.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.it_managed.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Cloud Transformation Services Modal -->
<div class="modal fade" id="cloud-transformation-services-modal" tabindex="-1" aria-labelledby="cloudTransformationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cloudTransformationServicesModalLabel">{{ __('service_modal.cloud.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.cloud.heading') }}</h2>
              <p class="lead">{{ __('service_modal.cloud.subheading') }}</p>
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
          <h3>{{ __('service_modal.cloud.transform_title') }}</h3>
          <p>{{ __('service_modal.cloud.transform_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cloud.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.cloud.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cloud.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.cloud.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cloud.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.cloud.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cloud.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.cloud.solutions_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-2 text-primary"></i> {{ __('service_modal.cloud.feature1_title') }}</h5>
              <p>{{ __('service_modal.cloud.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-clouds text-primary"></i> {{ __('service_modal.cloud.feature2_title') }}</h5>
              <p>{{ __('service_modal.cloud.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up-arrow text-primary"></i> {{ __('service_modal.cloud.feature3_title') }}</h5>
              <p>{{ __('service_modal.cloud.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.cloud.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.cloud.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.cloud.cta_heading') }}</h4>
            <p>{{ __('service_modal.cloud.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.cloud.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Data Analytics Services Modal -->
<div class="modal fade" id="data-analytics-services-modal" tabindex="-1" aria-labelledby="dataAnalyticsServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataAnalyticsServicesModalLabel">{{ __('service_modal.analytics.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.analytics.heading') }}</h2>
              <p class="lead">{{ __('service_modal.analytics.subheading') }}</p>
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
          <h3>{{ __('service_modal.analytics.decision_title') }}</h3>
          <p>{{ __('service_modal.analytics.decision_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.analytics.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.analytics.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.analytics.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.analytics.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.analytics.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.analytics.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.analytics.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.analytics.capabilities_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-pie-chart text-primary"></i> {{ __('service_modal.analytics.feature1_title') }}</h5>
              <p>{{ __('service_modal.analytics.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up text-primary"></i> {{ __('service_modal.analytics.feature2_title') }}</h5>
              <p>{{ __('service_modal.analytics.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-bar-chart-steps text-primary"></i> {{ __('service_modal.analytics.feature3_title') }}</h5>
              <p>{{ __('service_modal.analytics.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.analytics.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.analytics.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.analytics.cta_heading') }}</h4>
            <p>{{ __('service_modal.analytics.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.analytics.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- IT Training Services Modal -->
<div class="modal fade" id="it-training-services-modal" tabindex="-1" aria-labelledby="itTrainingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itTrainingServicesModalLabel">{{ __('service_modal.training.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.training.heading') }}</h2>
              <p class="lead">{{ __('service_modal.training.subheading') }}</p>
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
          <h3>{{ __('service_modal.training.skills_title') }}</h3>
          <p>{{ __('service_modal.training.skills_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.training.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.training.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.training.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.training.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.training.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.training.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.training.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.training.offerings_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-journal-text text-primary"></i> {{ __('service_modal.training.feature1_title') }}</h5>
              <p>{{ __('service_modal.training.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-laptop text-primary"></i> {{ __('service_modal.training.feature2_title') }}</h5>
              <p>{{ __('service_modal.training.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-award text-primary"></i> {{ __('service_modal.training.feature3_title') }}</h5>
              <p>{{ __('service_modal.training.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.training.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.training.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.training.cta_heading') }}</h4>
            <p>{{ __('service_modal.training.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.training.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- AI Services Modal -->
<div class="modal fade" id="ai-services-modal" tabindex="-1" aria-labelledby="aiServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aiServicesModalLabel">{{ __('service_modal.ai.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.ai.heading') }}</h2>
              <p class="lead">{{ __('service_modal.ai.subheading') }}</p>
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
          <h3>{{ __('service_modal.ai.transform_title') }}</h3>
          <p>{{ __('service_modal.ai.transform_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.ai.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.ai.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.ai.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.ai.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.ai.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.ai.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.ai.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.ai.solutions_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-gear-wide-connected text-primary"></i> {{ __('service_modal.ai.feature1_title') }}</h5>
              <p>{{ __('service_modal.ai.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-chat-text text-primary"></i> {{ __('service_modal.ai.feature2_title') }}</h5>
              <p>{{ __('service_modal.ai.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-camera text-primary"></i> {{ __('service_modal.ai.feature3_title') }}</h5>
              <p>{{ __('service_modal.ai.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.ai.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.ai.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.ai.cta_heading') }}</h4>
            <p>{{ __('service_modal.ai.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.ai.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Domain Services Modal -->
<div class="modal fade" id="domain-services-modal" tabindex="-1" aria-labelledby="domainServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="domainServicesModalLabel">{{ __('service_modal.domain.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.domain.heading') }}</h2>
              <p class="lead">{{ __('service_modal.domain.subheading') }}</p>
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
          <h3>{{ __('service_modal.domain.foundation_title') }}</h3>
          <p>{{ __('service_modal.domain.foundation_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.domain.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.domain.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.domain.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.domain.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.domain.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.domain.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.domain.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.domain.services_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-earmark-text text-primary"></i> {{ __('service_modal.domain.feature1_title') }}</h5>
              <p>{{ __('service_modal.domain.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> {{ __('service_modal.domain.feature2_title') }}</h5>
              <p>{{ __('service_modal.domain.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-lock text-primary"></i> {{ __('service_modal.domain.feature3_title') }}</h5>
              <p>{{ __('service_modal.domain.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.domain.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.domain.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.domain.cta_heading') }}</h4>
            <p>{{ __('service_modal.domain.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.domain.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Operating Model Services Modal -->
<div class="modal fade" id="operating-model-services-modal" tabindex="-1" aria-labelledby="operatingModelServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="operatingModelServicesModalLabel">{{ __('service_modal.operating.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.operating.heading') }}</h2>
              <p class="lead">{{ __('service_modal.operating.subheading') }}</p>
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
          <h3>{{ __('service_modal.operating.transform_title') }}</h3>
          <p>{{ __('service_modal.operating.transform_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.operating.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.operating.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.operating.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.operating.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.operating.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.operating.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.operating.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.operating.services_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-bezier2 text-primary"></i> {{ __('service_modal.operating.feature1_title') }}</h5>
              <p>{{ __('service_modal.operating.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-people text-primary"></i> {{ __('service_modal.operating.feature2_title') }}</h5>
              <p>{{ __('service_modal.operating.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-hdd-network text-primary"></i> {{ __('service_modal.operating.feature3_title') }}</h5>
              <p>{{ __('service_modal.operating.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.operating.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.operating.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.operating.cta_heading') }}</h4>
            <p>{{ __('service_modal.operating.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.operating.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Cybersecurity Modal -->
<div class="modal fade" id="cybersecurity-modal" tabindex="-1" aria-labelledby="cybersecurityModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cybersecurityModalLabel">{{ __('service_modal.cybersecurity.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.cybersecurity.heading') }}</h2>
              <p class="lead">{{ __('service_modal.cybersecurity.subheading') }}</p>
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
          <h3>{{ __('service_modal.cybersecurity.protection_title') }}</h3>
          <p>{{ __('service_modal.cybersecurity.protection_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cybersecurity.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.cybersecurity.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cybersecurity.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.cybersecurity.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.cybersecurity.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.cybersecurity.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.cybersecurity.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.cybersecurity.services_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-earmark-ruled text-primary"></i> {{ __('service_modal.cybersecurity.feature1_title') }}</h5>
              <p>{{ __('service_modal.cybersecurity.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-shaded text-primary"></i> {{ __('service_modal.cybersecurity.feature2_title') }}</h5>
              <p>{{ __('service_modal.cybersecurity.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-clipboard-check text-primary"></i> {{ __('service_modal.cybersecurity.feature3_title') }}</h5>
              <p>{{ __('service_modal.cybersecurity.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.cybersecurity.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.cybersecurity.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.cybersecurity.cta_heading') }}</h4>
            <p>{{ __('service_modal.cybersecurity.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.cybersecurity.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>




<!-- Resource Outsourcing Services Modal -->
<div class="modal fade" id="resource-outsourcing-services-modal" tabindex="-1" aria-labelledby="resourceOutsourcingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resourceOutsourcingServicesModalLabel">{{ __('service_modal.outsourcing.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.outsourcing.heading') }}</h2>
              <p class="lead">{{ __('service_modal.outsourcing.subheading') }}</p>
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
          <h3>{{ __('service_modal.outsourcing.talent_title') }}</h3>
          <p>{{ __('service_modal.outsourcing.talent_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.outsourcing.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.outsourcing.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.outsourcing.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.outsourcing.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.outsourcing.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.outsourcing.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.outsourcing.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.outsourcing.solutions_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-person-plus text-primary"></i> {{ __('service_modal.outsourcing.feature1_title') }}</h5>
              <p>{{ __('service_modal.outsourcing.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-people text-primary"></i> {{ __('service_modal.outsourcing.feature2_title') }}</h5>
              <p>{{ __('service_modal.outsourcing.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-kanban text-primary"></i> {{ __('service_modal.outsourcing.feature3_title') }}</h5>
              <p>{{ __('service_modal.outsourcing.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.outsourcing.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.outsourcing.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.outsourcing.cta_heading') }}</h4>
            <p>{{ __('service_modal.outsourcing.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.outsourcing.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- IT Infrastructure Services Modal -->
<div class="modal fade" id="it-infrastructure-services-modal" tabindex="-1" aria-labelledby="itInfrastructureServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itInfrastructureServicesModalLabel">{{ __('service_modal.infrastructure.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.infrastructure.heading') }}</h2>
              <p class="lead">{{ __('service_modal.infrastructure.subheading') }}</p>
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
          <h3>{{ __('service_modal.infrastructure.enterprise_title') }}</h3>
          <p>{{ __('service_modal.infrastructure.enterprise_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.infrastructure.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.infrastructure.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.infrastructure.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.infrastructure.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.infrastructure.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.infrastructure.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.infrastructure.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.infrastructure.solutions_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-3 text-primary"></i> {{ __('service_modal.infrastructure.feature1_title') }}</h5>
              <p>{{ __('service_modal.infrastructure.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-server text-primary"></i> {{ __('service_modal.infrastructure.feature2_title') }}</h5>
              <p>{{ __('service_modal.infrastructure.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-device-hdd text-primary"></i> {{ __('service_modal.infrastructure.feature3_title') }}</h5>
              <p>{{ __('service_modal.infrastructure.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.infrastructure.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.infrastructure.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.infrastructure.cta_heading') }}</h4>
            <p>{{ __('service_modal.infrastructure.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.infrastructure.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>



<!-- Application Services Modal -->
<div class="modal fade" id="application-services-modal" tabindex="-1" aria-labelledby="applicationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applicationServicesModalLabel">{{ __('service_modal.application.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.application.heading') }}</h2>
              <p class="lead">{{ __('service_modal.application.subheading') }}</p>
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
          <h3>{{ __('service_modal.application.solutions_title') }}</h3>
          <p>{{ __('service_modal.application.solutions_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.application.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.application.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.application.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.application.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.application.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.application.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.application.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.application.services_include') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-code-square text-primary"></i> {{ __('service_modal.application.feature1_title') }}</h5>
              <p>{{ __('service_modal.application.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-arrow-repeat text-primary"></i> {{ __('service_modal.application.feature2_title') }}</h5>
              <p>{{ __('service_modal.application.feature2_description') }}</p>
            </div>
            <div class="feature-item mt-3">
              <h5><i class="bi bi-tools text-primary"></i> {{ __('service_modal.application.feature3_title') }}</h5>
              <p>{{ __('service_modal.application.feature3_description') }}</p>
            </div>
          </div>

            <div class="case-study mt-5">
                <h4>{{ __('service_modal.common.success_story') }}</h4>
                <div class="case-study-content p-4 bg-light rounded">
                <p><em>{{ __('service_modal.application.case_study_quote') }}</em></p>
                <p class="mb-0 text-end"><strong>{{ __('service_modal.application.case_study_source') }}</strong></p>
                </div>
            </div>

            <div class="service-cta mt-5 text-center">
                <h4>{{ __('service_modal.application.cta_heading') }}</h4>
                <p>{{ __('service_modal.application.cta_subheading') }}</p>
                <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.application.cta_button') }}</a>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
        </div>
    </div>
  </div>
</div>


<!-- Strategy Consulting Services Modal -->
<div class="modal fade" id="strategy-consulting-services-modal" tabindex="-1" aria-labelledby="strategyConsultingServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="strategyConsultingServicesModalLabel">{{ __('service_modal.strategy.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.strategy.heading') }}</h2>
              <p class="lead">{{ __('service_modal.strategy.subheading') }}</p>
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
          <h3>{{ __('service_modal.strategy.technology_title') }}</h3>
          <p>{{ __('service_modal.strategy.technology_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.strategy.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.strategy.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.strategy.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.strategy.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.strategy.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.strategy.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.strategy.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.strategy.offerings_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shuffle text-primary"></i> {{ __('service_modal.strategy.feature1_title') }}</h5>
              <p>{{ __('service_modal.strategy.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-search text-primary"></i> {{ __('service_modal.strategy.feature2_title') }}</h5>
              <p>{{ __('service_modal.strategy.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-map text-primary"></i> {{ __('service_modal.strategy.feature3_title') }}</h5>
              <p>{{ __('service_modal.strategy.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.strategy.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.strategy.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <h4 class="mt-5">{{ __('service_modal.strategy.process_title') }}</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>{{ __('service_modal.strategy.step1_title') }}</h5>
              <p>{{ __('service_modal.strategy.step1_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.strategy.step2_title') }}</h5>
              <p>{{ __('service_modal.strategy.step2_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.strategy.step3_title') }}</h5>
              <p>{{ __('service_modal.strategy.step3_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.strategy.step4_title') }}</h5>
              <p>{{ __('service_modal.strategy.step4_description') }}</p>
            </li>
          </ul>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.strategy.cta_heading') }}</h4>
            <p>{{ __('service_modal.strategy.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.strategy.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Intelligent Automation Services Modal -->
<div class="modal fade" id="intelligent-automation-services-modal" tabindex="-1" aria-labelledby="intelligentAutomationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="intelligentAutomationServicesModalLabel">{{ __('service_modal.automation.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('service_modal.automation.heading') }}</h2>
              <p class="lead">{{ __('service_modal.automation.subheading') }}</p>
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
          <h3>{{ __('service_modal.automation.next_gen_title') }}</h3>
          <p>{{ __('service_modal.automation.next_gen_description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.automation.stat1_number') }}</p>
                <p class="label">{{ __('service_modal.automation.stat1_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.automation.stat2_number') }}</p>
                <p class="label">{{ __('service_modal.automation.stat2_label') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">{{ __('service_modal.automation.stat3_number') }}</p>
                <p class="label">{{ __('service_modal.automation.stat3_label') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('service_modal.common.key_benefits') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('service_modal.automation.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('service_modal.automation.solutions_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-cpu text-primary"></i> {{ __('service_modal.automation.feature1_title') }}</h5>
              <p>{{ __('service_modal.automation.feature1_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-diagram-2 text-primary"></i> {{ __('service_modal.automation.feature2_title') }}</h5>
              <p>{{ __('service_modal.automation.feature2_description') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-braces text-primary"></i> {{ __('service_modal.automation.feature3_title') }}</h5>
              <p>{{ __('service_modal.automation.feature3_description') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('service_modal.common.success_story') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('service_modal.automation.case_study_quote') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('service_modal.automation.case_study_source') }}</strong></p>
            </div>
          </div>
          
          <h4 class="mt-5">{{ __('service_modal.automation.approach_title') }}</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>{{ __('service_modal.automation.step1_title') }}</h5>
              <p>{{ __('service_modal.automation.step1_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.automation.step2_title') }}</h5>
              <p>{{ __('service_modal.automation.step2_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.automation.step3_title') }}</h5>
              <p>{{ __('service_modal.automation.step3_description') }}</p>
            </li>
            <li>
              <h5>{{ __('service_modal.automation.step4_title') }}</h5>
              <p>{{ __('service_modal.automation.step4_description') }}</p>
            </li>
          </ul>
          
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-lightning-charge text-primary me-2"></i>{{ __('service_modal.automation.quickstart_title') }}</h5>
                  <p class="card-text">{{ __('service_modal.automation.quickstart_description') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.quickstart_item1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.quickstart_item2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.quickstart_item3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-building-gear text-primary me-2"></i>{{ __('service_modal.automation.enterprise_title') }}</h5>
                  <p class="card-text">{{ __('service_modal.automation.enterprise_description') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.enterprise_item1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.enterprise_item2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('service_modal.automation.enterprise_item3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('service_modal.automation.cta_heading') }}</h4>
            <p>{{ __('service_modal.automation.cta_subheading') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('service_modal.automation.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('service_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('service_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>
