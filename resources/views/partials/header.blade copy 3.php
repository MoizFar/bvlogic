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
                            'investor' => __('site.investors'),
                            'contact' => __('site.contact')
                        ];
                    @endphp

                    @foreach ($navItems as $route => $label)
                        @if ($route === 'services_and_solutions')
                            

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('services_and_solutions.*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('site.services_and_solutions') }}
                            </a>

                            <div class="dropdown-menu p-3 mega-dropdown" aria-labelledby="navbarDropdown" style="width: 1000px;">
                                <div class="row">
                                    <!-- Services Column -->
                                    <div class="col-md-6">
                                        <h6 class="dropdown-header">{{ __('site.services') }}</h6>
                                        <a class="dropdown-item" href="">{{ __('site.it_managed_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.cloud_transformation_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.data_analytics_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.it_training_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.ai_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.domain_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.operating_model_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.cybersecurity') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.resource_outsourcing_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.it_infrastructure_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.application_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.strategy_consulting_services') }}</a>
                                        <a class="dropdown-item" href="">{{ __('site.intelligent_automation_services') }}</a>

                                    </div>

                                    <!-- Solutions Column -->
                                    <div class="col-md-6">
                                        <h6 class="dropdown-header">{{ __('solution.solutions') }}</h6>

                                                        
                                            <!-- General Solutions -->
                                            <a class="dropdown-item" href="">{{ __('solution.hrm_solution') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.helpdesk_solution') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.erp_solutions') }} (Oracle, Microsoft Dynamics, Odoo)</a>
                                            <a class="dropdown-item" href="">{{ __('solution.cloud_offerings') }} (AWS, Azure, OCI – Multi-cloud)</a>
                                            <a class="dropdown-item" href="">{{ __('solution.intelligent_automation_services') }}</a>

                                            <!-- Industry-Specific Solutions -->
                                            <a class="dropdown-item" href="">{{ __('solution.banking_solutions') }} (Core, Digital & Mobile Banking)</a>
                                            <a class="dropdown-item" href="">{{ __('solution.healthcare_solutions') }} (100+ Hospitals Implemented)</a>
                                            <a class="dropdown-item" href="">{{ __('solution.call_center_solutions') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.telecom_services') }}</a>
                                            
                                            <!-- FSI Sector Services -->
                                            <a class="dropdown-item" href="">{{ __('solution.crm_and_contact_centers') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.fraud_and_compliance') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.data_analytics_and_lake') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.payment_gateway') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.api_governance') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.bpm_rpa') }}</a>
                                            <a class="dropdown-item" href="">{{ __('solution.ai_chatbots') }}</a>
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
                            {{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('language.switch', 'ar') }}">العربية</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
