<section class="resources-section py-5" id="resources">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="section-title">
                    {{ __('site.our') }} <span class="text-accent">{{ __('site.partnerships') }}</span>
                </h2>
                <p class="section-subtitle">
                    {{ __('site.resources_subtitle') }}
                </p>
            </div>
        </div>
        
        <div class="resources-carousel">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/aws.png') }}" alt="Amazon Web Services" class="img-fluid">
                        </div>
                        <h4>Amazon Web Services</h4>
                        <div class="badge-container">
                            <span class="badge">Cloud</span>
                            <span class="badge">DevOps</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/azure.png') }}" alt="Microsoft Azure" class="img-fluid">
                        </div>
                        <h4>Microsoft Azure</h4>
                        <div class="badge-container">
                            <span class="badge">Cloud</span>
                            <span class="badge">Enterprise</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/google_cloud.png') }}" alt="Google Cloud" class="img-fluid">
                        </div>
                        <h4>Google Cloud</h4>
                        <div class="badge-container">
                            <span class="badge">Cloud</span>
                            <span class="badge">Data</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/ibm.png') }}" alt="IBM" class="img-fluid">
                        </div>
                        <h4>IBM</h4>
                        <div class="badge-container">
                            <span class="badge">Enterprise</span>
                            <span class="badge">AI</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/oracle.png') }}" alt="Oracle" class="img-fluid">
                        </div>
                        <h4>Oracle</h4>
                        <div class="badge-container">
                            <span class="badge">Database</span>
                            <span class="badge">Enterprise</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/redhat.png') }}" alt="Red Hat" class="img-fluid">
                        </div>
                        <h4>Red Hat</h4>
                        <div class="badge-container">
                            <span class="badge">Linux</span>
                            <span class="badge">Kubernetes</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/microsoft.png') }}" alt="Microsoft" class="img-fluid">
                        </div>
                        <h4>Microsoft</h4>
                        <div class="badge-container">
                            <span class="badge">Enterprise</span>
                            <span class="badge">Productivity</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/cisco.png') }}" alt="Cisco" class="img-fluid">
                        </div>
                        <h4>Cisco</h4>
                        <div class="badge-container">
                            <span class="badge">Networking</span>
                            <span class="badge">Security</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/fortinet.png') }}" alt="Fortinet" class="img-fluid">
                        </div>
                        <h4>Fortinet</h4>
                        <div class="badge-container">
                            <span class="badge">Security</span>
                            <span class="badge">Firewall</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="resource-card">
                        <div class="resource-logo">
                            <img src="{{ asset('uploads/kong.png') }}" alt="Kong" class="img-fluid">
                        </div>
                        <h4>Kong</h4>
                        <div class="badge-container">
                            <span class="badge">API</span>
                            <span class="badge">Microservices</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>


    @push('scripts')

<script>


$(document).ready(function() {
    // Add scroll reveal animation
    function revealOnScroll() {
        var cards = $('.resource-card');
        var delay = 0;
        
        cards.each(function() {
            var card = $(this);
            if (isElementInViewport(card) && !card.hasClass('animated')) {
                setTimeout(function() {
                    card.addClass('animated');
                }, delay);
                delay += 100; // Staggered delay for each card
            }
        });
    }
    
    function isElementInViewport(el) {
        var rect = el[0].getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85
        );
    }
    
    // Initial check and scroll listener
    revealOnScroll();
    $(window).on('scroll', revealOnScroll);
    
    // Logo hover effect
    $('.resource-card').hover(
        function() {
            const logo = $(this).find('.resource-logo img');
            logo.css('transform', 'scale(1.1)');
        },
        function() {
            const logo = $(this).find('.resource-logo img');
            logo.css('transform', 'scale(1)');
        }
    );
    
    // Optional: Add a slider for mobile view
    function initializeSlider() {
        if (window.innerWidth < 768) {
            if (!$('.resources-carousel').hasClass('slick-initialized')) {
                $('.resources-carousel').slick({
                    dots: true,
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    responsive: [
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        } else if ($('.resources-carousel').hasClass('slick-initialized')) {
            $('.resources-carousel').slick('unslick');
        }
    }
    
    // Initialize slider and check on resize
    initializeSlider();
    $(window).on('resize', function() {
        initializeSlider();
    });
});


</script>

@endpush