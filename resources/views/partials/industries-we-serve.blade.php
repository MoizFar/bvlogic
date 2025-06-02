<section class="industries-section py-5" id="industries">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="section-title">
                    {{ __('site.industries') }} <span class="text-accent">{{ __('site.we_served') }}</span>
                </h2>
                <p class="section-subtitle">
                    {{ __('site.industries_subtitle') }}
                </p>
            </div>
        </div>
        
        <div class="row">
            <!-- FSI -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>{{ __('site.fsi_title') }}</h3>
                    <p>
                        {{ __('site.fsi_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Educational Sector -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>{{ __('site.education_title') }}</h3>
                    <p>
                        {{ __('site.education_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Gas And Oil -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h3>{{ __('site.oil_gas_title') }}</h3>
                    <p>
                        {{ __('site.oil_gas_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Manufacturing -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>{{ __('site.manufacturing_title') }}</h3>
                    <p>
                        {{ __('site.manufacturing_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Telecom -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h3>{{ __('site.telecom_title') }}</h3>
                    <p>
                        {{ __('site.telecom_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Ecommerce -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>{{ __('site.ecommerce_title') }}</h3>
                    <p>
                        {{ __('site.ecommerce_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Aerospace and Defense -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-fighter-jet"></i>
                    </div>
                    <h3>{{ __('site.aerospace_title') }}</h3>
                    <p>
                        {{ __('site.aerospace_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Regulators -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>{{ __('site.regulators_title') }}</h3>
                    <p>
                        {{ __('site.regulators_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Real Estate -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>{{ __('site.real_estate_title') }}</h3>
                    <p>
                        {{ __('site.real_estate_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Digital World -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3>{{ __('site.digital_world_title') }}</h3>
                    <p>
                        {{ __('site.digital_world_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Agri Tech -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h3>{{ __('site.agri_tech_title') }}</h3>
                    <p>
                        {{ __('site.agri_tech_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Medical Tech -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>{{ __('site.medical_tech_title') }}</h3>
                    <p>
                        {{ __('site.medical_tech_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Insurance -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>{{ __('site.insurance_title') }}</h3>
                    <p>
                        {{ __('site.insurance_desc') }}
                    </p>
                </div>
            </div>
            
            <!-- Transportation -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="industry-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-truck-moving"></i>
                    </div>
                    <h3>{{ __('site.transportation_title') }}</h3>
                    <p>
                        {{ __('site.transportation_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

  @push('scripts')

<script>

    $(document).ready(function() {
    // Add fade-in class to all industry cards
    $('.industry-card').addClass('fade-in');
    
    // Function to check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85
        );
    }
    
    // Function to handle scroll animation
    function handleScrollAnimation() {
        $('.fade-in').each(function() {
            if (isElementInViewport(this)) {
                $(this).addClass('visible');
            }
        });
    }
    
    // Initial check for elements in viewport
    handleScrollAnimation();
    
    // Listen for scroll events
    $(window).on('scroll', function() {
        handleScrollAnimation();
    });
    
    // Optional: Add hover effect for better interaction
    $('.industry-card').hover(
        function() {
            $(this).find('.icon-wrapper').addClass('pulse');
        },
        function() {
            $(this).find('.icon-wrapper').removeClass('pulse');
        }
    );
    
    // Support for language switcher if present
    $('.language-switcher').on('click', function() {
        // This assumes you have some way of changing the language
        // After the language change, we need to properly reapply RTL/LTR specific styles
        setTimeout(function() {
            handleScrollAnimation(); // Re-check visibility after language switch
        }, 100);
    });
});

</script>

@endpush

