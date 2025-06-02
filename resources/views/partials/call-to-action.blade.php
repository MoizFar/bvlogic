<!-- Call to Action Section -->
<section id="cta-section" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="mb-4">{{ __('site.cta_title') }}</h2>
                <p class="lead mb-4">{{ __('site.cta_description') }}</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-3 mb-2 mb-md-0">
                        {{ __('site.contact_us') }}
                    </a>
                    <a href="{{ route('service') }}" class="btn btn-outline-light btn-lg">
                        {{ __('site.cta_view_services') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>