<?php
// Force set locale from session at the very top of your layout file
if (session()->has('locale')) {
    app()->setLocale(session('locale'));
}
?>

<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BV Logic</title>
    
    <link rel="preload" as="image" href="{{ asset('uploads/ideate.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('uploads/design.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('uploads/develop.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('uploads/test.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('uploads/launch.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('uploads/support.jpg') }}">
    
    <!-- Bootstrap CSS with RTL Support -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    @yield('styles')
</head>

<body class="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


    <!-- Navigation -->
    @include('partials.header')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

   <script>
        AOS.init();
    </script>

     <script>
        $(document).ready(function(){
            $('.partners-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>


 <script>
    $(document).ready(function() {

        // Play the first video immediately (active slide)
        $('#heroCarousel .carousel-item.active video').each(function() {

            // Check if the video has a data-src attribute
            $(this)[0].play().catch(function(error) {
                console.error('Video play failed:', error);
            });
        });
        
        // Function to load and play video
        function loadAndPlayVideo($slide) {
            var $video = $slide.find('video');
            
            // If video has a data-src attribute, it needs to be loaded
            if ($video.attr('data-src')) {
                // Create and append source element if it doesn't exist
                if ($video.find('source').length === 0) {
                    $video.append('<source type="video/mp4">');
                }
                
                // Set the source and load the video
                $video.find('source').attr('src', $video.attr('data-src'));
                $video.removeAttr('data-src');
                $video[0].load();
            }
            
            // Play the video with error handling
            setTimeout(function() {
                $video[0].play().catch(function(error) {
                    console.error('Video play failed:', error);
                });
            }, 100);
        }
        
        // Handle slide events
        $('#heroCarousel').on('slide.bs.carousel', function(event) {
            // Pause all videos
            $(this).find('video').each(function() {
                $(this)[0].pause();
            });
        });
        
        // When slide has completed transition
        $('#heroCarousel').on('slid.bs.carousel', function(event) {
            // Load and play the video in the active slide
            loadAndPlayVideo($(this).find('.carousel-item.active'));
        });
        
        // Pre-load the next video when hovering over next button
        $('.carousel-control-next').hover(function() {
            var $currentSlide = $('#heroCarousel .carousel-item.active');
            var $nextSlide = $currentSlide.next('.carousel-item');
            
            // If at the end, loop to the first slide
            if ($nextSlide.length === 0) {
                $nextSlide = $('#heroCarousel .carousel-item:first');
            }
            
            // Start loading the video but don't play it yet
            var $nextVideo = $nextSlide.find('video');
            if ($nextVideo.attr('data-src')) {
                if ($nextVideo.find('source').length === 0) {
                    $nextVideo.append('<source type="video/mp4">');
                }
                $nextVideo.find('source').attr('src', $nextVideo.attr('data-src'));
                $nextVideo.removeAttr('data-src');
                $nextVideo[0].load();
            }
        });
    });
</script>

<script>
$(document).ready(function () {
    const currentLocale = $('html').attr('lang') || 'en'; // or use a meta tag or JS variable

    function toWesternDigits(str) {
        return str
            .replace(/[\u0660-\u0669]/g, d => d.charCodeAt(0) - 0x0660)
            .replace(/[\u06F0-\u06F9]/g, d => d.charCodeAt(0) - 0x06F0);
    }

    function toArabicIndicDigits(num) {
        return String(num).replace(/\d/g, d => '٠١٢٣٤٥٦٧٨٩'[d]);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !$(entry.target).hasClass('counted')) {
                $('.achievement-number').each(function () {
                    const $counter = $(this);
                    const rawText = $counter.text().trim();
                    const western = toWesternDigits(rawText);
                    const target = parseInt(western.replace(/\D/g, '')) || 0;

                    let count = 0;
                    const duration = 2000;
                    const increment = Math.ceil(target / (duration / 16));

                    const hasPlus = rawText.includes('+');
                    const hasPercent = rawText.includes('%');

                    const timer = setInterval(() => {
                        count += increment;
                        if (count >= target) {
                            let finalValue = String(target);
                            if (hasPlus) finalValue = '+' + finalValue;
                            if (hasPercent) finalValue += '%';

                            if (currentLocale === 'ar') {
                                finalValue = finalValue.replace(/\d/g, d => '٠١٢٣٤٥٦٧٨٩'[d]);
                                if (hasPercent) finalValue = finalValue.replace('%', '٪');
                            }

                            $counter.text(finalValue);
                            clearInterval(timer);
                        } else {
                            let current = String(count);
                            if (hasPlus) current = '+' + current;
                            if (hasPercent) current += '%';

                            if (currentLocale === 'ar') {
                                current = current.replace(/\d/g, d => '٠١٢٣٤٥٦٧٨٩'[d]);
                                if (hasPercent) current = current.replace('%', '٪');
                            }

                            $counter.text(current);
                        }
                    }, 16);
                });
                $(entry.target).addClass('counted');
            }
        });
    }, { threshold: 0.1 });

    observer.observe($('.achievements-section')[0]);
});



</script>


<script>
$(document).ready(function() {

    // Counter Animation
    function startCounter() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = parseInt($this.attr('data-count'));
            
            if (!$this.hasClass('counted') && isInViewport($this)) {
                $this.addClass('counted');
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(countTo);
                    }
                });
            }
        });
    }
    
    // Check if element is in viewport
    function isInViewport(el) {
        if (!el.length) return false;
        
        var rect = el[0].getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
            rect.bottom >= 0
        );
    }
    
    // Add animation classes to elements
    function animateOnScroll() {
        $('.section-title, .mission-card, .team-card, .service-box, .initiative-box').each(function() {
            if (isInViewport($(this)) && !$(this).hasClass('visible')) {
                $(this).addClass('animate-on-scroll');
                setTimeout(() => {
                    $(this).addClass('visible');
                }, 100);
            }
        });
    }
    
    // Run on page load and scroll
    setTimeout(function() {
        startCounter();
        animateOnScroll();
    }, 200);
    
    $(window).on('scroll', function() {
        startCounter();
        animateOnScroll();
    });
});
</script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>



<script>
    $(document).ready(function() {

        // Navigation active state on scroll
        function setActiveNavItem() {
            const scrollPosition = $(window).scrollTop();
            
            $('.service-section').each(function() {
                const sectionTop = $(this).offset().top - 100;
                const sectionBottom = sectionTop + $(this).outerHeight();
                const sectionId = $(this).attr('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    $('.services-nav a').removeClass('active');
                    $(`.services-nav a[href="#${sectionId}"]`).addClass('active');
                }
            });
        }
        
        // Smooth scroll for navigation links
        $('.services-nav a').on('click', function(e) {
            e.preventDefault();
            
            const targetId = $(this).attr('href');
            const targetPosition = $(targetId).offset().top - 70;
            
            $('html, body').animate({
                scrollTop: targetPosition
            }, 800);
            
            $('.services-nav a').removeClass('active');
            $(this).addClass('active');
        });
        
        // Animate elements on scroll
        function animateOnScroll() {
            $('.service-content, .service-image, .feature-item, .cta-content').each(function() {
                if (isElementInViewport($(this)) && !$(this).hasClass('visible')) {
                    $(this).addClass('fade-in');
                    setTimeout(() => {
                        $(this).addClass('visible');
                    }, 100);
                }
            });
        }
        
        // Check if element is in viewport
        function isElementInViewport(el) {
            if (!el.length) return false;
            
            const rect = el[0].getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            
            return (
                rect.top <= windowHeight * 0.85 &&
                rect.bottom >= 0
            );
        }
        
        // Initialize animations and set active nav item
        setTimeout(function() {
            setActiveNavItem();
            animateOnScroll();
        }, 200);
        
        // Update on scroll
        $(window).on('scroll', function() {
            setActiveNavItem();
            animateOnScroll();
        });
    });
</script>


<script>

    // Add this JavaScript at the bottom of your page, before the closing </body> tag
$(document).ready(function() {
  // Add click event handlers to all "Learn More" links
  $('.service-link').on('click', function(e) {
    e.preventDefault();
    
    // Get the service section ID to identify which modal to show
    var sectionId = $(this).closest('.service-section').attr('id');
    var modalId = '#' + sectionId + '-modal';
    
    // Show the modal
    $(modalId).modal('show');
  });
  
  // Initialize tooltips
  $('[data-bs-toggle="tooltip"]').tooltip();
  
  // Smooth scrolling for navigation links
  $('.services-nav .nav-link').on('click', function(e) {
    var target = $(this.getAttribute('href'));
    
    if(target.length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 80
      }, 500);
    }
  });
  
  // Update active navigation based on scroll
  $(window).on('scroll', function() {
    var scrollPosition = $(window).scrollTop();
    
    $('.service-section').each(function() {
      var currentSection = $(this);
      var sectionTop = currentSection.offset().top - 100;
      var sectionBottom = sectionTop + currentSection.outerHeight();
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        $('.services-nav .nav-link').removeClass('active');
        $('.services-nav .nav-link[href="#' + currentSection.attr('id') + '"]').addClass('active');
      }
    });
  });
});

</script>

<script>
$(document).ready(function() {
    // Add click event handlers to all "Learn More" links
    $('.learn-more-btn').on('click', function(e) {
        e.preventDefault();
        
        // Get the solution section ID from the data attribute
        var solutionId = $(this).data('solution');
        var modalId = '#' + solutionId + '-modal';
        
        // Show the modal
        $(modalId).modal('show');
    });
    
    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
    
    // Smooth scrolling for navigation links
    $('.services-nav .nav-link').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        
        if(target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 500);
        }
    });
    
    // Update active navigation based on scroll
    $(window).on('scroll', function() {
        var scrollPosition = $(window).scrollTop();
        
        $('.service-section').each(function() {
            var currentSection = $(this);
            var sectionTop = currentSection.offset().top - 100;
            var sectionBottom = sectionTop + currentSection.outerHeight();
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                $('.services-nav .nav-link').removeClass('active');
                $('.services-nav .nav-link[href="#' + currentSection.attr('id') + '"]').addClass('active');
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Counter Animation for Stats
    function animateStats() {
        $('.stat-value').each(function() {
            const $this = $(this);
            const targetValue = parseInt($this.attr('data-value'));
            
            if (!$this.hasClass('counted') && isElementInViewport($this)) {
                $this.addClass('counted');
                
                $({ countValue: 0 }).animate({
                    countValue: targetValue
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countValue));
                    },
                    complete: function() {
                        $this.text(targetValue);
                    }
                });
            }
        });
    }
    
    // Animate elements on scroll
    function animateElements() {
        $('.benefit-card, .stat-card, .pillar-item, .journey-step').each(function() {
            if (isElementInViewport($(this)) && !$(this).hasClass('active')) {
                $(this).addClass('fade-in');
                setTimeout(() => {
                    $(this).addClass('active');
                }, 100);
            }
        });
    }
    
    // Check if element is in viewport
    function isElementInViewport(el) {
        if (!el.length) return false;
        
        const rect = el[0].getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        
        return (
            rect.top <= windowHeight * 0.85 &&
            rect.bottom >= 0
        );
    }
    
    // Run animations on page load and scroll
    setTimeout(function() {
        animateStats();
        animateElements();
    }, 200);
    
    $(window).on('scroll', function() {
        animateStats();
        animateElements();
    });
    
    // Add glow effect to cards
    $('.benefit-card').hover(
        function() {
            $(this).find('.card-glow').css('transform', 'translateY(100%)');
        },
        function() {
            $(this).find('.card-glow').css('transform', 'translateY(-100%)');
        }
    );
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fetch all forms that need validation
    var forms = document.querySelectorAll('.needs-validation');
    
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();
                // Show success message instead of actual submission since there are no openings
                alert('Thank you for your interest! Your information has been recorded, and we will contact you when relevant positions become available.');
                $('#resumeModal').modal('hide');
                form.reset();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
});
</script>


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

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Clone tech items to create seamless infinite scroll
    const techRows = document.querySelectorAll('.tech-row');
    
    techRows.forEach(row => {
        // Get all the original tech items
        const techItems = row.querySelectorAll('.tech-item');
        
        // Clone each item and append to the row
        techItems.forEach(item => {
            const clone = item.cloneNode(true);
            row.appendChild(clone);
        });
    });
    
    // Pause animation on hover
    const techCarousels = document.querySelectorAll('.tech-carousel');
    
    techCarousels.forEach(carousel => {
        const row = carousel.querySelector('.tech-row');
        
        carousel.addEventListener('mouseenter', () => {
            row.style.animationPlayState = 'paused';
        });
        
        carousel.addEventListener('mouseleave', () => {
            row.style.animationPlayState = 'running';
        });
    });
});
</script>


    @yield('scripts')
</body>
</html>