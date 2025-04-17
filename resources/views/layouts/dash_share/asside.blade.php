        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="#" class="app-brand-link">
                    <img src="{{ asset('storage/icons/' . $settings['branding']['logo']) }}" width="110px" height="60px"
                        alt="لوجو الشركة">
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                    <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">


                <!-- Dashboards -->
                {{-- <li class="menu-item active">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-smart-home"></i> <!-- Home Icon -->
                        <div data-i18n="Dashboards">Dashboards</div>
                    </a>
                </li> --}}
                <!-- Dashboards -->

                <!-- Components -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">

                        {{ __('dash/links.pages') }}

                    </span>
                </li>
                <!-- Components -->



                {{-- // Home --}}

                <!-- blogs -->
                <li class="menu-item {{ route_is('blogs.*', 'open') }}" id="blogs">
                    <a href="{{ router('blogs.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- blogs Icon -->
                        <div data-i18n="{{ __('dash/links.blogs.main_titel') }}">
                            {{ __('dash/links.blogs.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('blogs.index', 'active') }}">
                            <a href="{{ router('blogs.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.blogs.main_titel') }}">
                                    {{ __('dash/links.blogs.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('blogs.create', 'active') }}">
                            <a href="{{ router('blogs.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.blogs.sub_titel') }}">
                                    {{ __('dash/links.blogs.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- banners -->

                <!-- banners -->
                <li class="menu-item {{ route_is('banners.*', 'open') }}" id="banners">
                    <a href="{{ router('banners.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- banners Icon -->
                        <div data-i18n="{{ __('dash/links.banners.main_titel') }}">
                            {{ __('dash/links.banners.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('banners.index', 'active') }}">
                            <a href="{{ router('banners.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.banners.main_titel') }}">
                                    {{ __('dash/links.banners.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('banners.create', 'active') }}">
                            <a href="{{ router('banners.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.banners.sub_titel') }}">
                                    {{ __('dash/links.banners.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- banners -->

                <!-- advantags -->
                <li class="menu-item {{ route_is('advatages.*', 'open') }}" id="advantags">
                    <a href="{{ router('advatages.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- advantags Icon -->
                        <div data-i18n="{{ __('dash/links.advantags.main_titel') }}">
                            {{ __('dash/links.advantags.index.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('advatages.index', 'active') }}">
                            <a href="{{ router('advatages.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.advantags.main_titel') }}">
                                    {{ __('dash/links.advantags.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('advatages.create', 'active') }}">
                            <a href="{{ router('advatages.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.advantags.sub_titel') }}">
                                    {{ __('dash/links.advantags.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- advantags -->

                <!-- services -->
                <li class="menu-item {{ route_is('services.*', 'open') }}" id="services">
                    <a href="{{ router('services.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- services Icon -->
                        <div data-i18n="{{ __('dash/links.services.main_titel') }}">
                            {{ __('dash/links.services.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('services.index', 'active') }}">
                            <a href="{{ router('services.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.services.main_titel') }}">
                                    {{ __('dash/links.services.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('services.create', 'active') }}">
                            <a href="{{ router('services.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.services.sub_titel') }}">
                                    {{ __('dash/links.services.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- services -->

                <!-- products -->
                <li class="menu-item {{ route_is('products.*', 'open') }}" id="products">
                    <a href="{{ router('products.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- products Icon -->
                        <div data-i18n="{{ __('dash/links.products.main_titel') }}">
                            {{ __('dash/links.products.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('products.index', 'active') }}">
                            <a href="{{ router('products.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.products.main_titel') }}">
                                    {{ __('dash/links.products.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('products.create', 'active') }}">
                            <a href="{{ router('products.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.products.sub_titel') }}">
                                    {{ __('dash/links.products.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- products -->

                <!-- partenrs -->
                <li class="menu-item {{ route_is('partenrs.*', 'open') }}" id="partenrs">
                    <a href="{{ router('partenrs.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- partenrs Icon -->
                        <div data-i18n="{{ __('dash/links.partenrs.main_titel') }}">
                            {{ __('dash/links.partenrs.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('partenrs.index', 'active') }}">
                            <a href="{{ router('partenrs.index') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.partenrs.main_titel') }}">
                                    {{ __('dash/links.partenrs.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('partenrs.create', 'active') }}">
                            <a href="{{ router('partenrs.create') }}" class="menu-link">
                                <div data-i18n="{{ __('dash/links.partenrs.sub_titel') }}">
                                    {{ __('dash/links.partenrs.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- partenrs -->

                {{-- // Home --}}


                <!-- marketers -->
                <li class="menu-item {{ route_is('marketers.*', 'open') }}" id="marketers">
                    <a href="{{ router('marketers.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-phone"></i>
                        <div data-i18n="{{ __('marketers/index.main_titel') }}">
                            {{ __('marketers/index.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('marketers.index', 'active') }}">
                            <a href="{{ router('marketers.index') }}" class="menu-link">
                                <div data-i18n="{{ __('marketers/index.main_titel') }}">
                                    {{ __('marketers/index.main_titel') }}
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- side_bar -->


                <!-- contacts -->
                <li class="menu-item {{ route_is('contacts.*', 'open') }}" id="contacts">
                    <a href="{{ router('contacts.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-phone"></i>
                        <div data-i18n="{{ __('contacts/index.main_titel') }}">
                            {{ __('contacts/index.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('contacts.index', 'active') }}">
                            <a href="{{ router('contacts.index') }}" class="menu-link">
                                <div data-i18n="{{ __('contacts/index.main_titel') }}">
                                    {{ __('contacts/index.main_titel') }}
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- side_bar -->

                <!-- Languages -->
                <li class="menu-item {{ route_is('languages.*', 'open') }}" id="languages">
                    <a href="{{ router('languages.index', ['slug' => 'home']) }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-language"></i> <!-- Languages Icon -->
                        <div data-i18n="{{ __('languages/index.main_titel') }}">
                            {{ __('languages/index.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        @foreach ($translationFiles as $translationFile)
                            <li class="menu-item">
                                <a href="{{ router('languages.index', ['slug' => $translationFile]) }}"
                                    class="menu-link">
                                    <div data-i18n="{{ $translationFile }}">{{ $translationFile }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- Languages -->

                <!-- Settings -->
                <li class="menu-item {{ route_is('settings.*', 'open') }}" id="settings">
                    <a href="{{ router('settings.edit') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-settings"></i> <!-- Settings Icon -->
                        <div data-i18n="{{ __('settings/edit.main_titel') }}">{{ __('settings/edit.main_titel') }}
                        </div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('settings.edit', 'active') }}">
                            <a href="{{ router('settings.edit') }}" class="menu-link">
                                <div data-i18n="{{ __('settings/edit.sub_titel') }}">
                                    {{ __('settings/edit.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Settings -->

                <!-- Roles -->
                <li class="menu-item {{ route_is('roles.*', 'open') }}" id="roles">
                    <a href="{{ router('roles.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-shield-lock"></i> <!-- Roles Icon -->
                        <div data-i18n="{{ __('roles/index.main_titel') }}">{{ __('roles/index.main_titel') }}</div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('roles.index', 'active') }}">
                            <a href="{{ router('roles.index') }}" class="menu-link">
                                <div data-i18n="{{ __('roles/index.main_titel') }}">
                                    {{ __('roles/index.main_titel') }}
                                </div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('roles.create', 'active') }}">
                            <a href="{{ router('roles.create') }}" class="menu-link">
                                <div data-i18n="{{ __('roles/create.title.sub') }}">
                                    {{ __('roles/create.title.sub') }}
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Roles -->

                <!-- Admins -->
                <li class="menu-item {{ route_is('admins.*', 'open') }}" id="admins">
                    <a href="{{ router('admins.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- Admins Icon -->
                        <div data-i18n="{{ __('admins/index.main_titel') }}">{{ __('admins/index.main_titel') }}
                        </div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('admins.index', 'active') }}">
                            <a href="{{ router('admins.index') }}" class="menu-link">
                                <div data-i18n="{{ __('admins/index.main_titel') }}">
                                    {{ __('admins/index.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('admins.create', 'active') }}">
                            <a href="{{ router('admins.create') }}" class="menu-link">
                                <div data-i18n="{{ __('admins/create.sub_titel') }}">
                                    {{ __('admins/create.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Admins -->


                <!-- Admins -->
                <li class="menu-item {{ route_is('backups.*', 'open') }}" id="backups">
                    <a href="{{ router('backups.index') }}" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-user"></i> <!-- Admins Icon -->
                        <div data-i18n="{{ __('backups/index.main_titel') }}">{{ __('backups/index.main_titel') }}
                        </div>
                        <div class="badge bg-primary rounded-pill ms-auto">0</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ route_is('backups.index', 'active') }}">
                            <a href="{{ router('backups.index') }}" class="menu-link">
                                <div data-i18n="{{ __('backups/index.main_titel') }}">
                                    {{ __('backups/index.main_titel') }}</div>
                            </a>
                        </li>
                        <li class="menu-item {{ route_is('backups.index.create', 'active') }}">
                            <a href="{{ router('backups.create') }}" class="menu-link">
                                <div data-i18n="{{ __('backups/index.create.sub_titel') }}">
                                    {{ __('backups/index.create.sub_titel') }}</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- backups -->


            </ul>
        </aside>
        <!-- / Menu -->
