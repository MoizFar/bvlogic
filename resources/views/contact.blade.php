@extends('layouts.app')

@section('title', __('site.home'))

@section('content')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp


<section class="contact-section py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h2 class="section-title">
                        {{ __('site.contact') }} <span class="text-accent">{{ __('site.us') }}</span>
                    </h2>
                    
                    <p class="contact-subtitle">
                        {{ __('site.contact_subtitle') }}
                    </p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="icon-container">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-details">
                                <h4>{{ __('site.our_location') }}</h4>
                                <p>{{ __('site.address') }}</p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="icon-container">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="method-details">
                                <h4>{{ __('site.phone_number') }}</h4>
                                <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="icon-container">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-details">
                                <h4>{{ __('site.email_address') }}</h4>
                                <p><a href="mailto:info@bvlogic.com">info@bvlogic.com</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="icon-container">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="method-details">
                                <h4>{{ __('site.business_hours') }}</h4>
                                <p>{{ __('site.working_hours') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-media-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form-container">
                    <div class="form-header">
                        <h3>{{ __('site.send_message') }}</h3>
                        <p>{{ __('site.form_subtitle') }}</p>
                    </div>
                    
                    <form id="contactForm" class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">{{ __('site.full_name') }} <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="{{ __('site.full_name_placeholder') }}" required>
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="email">{{ __('site.email') }} <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('site.email_placeholder') }}" required>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">{{ __('site.phone') }} <span class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="{{ __('site.phone_placeholder') }}" required>
                            </div>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="query">{{ __('site.query') }} <span class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text align-items-start pt-2"><i class="fas fa-comment"></i></span>
                                <textarea class="form-control" id="query" name="query" rows="5" placeholder="{{ __('site.query_placeholder') }}" required>{{ old('query') }}</textarea>
                            </div>
                            @error('query')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary btn-submit">
                                <span class="btn-text">{{ __('site.submit') }}</span>
                                <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@push('scripts')

<script>

$(document).ready(function() {
    // Input field enhancement
    $('.form-control').on('focus', function() {
        $(this).closest('.input-group').addClass('input-group-focus');
        $(this).closest('.form-group').addClass('form-group-focus');
    }).on('blur', function() {
        $(this).closest('.input-group').removeClass('input-group-focus');
        $(this).closest('.form-group').removeClass('form-group-focus');
    });
    
    // Form validation
    $('#contactForm').on('submit', function(e) {
        let isValid = true;
        
        // Name validation
        if ($('#name').val().trim() === '') {
            showError('#name', 'Please enter your name');
            isValid = false;
        } else {
            clearError('#name');
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test($('#email').val().trim())) {
            showError('#email', 'Please enter a valid email address');
            isValid = false;
        } else {
            clearError('#email');
        }
        
        // Phone validation
        const phoneValue = $('#phone').val().trim();
        if (phoneValue === '' || phoneValue.length < 10) {
            showError('#phone', 'Please enter a valid phone number');
            isValid = false;
        } else {
            clearError('#phone');
        }
        
        // Query validation
        if ($('#query').val().trim() === '') {
            showError('#query', 'Please enter your message');
            isValid = false;
        } else {
            clearError('#query');
        }
        
       
        
        // Prevent form submission if validation fails
        if (!isValid) {
            e.preventDefault();
            
            // Scroll to first error
            const firstError = $('.text-danger').first();
            if (firstError.length) {
                $('html, body').animate({
                    scrollTop: firstError.offset().top - 100
                }, 500);
            }
        } else {
            // Show loading state on submit button
            const $btn = $(this).find('button[type="submit"]');
            $btn.prop('disabled', true);
            $btn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
        }
    });
    
    // Helper functions for form validation
    function showError(field, message) {
        const $field = $(field);
        const $formGroup = $field.closest('.form-group');
        
        // Remove any existing error message
        $formGroup.find('.text-danger').remove();
        
        // Add error class and message
        $field.addClass('is-invalid');
        
        // Different handling for checkbox
        if ($field.attr('type') === 'checkbox') {
            $formGroup.append(`<span class="text-danger d-block">${message}</span>`);
        } else {
            $formGroup.append(`<span class="text-danger">${message}</span>`);
        }
    }
    
    function clearError(field) {
        const $field = $(field);
        const $formGroup = $field.closest('.form-group');
        
        $field.removeClass('is-invalid');
        $formGroup.find('.text-danger').remove();
    }
    
    // International phone input (optional - requires intl-tel-input library)
    if ($.fn.intlTelInput) {
        $("#phone").intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
            preferredCountries: ["us", "gb", "ca"],
            separateDialCode: true
        });
    }
    
    // Autofocus first field on page load
    setTimeout(function() {
        $('#name').focus();
    }, 500);
    
    // Button hover animation
    $('.btn-submit').hover(
        function() {
            $(this).find('.btn-icon i').addClass('fa-beat');
        },
        function() {
            $(this).find('.btn-icon i').removeClass('fa-beat');
        }
    );
});

</script>

@endpush
