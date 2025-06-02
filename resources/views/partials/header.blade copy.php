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
                    @foreach ([
                        'home' => __('site.home'),
                        'about' => __('site.about'),
                        'service' => __('site.services'),
                        'engagement_model' => __('site.engagement_model'),
                        'value_proposition' => __('site.value_proposition'),
                        'investor' => __('site.investors'),
                        'contact' => __('site.contact')
                    ] as $route => $label)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}" href="{{ route($route) }}">
                                {{ $label }}
                            </a>
                        </li>
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
