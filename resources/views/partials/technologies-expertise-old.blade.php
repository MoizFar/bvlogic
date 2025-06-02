<section class="technology-section py-5" id="technology-expertise">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="section-title">
                    {{ __('site.technology') }} <span class="text-accent">{{ __('site.expertise') }}</span>
                </h2>
                <p class="section-subtitle">
                    {{ __('site.technology_subtitle') }}
                </p>
            </div>
        </div>
        

        <div class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row tech-slider tech-grid">
                    <!-- Frontend Technologies -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h5>React</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.react_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-angular"></i>
                            </div>
                            <h5>Angular</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.angular_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <h5>Vue.js</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.vue_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-js-square"></i>
                            </div>
                            <h5>JavaScript</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.javascript_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-sass"></i>
                            </div>
                            <h5>Sass/SCSS</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.sass_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="frontend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-bootstrap"></i>
                            </div>
                            <h5>Bootstrap</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.bootstrap_desc') }}</p>
                        </div>
                    </div>
                    
                    <!-- Backend Technologies -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <h5>Node.js</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.node_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <h5>Python</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.python_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-java"></i>
                            </div>
                            <h5>Java</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.java_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <h5>PHP</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.php_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/net.png') }}" alt=".NET">
                            </div>
                            <h5>.NET</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.dotnet_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/golang.png') }}" alt="Go">
                            </div>
                            <h5>Go</h5>
                            <span class="tech-level intermediate">{{ __('site.intermediate') }}</span>
                            <p>{{ __('site.golang_desc') }}</p>
                        </div>
                    </div>
                    
                    <!-- Mobile Technologies -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="mobile">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h5>React Native</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.react_native_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="mobile">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/flutter.png') }}" alt="Flutter">
                            </div>
                            <h5>Flutter</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.flutter_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="mobile">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-swift"></i>
                            </div>
                            <h5>iOS (Swift)</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.swift_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="mobile">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <h5>Android</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.android_desc') }}</p>
                        </div>
                    </div>
                    
                 
                    
                    <!-- DevOps Technologies -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="devops">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-docker"></i>
                            </div>
                            <h5>Docker</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.docker_desc') }}</p>
                        </div>
                    </div>
                    
                  
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="devops">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-aws"></i>
                            </div>
                            <h5>AWS</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.aws_desc') }}</p>
                        </div>
                    </div>

                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="devops">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-jenkins"></i>
                            </div>
                            <h5>Jenkins</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.jenkins_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="devops">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-github"></i>
                            </div>
                            <h5>GitHub Actions</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.github_actions_desc') }}</p>
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
    
    
 

    function initializeSlider() {
    $('.tech-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}


initializeSlider();
    
    // Add animations for tech cards
    function animateTechCards() {
        var delay = 0;
        $('.tech-card:visible').each(function() {
            const card = $(this);
            if (!card.hasClass('animated') && isElementInViewport(card)) {
                setTimeout(function() {
                    card.addClass('animated');
                }, delay);
                delay += 50; // Staggered animation delay
            }
        });
    }
    
    function isElementInViewport(el) {
        const rect = el[0].getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9
        );
    }
    
    // Initial check on page load
    animateTechCards();
    
    // Check when scrolling
    $(window).on('scroll', function() {
        animateTechCards();
    });
    
    // Reset animations when switching tabs
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        $('.tech-card').removeClass('animated');
        setTimeout(function() {
            animateTechCards();
        }, 100);
    });
    
    // Tab interactions
    $('.tech-filter .nav-link').on('click', function() {
        $('.tech-filter .nav-link').removeClass('active');
        $(this).addClass('active');
    });
    
    // Hover effects for tech cards
    $('.tech-card').hover(
        function() {
            $(this).find('p').fadeIn(200);
        },
        function() {
            $(this).find('p').fadeOut(200);
        }
    );
});
   
   
</script>

@endpush