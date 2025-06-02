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
        
        <!-- Technology Categories -->
        <div class="tech-categories mb-5">
            <!-- <ul class="nav nav-pills tech-filter justify-content-center" id="tech-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#all" role="tab">{{ __('site.all') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#frontend" role="tab">{{ __('site.frontend') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#backend" role="tab">{{ __('site.backend') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#mobile" role="tab">{{ __('site.mobile') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#devops" role="tab">{{ __('site.devops') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#ai" role="tab">{{ __('site.ai_ml') }}</a>
                </li>
            </ul> -->
        </div>
        
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row tech-grid">
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
<!--                     
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="devops">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/tech/azure-devops.png') }}" alt="Azure DevOps">
                            </div>
                            <h5>Azure DevOps</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.azure_devops_desc') }}</p>
                        </div>
                    </div> -->
                    
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
                    
                    <!-- AI/ML Technologies -->
               
                    
                    
                    
                    <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="ai">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/tech/scikit-learn.png') }}" alt="Scikit-Learn">
                            </div>
                            <h5>Scikit-Learn</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.scikit_learn_desc') }}</p>
                        </div>
                    </div> -->
                    
                  
                    
                    <!-- Database Technologies -->
                    <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <i class="fab fa-db"></i>
                            </div>
                            <h5>MongoDB</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.mongodb_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/tech/postgresql.png') }}" alt="PostgreSQL">
                            </div>
                            <h5>PostgreSQL</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.postgresql_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/tech/mysql.png') }}" alt="MySQL">
                            </div>
                            <h5>MySQL</h5>
                            <span class="tech-level expert">{{ __('site.expert') }}</span>
                            <p>{{ __('site.mysql_desc') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" data-category="backend">
                        <div class="tech-card">
                            <div class="tech-icon tech-img">
                                <img src="{{ asset('uploads/tech/redis.png') }}" alt="Redis">
                            </div>
                            <h5>Redis</h5>
                            <span class="tech-level advanced">{{ __('site.advanced') }}</span>
                            <p>{{ __('site.redis_desc') }}</p>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <!-- Filtered Category Tabs - These will be populated via JavaScript -->
            <!-- <div class="tab-pane fade" id="frontend" role="tabpanel"></div>
            <div class="tab-pane fade" id="backend" role="tabpanel"></div>
            <div class="tab-pane fade" id="mobile" role="tabpanel"></div>
            <div class="tab-pane fade" id="devops" role="tabpanel"></div>
            <div class="tab-pane fade" id="ai" role="tabpanel"></div> -->
        </div>
        
        <!-- <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="tech-cta">
                    <h3>{{ __('site.tech_cta_title') }}</h3>
                    <p>{{ __('site.tech_cta_text') }}</p>
                    <a href="{{ route('services') }}" class="btn btn-primary btn-lg">{{ __('site.explore_services') }}</a>
                </div>
            </div>
        </div> -->
    </div>
</section>


    @push('scripts')


<script>

$(document).ready(function() {
    // Clone technology cards into their respective category tabs
    function populateCategoryTabs() {
        // Frontend tab
        var frontendItems = $('.tech-grid [data-category="frontend"]').clone();
        $('#frontend').html('<div class="row tech-grid">' + frontendItems.wrap('<div>').parent().html() + '</div>');
        
        // Backend tab
        var backendItems = $('.tech-grid [data-category="backend"]').clone();
        $('#backend').html('<div class="row tech-grid">' + backendItems.wrap('<div>').parent().html() + '</div>');
        
        // Mobile tab
        var mobileItems = $('.tech-grid [data-category="mobile"]').clone();
        $('#mobile').html('<div class="row tech-grid">' + mobileItems.wrap('<div>').parent().html() + '</div>');
        
        // DevOps tab
        var devopsItems = $('.tech-grid [data-category="devops"]').clone();
        $('#devops').html('<div class="row tech-grid">' + devopsItems.wrap('<div>').parent().html() + '</div>');
        
        // AI/ML tab
        var aiItems = $('.tech-grid [data-category="ai"]').clone();
        $('#ai').html('<div class="row tech-grid">' + aiItems.wrap('<div>').parent().html() + '</div>');
    }
    
    // Call function to populate tabs
    populateCategoryTabs();
    
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