    <!-- start navbar -->
    <header>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/icons/' . $settings['branding']['logo']) }}" alt="img" width="120px"
                        height="60px" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active translatable reverse-text" aria-current="page"
                                href=" {{ url(route('hom.index')) . '#hero' }} "
                                data-ar="{{ __('frontend/nav.nav.hero') }}"
                                data-en="Home">{{ __('frontend/nav.nav.hero') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#about' }} "
                                data-ar="{{ __('frontend/nav.nav.about') }}"
                                data-en="{{ __('frontend/nav.nav.about') }}"> {{ __('frontend/nav.nav.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#Slider' }} "
                                data-ar="{{ __('frontend/nav.nav.Slider') }}"
                                data-en="Services">{{ __('frontend/nav.nav.Slider') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#product' }} "
                                data-ar="{{ __('frontend/nav.nav.product') }}"
                                data-en="Products">{{ __('frontend/nav.nav.product') }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="direction: ltr;" class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#card-pounter' }} "
                                data-ar="{{ __('frontend/nav.nav.card_pounter') }}"
                                data-en="Services">{{ __('frontend/nav.nav.card_pounter') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#infinite-bar' }} "
                                data-ar="{{ __('frontend/nav.nav.infinite_bar') }}"
                                data-en="Partners">{{ __('frontend/nav.nav.infinite_bar') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text"
                                href=" {{ url(route('hom.index')) . '#form' }} "
                                data-ar="{{ __('frontend/nav.nav.form') }}"
                                data-en="Contact Us">{{ __('frontend/nav.nav.form') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link translatable reverse-text" href="{{ route('blogns') }}"
                                data-ar="{{ __('frontend/nav.nav.blogns') }}"
                                data-en="Contact Us">{{ __('frontend/nav.nav.blogns') }}</a>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-center align-items-center">




                        <div class="dropdown">
                            <button class="btn lang dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="langText"
                                    style="text-transform: uppercase;">{{ LaravelLocalization::getCurrentLocale() }}
                                </span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {{-- <li><a class="dropdown-item lang-option" href="#" data-lang="EN">EN</a></li>
                                <li><a class="dropdown-item lang-option" href="#" data-lang="AR">AR</a></li> --}}
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if ($localeCode === 'en')
                                        <li>
                                            <a class="dropdown-item lang-option" rel="alternate"
                                                hreflang="{{ $localeCode }}" data-lang="{{ $localeCode }}"
                                                onclick="changeLanguage(this)">
                                                <span class="align-middle">{{ $properties['native'] }}</span>
                                            </a>
                                        </li>
                                    @elseif ($localeCode === 'ar')
                                        <li>
                                            <a class="dropdown-item lang-option" rel="alternate"
                                                hreflang="{{ $localeCode }}" data-lang="{{ $localeCode }}"
                                                onclick="changeLanguage(this)">
                                                <span class="align-middle">{{ $properties['native'] }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- end navbar -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarToggler = document.querySelector(".navbar-toggler");
            const navbarCollapse = document.querySelector(".navbar-collapse");
            const navLinks = document.querySelectorAll(".nav-link");

            // اغلاق النافبار عند الضغط على أي رابط
            navLinks.forEach(link => {
                link.addEventListener("click", () => {
                    if (window.innerWidth <= 991) {
                        navbarCollapse.classList.remove("show");
                        navbarToggler.classList.add("collapsed");
                    }
                });
            });

            // اغلاق النافبار عند الضغط خارجها
            document.addEventListener("click", (event) => {
                if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
                    navbarCollapse.classList.remove("show");
                    navbarToggler.classList.add("collapsed");
                }
            });
        });
    </script>
