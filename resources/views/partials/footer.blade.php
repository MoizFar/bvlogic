<footer class="site-footer" id="footer">
    <div class="footer-wave-wrapper">
        <div class="footer-wave"></div>
    </div>
    
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <!-- Company Overview -->
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <img src="{{ asset('uploads/logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                        </div>
                        <p class="company-description">
                            {{ __('site.company_description') }}
                        </p>
                        <div class="social-links">
                            <h4>{{ __('site.follow_us') }}</h4>
                            <div class="social-icons">
                                <a href="#" aria-label="Facebook" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" aria-label="LinkedIn" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" aria-label="Twitter" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" aria-label="Instagram" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <h3 class="widget-title">{{ __('site.quick_links') }}</h3>
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('site.about_us') }}</a></li>
                            <li><a href="{{ route('service') }}">{{ __('site.services') }}</a></li>
                            <li><a href="{{ route('career') }}">{{ __('site.careers') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('site.contact_us') }}</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Our Services -->
                
                
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-title">{{ __('site.get_in_touch') }}</h3>
                        
                        <!-- Global Contact -->
                        <div class="contact-emails mb-4">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <p><a href="mailto:info@bvlogic.com">info@bvlogic.com</a></p>
                                    <p><a href="mailto:support@bvlogic.com">support@bvlogic.com</a></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <p><a href="tel:+1 (917) 789-4790">{{ __('site.usa') }}: +1 (917) 789-4790</a></p>
                                    <p><a href="tel:+971 (54) 215-4790">{{ __('site.uae') }}: +971 (54) 215-4790</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office Locations -->
                        <div class="office-locations">
                            <div class="location-tabs">

                              <button class="location-tab active" data-location="dubai">
                                    <i class="fas fa-map-marker-alt"></i> {{ __('site.head_office') }}
                                </button>

                                <button class="location-tab" data-location="islamabad">
                                    <i class="fas fa-map-marker-alt"></i> {{ __('site.islamabad') }}
                                </button>
                                <button class="location-tab" data-location="faisalabad">
                                    <i class="fas fa-map-marker-alt"></i> {{ __('site.faisalabad') }}
                                </button>
                              
                                <button class="location-tab" data-location="usa">
                                    <i class="fas fa-map-marker-alt"></i> {{ __('site.usa') }}
                                </button>
                            </div>
                            
                            <div class="location-content">

                             <div class="location-info active" data-location="dubai">
                                    <p>{{ __('site.dubai_address') }}</p>
                                </div>
                                <div class="location-info" data-location="islamabad">
                                    <p>{{ __('site.islamabad_address') }}</p>
                                </div>
                                <div class="location-info" data-location="faisalabad">
                                    <p>{{ __('site.faisalabad_address') }}</p>
                                </div>
                               
                                <div class="location-info" data-location="usa">
                                    <p>{{ __('site.usa_address') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <p class="copyright">
                        &copy; {{ date('Y') }} Bird View Logic {{ __('site.all_rights_reserved') }}
                    </p>
                </div>
               
            </div>
        </div>
    </div>
    
    <!-- Back to top button -->
    <a href="#" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>
</footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>

$(document).ready(function() {
    // Office location tabs
    $('.location-tab').on('click', function() {
        const location = $(this).data('location');
        
        // Update active tab
        $('.location-tab').removeClass('active');
        $(this).addClass('active');
        
        // Update visible content
        $('.location-info').removeClass('active');
        $(`.location-info[data-location="${location}"]`).addClass('active');
    });
    
    // Back to Top button
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').addClass('visible');
        } else {
            $('.back-to-top').removeClass('visible');
        }
    });
    
    $('.back-to-top').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 800);
    });
    
    // Animate footer elements on scroll
    function animateFooterElements() {
        const footerPosition = $('.site-footer').offset().top;
        const windowHeight = $(window).height();
        const scrollTop = $(window).scrollTop();
        
        if (scrollTop + windowHeight > footerPosition) {
            $('.footer-widget').addClass('animated');
        }
    }
    
    // Add CSS animation class
    $('<style>.footer-widget { opacity: 0; transform: translateY(30px); transition: all 0.6s ease; } .footer-widget.animated { opacity: 1; transform: translateY(0); }</style>').appendTo('head');
    
    // Check for animation on scroll
    $(window).on('scroll', function() {
        animateFooterElements();
    });
    
    // Initial check
    animateFooterElements();
});

</script>