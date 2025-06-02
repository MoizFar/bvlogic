<!-- Solution Modals -->

<!-- HRM Solution Modal -->
<div class="modal fade" id="hrm_solution-modal" tabindex="-1" aria-labelledby="hrmSolutionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hrmSolutionModalLabel">{{ __('solution_modal.hrm.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.hrm.header') }}</h2>
              <p class="lead">{{ __('solution_modal.hrm.tagline') }}</p>
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
          <h3>{{ __('solution_modal.hrm.subheader') }}</h3>
          <p>{{ __('solution_modal.hrm.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">35%</p>
                <p class="label">{{ __('solution_modal.hrm.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">45%</p>
                <p class="label">{{ __('solution_modal.hrm.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">98%</p>
                <p class="label">{{ __('solution_modal.hrm.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.hrm.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.hrm.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('solution_modal.hrm.modules_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-person-plus text-primary"></i> {{ __('solution_modal.hrm.module1_title') }}</h5>
              <p>{{ __('solution_modal.hrm.module1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up text-primary"></i> {{ __('solution_modal.hrm.module2_title') }}</h5>
              <p>{{ __('solution_modal.hrm.module2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-cash-coin text-primary"></i> {{ __('solution_modal.hrm.module3_title') }}</h5>
              <p>{{ __('solution_modal.hrm.module3_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-clipboard-data text-primary"></i> {{ __('solution_modal.hrm.module4_title') }}</h5>
              <p>{{ __('solution_modal.hrm.module4_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.hrm.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.hrm.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.hrm.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.hrm.cta_title') }}</h4>
            <p>{{ __('solution_modal.hrm.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.hrm.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Helpdesk Solution Modal -->
<div class="modal fade" id="helpdesk_solution-modal" tabindex="-1" aria-labelledby="helpdeskSolutionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpdeskSolutionModalLabel">{{ __('solution_modal.helpdesk.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.helpdesk.header') }}</h2>
              <p class="lead">{{ __('solution_modal.helpdesk.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-headset"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.helpdesk.subheader') }}</h3>
          <p>{{ __('solution_modal.helpdesk.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">{{ __('solution_modal.helpdesk.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">60%</p>
                <p class="label">{{ __('solution_modal.helpdesk.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">35%</p>
                <p class="label">{{ __('solution_modal.helpdesk.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.helpdesk.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.helpdesk.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('solution_modal.helpdesk.capabilities_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-chat-square-text text-primary"></i> {{ __('solution_modal.helpdesk.capability1_title') }}</h5>
              <p>{{ __('solution_modal.helpdesk.capability1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-arrow-repeat text-primary"></i> {{ __('solution_modal.helpdesk.capability2_title') }}</h5>
              <p>{{ __('solution_modal.helpdesk.capability2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-book text-primary"></i> {{ __('solution_modal.helpdesk.capability3_title') }}</h5>
              <p>{{ __('solution_modal.helpdesk.capability3_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-graph-up text-primary"></i> {{ __('solution_modal.helpdesk.capability4_title') }}</h5>
              <p>{{ __('solution_modal.helpdesk.capability4_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.helpdesk.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.helpdesk.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.helpdesk.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.helpdesk.cta_title') }}</h4>
            <p>{{ __('solution_modal.helpdesk.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.helpdesk.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- ERP Solutions Modal -->
<div class="modal fade" id="erp_solutions-modal" tabindex="-1" aria-labelledby="erpSolutionsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="erpSolutionsModalLabel">{{ __('solution_modal.erp.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.erp.header') }}</h2>
              <p class="lead">{{ __('solution_modal.erp.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.erp.subheader') }}</h3>
          <p>{{ __('solution_modal.erp.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">35%</p>
                <p class="label">{{ __('solution_modal.erp.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">20%</p>
                <p class="label">{{ __('solution_modal.erp.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">50%</p>
                <p class="label">{{ __('solution_modal.erp.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <h4>{{ __('solution_modal.erp.platforms_title') }}</h4>
          
          <div class="row mt-4">
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-cloud text-primary me-2"></i>{{ __('solution_modal.erp.platform1_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.erp.platform1_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform1_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform1_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform1_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-microsoft text-primary me-2"></i>{{ __('solution_modal.erp.platform2_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.erp.platform2_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform2_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform2_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform2_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-box-seam text-primary me-2"></i>{{ __('solution_modal.erp.platform3_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.erp.platform3_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform3_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform3_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.erp.platform3_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.erp.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.erp.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <h4 class="mt-5">{{ __('solution_modal.erp.services_title') }}</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>{{ __('solution_modal.erp.service1_title') }}</h5>
              <p>{{ __('solution_modal.erp.service1_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.erp.service2_title') }}</h5>
              <p>{{ __('solution_modal.erp.service2_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.erp.service3_title') }}</h5>
              <p>{{ __('solution_modal.erp.service3_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.erp.service4_title') }}</h5>
              <p>{{ __('solution_modal.erp.service4_desc') }}</p>
            </li>
          </ul>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.erp.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.erp.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.erp.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.erp.cta_title') }}</h4>
            <p>{{ __('solution_modal.erp.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.erp.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Cloud Offerings Modal -->
<div class="modal fade" id="cloud_offerings-modal" tabindex="-1" aria-labelledby="cloudOfferingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cloudOfferingsModalLabel">{{ __('solution_modal.cloud.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.cloud.header') }}</h2>
              <p class="lead">{{ __('solution_modal.cloud.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-cloud-fill"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.cloud.subheader') }}</h3>
          <p>{{ __('solution_modal.cloud.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">45%</p>
                <p class="label">{{ __('solution_modal.cloud.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">99.99%</p>
                <p class="label">{{ __('solution_modal.cloud.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">60%</p>
                <p class="label">{{ __('solution_modal.cloud.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <h4>{{ __('solution_modal.cloud.platforms_title') }}</h4>
          
          <div class="row mt-4">
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-amazon text-warning me-2"></i>{{ __('solution_modal.cloud.platform1_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.cloud.platform1_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform1_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform1_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform1_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-microsoft text-info me-2"></i>{{ __('solution_modal.cloud.platform2_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.cloud.platform2_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform2_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform2_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform2_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-database-fill text-danger me-2"></i>{{ __('solution_modal.cloud.platform3_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.cloud.platform3_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform3_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform3_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.cloud.platform3_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.cloud.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.cloud.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('solution_modal.cloud.services_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-check2-square text-primary"></i> {{ __('solution_modal.cloud.service1_title') }}</h5>
              <p>{{ __('solution_modal.cloud.service1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-arrow-repeat text-primary"></i> {{ __('solution_modal.cloud.service2_title') }}</h5>
              <p>{{ __('solution_modal.cloud.service2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-check text-primary"></i> {{ __('solution_modal.cloud.service3_title') }}</h5>
              <p>{{ __('solution_modal.cloud.service3_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-gear-wide-connected text-primary"></i> {{ __('solution_modal.cloud.service4_title') }}</h5>
              <p>{{ __('solution_modal.cloud.service4_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.cloud.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.cloud.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.cloud.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.cloud.cta_title') }}</h4>
            <p>{{ __('solution_modal.cloud.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.cloud.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Intelligent Automation Services Modal -->
<div class="modal fade" id="intelligent_automation_services-modal" tabindex="-1" aria-labelledby="intelligentAutomationServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="intelligentAutomationServicesModalLabel">{{ __('solution_modal.automation.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.automation.header') }}</h2>
              <p class="lead">{{ __('solution_modal.automation.tagline') }}</p>
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
          <h3>{{ __('solution_modal.automation.subheader') }}</h3>
          <p>{{ __('solution_modal.automation.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">70%</p>
                <p class="label">{{ __('solution_modal.automation.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">80%</p>
                <p class="label">{{ __('solution_modal.automation.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">40%</p>
                <p class="label">{{ __('solution_modal.automation.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.automation.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.automation.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <h4>{{ __('solution_modal.automation.solutions_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-cpu text-primary"></i> {{ __('solution_modal.automation.solution1_title') }}</h5>
              <p>{{ __('solution_modal.automation.solution1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-gear-wide-connected text-primary"></i> {{ __('solution_modal.automation.solution2_title') }}</h5>
              <p>{{ __('solution_modal.automation.solution2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-earmark-text text-primary"></i> {{ __('solution_modal.automation.solution3_title') }}</h5>
              <p>{{ __('solution_modal.automation.solution3_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-chat-square-dots text-primary"></i> {{ __('solution_modal.automation.solution4_title') }}</h5>
              <p>{{ __('solution_modal.automation.solution4_desc') }}</p>
            </div>
          </div>
          
          <h4 class="mt-5">{{ __('solution_modal.automation.approach_title') }}</h4>
          <ul class="steps-list mt-4">
            <li>
              <h5>{{ __('solution_modal.automation.approach1_title') }}</h5>
              <p>{{ __('solution_modal.automation.approach1_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.automation.approach2_title') }}</h5>
              <p>{{ __('solution_modal.automation.approach2_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.automation.approach3_title') }}</h5>
              <p>{{ __('solution_modal.automation.approach3_desc') }}</p>
            </li>
            <li>
              <h5>{{ __('solution_modal.automation.approach4_title') }}</h5>
              <p>{{ __('solution_modal.automation.approach4_desc') }}</p>
            </li>
          </ul>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.automation.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.automation.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.automation.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-lightning-charge text-primary me-2"></i>{{ __('solution_modal.automation.option1_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.automation.option1_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option1_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option1_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option1_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-building-gear text-primary me-2"></i>{{ __('solution_modal.automation.option2_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.automation.option2_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option2_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option2_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.automation.option2_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.automation.cta_title') }}</h4>
            <p>{{ __('solution_modal.automation.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.automation.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Banking Solutions Modal -->
<div class="modal fade" id="banking_solutions-modal" tabindex="-1" aria-labelledby="bankingSolutionsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bankingSolutionsModalLabel">{{ __('solution_modal.banking.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.banking.header') }}</h2>
              <p class="lead">{{ __('solution_modal.banking.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-bank"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.banking.subheader') }}</h3>
          <p>{{ __('solution_modal.banking.description') }}</p>
          
          <div class="row mt-4 mb-4">
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">60%</p>
                <p class="label">{{ __('solution_modal.banking.stat1') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">45%</p>
                <p class="label">{{ __('solution_modal.banking.stat2') }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stats-item">
                <p class="number">30%</p>
                <p class="label">{{ __('solution_modal.banking.stat3') }}</p>
              </div>
            </div>
          </div>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.banking.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.banking.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <h4>{{ __('solution_modal.banking.portfolio_title') }}</h4>
          
          <div class="service-features mt-4">
            <div class="feature-item mt-3">
              <h5><i class="bi bi-database text-primary"></i> {{ __('solution_modal.banking.feature1_title') }}</h5>
              <p>{{ __('solution_modal.banking.feature1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-laptop text-primary"></i> {{ __('solution_modal.banking.feature2_title') }}</h5>
              <p>{{ __('solution_modal.banking.feature2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-phone text-primary"></i> {{ __('solution_modal.banking.feature3_title') }}</h5>
              <p>{{ __('solution_modal.banking.feature3_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shield-lock text-primary"></i> {{ __('solution_modal.banking.feature4_title') }}</h5>
              <p>{{ __('solution_modal.banking.feature4_desc') }}</p>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-bank2 text-primary me-2"></i>{{ __('solution_modal.banking.retail_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.banking.retail_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.retail_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.retail_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.retail_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-briefcase-fill text-primary me-2"></i>{{ __('solution_modal.banking.commercial_title') }}</h5>
                  <p class="card-text">{{ __('solution_modal.banking.commercial_desc') }}</p>
                  <ul class="list-unstyled mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.commercial_feature1') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.commercial_feature2') }}</li>
                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ __('solution_modal.banking.commercial_feature3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.banking.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.banking.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.banking.testimonial_author') }}</strong></p>
            </div>
          </div>
          
          <div class="service-cta mt-5 text-center">
            <h4>{{ __('solution_modal.banking.cta_title') }}</h4>
            <p>{{ __('solution_modal.banking.cta_text') }}</p>
            <a href="/contact" class="btn btn-primary btn-lg">{{ __('solution_modal.banking.cta_button') }}</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Healthcare Solutions Modal -->
<div class="modal fade" id="healthcare_solutions-modal" tabindex="-1" aria-labelledby="healthcareSolutionsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="healthcareSolutionsModalLabel">{{ __('solution_modal.healthcare.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.healthcare.header') }}</h2>
              <p class="lead">{{ __('solution_modal.healthcare.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-heart-pulse"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.healthcare.subheader') }}</h3>
          <p>{{ __('solution_modal.healthcare.description') }}</p>
          
          <div class="service-features mt-4">
            <h4>{{ __('solution_modal.healthcare.solutions_title') }}</h4>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-file-medical text-primary"></i> {{ __('solution_modal.healthcare.feature1_title') }}</h5>
              <p>{{ __('solution_modal.healthcare.feature1_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-hospital text-primary"></i> {{ __('solution_modal.healthcare.feature2_title') }}</h5>
              <p>{{ __('solution_modal.healthcare.feature2_desc') }}</p>
            </div>
            
            <div class="feature-item mt-3">
              <h5><i class="bi bi-camera-video text-primary"></i> {{ __('solution_modal.healthcare.feature3_title') }}</h5>
              <p>{{ __('solution_modal.healthcare.feature3_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.healthcare.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.healthcare.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.healthcare.testimonial_author') }}</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Call Center Solutions Modal -->
<div class="modal fade" id="call_center_solutions-modal" tabindex="-1" aria-labelledby="callCenterSolutionsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="callCenterSolutionsModalLabel">{{ __('solution_modal.call_center.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.call_center.header') }}</h2>
              <p class="lead">{{ __('solution_modal.call_center.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-headset"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.call_center.subheader') }}</h3>
          <p>{{ __('solution_modal.call_center.description') }}</p>
          
          <div class="service-benefits mt-4">
            <h4>{{ __('solution_modal.call_center.benefits_title') }}</h4>
            <div class="row">
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit1') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit2') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit3') }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="benefit-list">
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit4') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit5') }}</li>
                  <li><i class="bi bi-check-circle-fill"></i> {{ __('solution_modal.call_center.benefit6') }}</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="service-features mt-4">
            <div class="feature-item mt-3">
              <h5><i class="bi bi-shuffle text-primary"></i> {{ __('solution_modal.call_center.platform_title') }}</h5>
              <p>{{ __('solution_modal.call_center.platform_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <h4>{{ __('solution_modal.call_center.case_study_title') }}</h4>
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.call_center.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.call_center.testimonial_author') }}</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Telecom Services Modal -->
<div class="modal fade" id="telecom_services-modal" tabindex="-1" aria-labelledby="telecomServicesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="telecomServicesModalLabel">{{ __('solution_modal.telecom.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-header">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2>{{ __('solution_modal.telecom.header') }}</h2>
              <p class="lead">{{ __('solution_modal.telecom.tagline') }}</p>
            </div>
            <div class="col-md-4 text-end">
              <div class="service-icon-large">
                <i class="bi bi-broadcast-pin"></i>
              </div>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class="service-detail-content">
          <p>{{ __('solution_modal.telecom.description') }}</p>
          
          <div class="service-features mt-4">
            <div class="feature-item mt-3">
              <h5><i class="bi bi-layers text-primary"></i> {{ __('solution_modal.telecom.feature1_title') }}</h5>
              <p>{{ __('solution_modal.telecom.feature1_desc') }}</p>
            </div>
          </div>
          
          <div class="case-study mt-5">
            <div class="case-study-content p-4 bg-light rounded">
              <p><em>{{ __('solution_modal.telecom.testimonial') }}</em></p>
              <p class="mb-0 text-end"><strong>{{ __('solution_modal.telecom.testimonial_author') }}</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- CRM and Contact Centers Modal -->
<div class="modal fade" id="crm_and_contact_centers-modal" tabindex="-1" aria-labelledby="crmAndContactCentersModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="crmAndContactCentersModalLabel">{{ __('solution_modal.crm.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.crm.subheader') }}</h3>
          <p>{{ __('solution_modal.crm.description') }}</p>
          
          <div class="service-features mt-4">
            <div class="feature-item mt-3">
              <h5><i class="bi bi-people-fill text-primary"></i> {{ __('solution_modal.crm.feature1_title') }}</h5>
              <p>{{ __('solution_modal.crm.feature1_desc') }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Fraud and Compliance Modal -->
<div class="modal fade" id="fraud_and_compliance-modal" tabindex="-1" aria-labelledby="fraudAndComplianceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fraudAndComplianceModalLabel">{{ __('solution_modal.fraud.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.fraud.subheader') }}</h3>
          <p>{{ __('solution_modal.fraud.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Data Analytics and Lake Modal -->
<div class="modal fade" id="data_analytics_and_lake-modal" tabindex="-1" aria-labelledby="dataAnalyticsAndLakeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataAnalyticsAndLakeModalLabel">{{ __('solution_modal.data_analytics.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.data_analytics.subheader') }}</h3>
          <p>{{ __('solution_modal.data_analytics.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- Payment Gateway Modal -->
<div class="modal fade" id="payment_gateway-modal" tabindex="-1" aria-labelledby="paymentGatewayModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentGatewayModalLabel">{{ __('solution_modal.payment.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.payment.subheader') }}</h3>
          <p>{{ __('solution_modal.payment.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- API Governance -->
<div class="modal fade" id="api_governance-modal" tabindex="-1" aria-labelledby="apiGovernanceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="apiGovernanceModalLabel">{{ __('solution_modal.api.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.api.subheader') }}</h3>
          <p>{{ __('solution_modal.api.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- BPM RPA -->
<div class="modal fade" id="bpm_rpa-modal" tabindex="-1" aria-labelledby="bpmRpaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bpmRpaModalLabel">{{ __('solution_modal.bpm.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.bpm.subheader') }}</h3>
          <p>{{ __('solution_modal.bpm.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>

<!-- AI Chatbot -->
<div class="modal fade" id="ai_chatbots-modal" tabindex="-1" aria-labelledby="aiChatbotModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aiChatbotModalLabel">{{ __('solution_modal.chatbot.title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="service-detail-content">
          <h3>{{ __('solution_modal.chatbot.subheader') }}</h3>
          <p>{{ __('solution_modal.chatbot.description') }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('solution_modal.common.close') }}</button>
        <a href="/contact" class="btn btn-primary">{{ __('solution_modal.common.contact_us') }}</a>
      </div>
    </div>
  </div>
</div>


