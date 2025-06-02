<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>


    

        <div class="carousel-inner">
            <!-- First Slide (Active) -->
            <div class="carousel-item active">
                <div class="video-container">
                    <video class="carousel-video" muted playsinline loop>
                        <source src="uploads/hero1.mp4" type="video/mp4">
                         {{ __('carousel.video_not_supported') }}
                    </video>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>{{ __('carousel.slide1_heading') }}</h2>
                    <p>{{ __('carousel.slide1_subheading') }}</p>
                </div>
            </div>
            
            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="video-container">
                    <video class="carousel-video" muted playsinline loop data-src="uploads/hero2.mp4">
                        <!-- Video source will be loaded via jQuery -->
                    </video>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>{{ __('carousel.slide2_heading') }}</h2>
                    <p>{{ __('carousel.slide2_subheading') }}</p>
                </div>
            </div>
            
            <!-- Third Slide -->
            <div class="carousel-item">
                <div class="video-container">
                    <video class="carousel-video" muted playsinline loop data-src="uploads/hero3.mp4">
                        <!-- Video source will be loaded via jQuery -->
                    </video>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>{{ __('carousel.slide3_heading') }}</h2>
                    <p>{{ __('carousel.slide3_subheading') }}</p>
                </div>
            </div>
        </div>
    <!-- <div class="carousel-caption d-none d-md-block">
        <h2>Welcome to Our Website</h2>
        <p>Discover our amazing offerings!</p> -->
        
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>





