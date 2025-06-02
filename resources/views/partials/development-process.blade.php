<section class="development-process-section py-10" id="development-process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-center mb-5">
                    {{ __('site.our_product') }} 
                    <span class="text-accent">{{ __('site.development_process') }}</span>
                </h2>
            </div>
        </div>
        
        <!-- Step 1 -->
        <div class="row process-item mb-5">
            <div class="col-md-6">
                <div class="process-step" id="step-1">
                    <div class="step-number">{{ __('site.ideate_number') }}</div>
                    <h3 class="step-title">{{ __('site.ideate') }}</h3>
                    <p class="step-description">
                        {{ __('site.ideate_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/ideate.jpg') }}" class="process-image" alt="Ideation Process" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Step 2 -->
        <div class="row process-item mb-5">
            <div class="col-md-6 order-md-2">
                <div class="process-step" id="step-2">
                    <div class="step-number">{{ __('site.design_number') }}</div>
                    <h3 class="step-title">{{ __('site.design') }}</h3>
                    <p class="step-description">
                        {{ __('site.design_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/design.jpg') }}" class="process-image" alt="Design Process" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Step 3 -->
        <div class="row process-item mb-5">
            <div class="col-md-6">
                <div class="process-step" id="step-3">
                    <div class="step-number">{{ __('site.develop_number') }}</div>
                    <h3 class="step-title">{{ __('site.develop') }}</h3>
                    <p class="step-description">
                        {{ __('site.develop_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/develop.jpg') }}" class="process-image" alt="Development Process" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Step 4 -->
        <div class="row process-item mb-5">
            <div class="col-md-6 order-md-2">
                <div class="process-step" id="step-4">
                    <div class="step-number">{{ __('site.test_number') }}</div>
                    <h3 class="step-title">{{ __('site.test') }}</h3>
                    <p class="step-description">
                        {{ __('site.test_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/test.jpg') }}" class="process-image" alt="Testing Process" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Step 5 -->
        <div class="row process-item mb-5">
            <div class="col-md-6">
                <div class="process-step" id="step-5">
                    <div class="step-number">{{ __('site.launch_number') }}</div>
                    <h3 class="step-title">{{ __('site.launch') }}</h3>
                    <p class="step-description">
                        {{ __('site.launch_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/launch.jpg') }}" class="process-image" alt="Launch Process" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Step 6 -->
        <div class="row process-item mb-5">
            <div class="col-md-6 order-md-2">
                <div class="process-step" id="step-6">
                    <div class="step-number">{{ __('site.support_number') }}</div>
                    <h3 class="step-title">{{ __('site.support') }}</h3>
                    <p class="step-description">
                        {{ __('site.support_desc') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="process-image-container">
                    <img src="{{ asset('uploads/support.jpg') }}" class="process-image" alt="Support Process" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>