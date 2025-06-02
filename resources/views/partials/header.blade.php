<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('uploads/logo.png') }}" alt="Company Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                   @php
                        $navItems = [
                            'home' => __('site.home'),
                            'about' => __('site.about'),
                            'services_and_solutions' => __('site.services_and_solutions'),
                            'value_proposition' => __('site.value_proposition'),
                            'contact' => __('site.contact'),
                            'career' => __('site.career')
                        ];
                    @endphp

                    @foreach ($navItems as $route => $label)
                        @if ($route === 'services_and_solutions')
                            

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('services_and_solutions.*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('site.services_and_solutions') }}
                            </a>

                            <div class="dropdown-menu p-3 mega-dropdown" aria-labelledby="navbarDropdown" style="background: steelblue; width: 1000px;">
                                <div class="row">
                                    <!-- Services Column -->
                                    <div class="col-md-6">
                                        <h6 class="dropdown-header" style="font-weight: 900; color: white;">{{ __('service.services') }}</h6>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('service.it_managed_services') }}</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('service.cloud_transformation_services') }}</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('service.data_analytics_services') }}</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('service.cybersecurity') }}</a>
                                        <div class="text-center mt-2">
                                            <a href="{{ route('service') }}" style="font-weight: 900; color: white;" class="btn btn-sm">{{ __('service.show_all_services') }}</a>
                                        </div>
                                    </div>

                                    <!-- Solutions Column -->
                                    <div class="col-md-6">
                                        <h6 class="dropdown-header" style="font-weight: 900; color: white;">{{ __('solution.solutions') }}</h6>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('solution.hrm_solution') }}</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('solution.erp_solutions') }}</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('solution.cloud_offerings') }} ({{ __('solution.cloud_providers') }})</a>
                                        <a class="dropdown-item" style="font-weight: 900; color: #005487;" href="">{{ __('solution.banking_solutions') }}</a>
                                        <div class="text-center mt-2">
                                            <a href="{{ route('solution') }}" style="font-weight: 900; color: white;" class="btn btn-sm">{{ __('solution.show_all_solutions') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}" href="{{ route($route) }}">
                                    {{ $label }}
                                </a>
                            </li>
                        @endif
                    @endforeach

                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown">
                            @if(app()->getLocale() == 'en')
                                <img src="{{ asset('uploads/en.png') }}" alt="English Flag" width="40px" height="40px">
                            @else
                                <img src="{{ asset('uploads/ar.png') }}" alt="Arabic Flag" width="40px" height="40px">
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">
                                    <img src="{{ asset('uploads/en.png') }}" alt="English Flag" width="40px" height="40px"> English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('language.switch', 'ar') }}">
                                    <img src="{{ asset('uploads/ar.png') }}" alt="Arabic Flag" width="40px" height="40px"> Arabic
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
