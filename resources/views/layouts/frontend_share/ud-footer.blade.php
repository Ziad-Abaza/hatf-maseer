    <!-- start footer -->
    <footer id="footer" class="footer pt-5 text-center">
        <div class="pt-3" style="box-shadow: 1px -12px 36px -31px black;">
            <div class="container">
                <div>
                    <img src="{{ asset('storage/icons/' . $settings['branding']['logo']) }}" width="110px" height="60px" alt="لوجو الشركة">
                </div>
                <div class="social-links">
                    <a href="{{config('setting.social_media.twitter')}}" target="_blank">
                        <img src="{{ asset('frontend/images/tiktok.svg') }}" alt="تويتر">
                    </a>
                    <a href="https://wa.me/+966{{ config('setting.contact.phone') }}" target="_blank">
                        <img src="{{ asset('frontend/images/whatsapp.svg') }}">
                    </a>
                    <a href="{{config('setting.social_media.instagram')}}" target="_blank">
                        <img src="{{ asset('frontend/images/ri_instagram-line.svg') }}" alt="انستجرام">
                    </a>
                </div>
            </div>
            <div class="py-3 container">
                <p class="translatable"
                    data-ar="{{__('frontend/footer.content.desc')}}"
                    data-en="{{__('frontend/footer.content.desc')}}">

                    {{__('frontend/footer.content.desc')}}

                </p>

            </div>
            <div class="container contact-info">
                <ul class="list-unstyled row">
                    <li class="col-md-6 col-sm-12 mb-2 translatable" data-ar="{{__('frontend/footer.country.country')}}"
                        data-en="Kingdom of Saudi Arabia">
                        <a href="http://">{{__('frontend/footer.country.country')}}</a>
                    </li>

                    <li class="col-md-6 col-sm-12 mb-2">
                     <a href="https://wa.me/{{ config('setting.contact.phone') }}" target="_blank">{{ __('frontend/footer.phones.phones') }}</a>
                    </li>
                    <li class="col-md-6 col-sm-12 mb-2">
                    <a href="mailto:{{ config('setting.contact.email') }}">{{ config('setting.contact.email') }}</a>
                    </li>
                    <li class="col-md-6 col-sm-12 mb-2">
                        <a href="{{__('frontend/footer.domain.domain')}}" target="_blank">{{__('frontend/footer.domain.domain')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="rights">
            <hr class="my-1" />
            <p class="translatable my-1" data-ar="{{__('frontend/footer.rights.a')}}"
                data-en="{{__('frontend/footer.rights.a')}}">
                {{__('frontend/footer.rights.a')}}
            </p>
            <hr class="my-1" />
            <p class="translatable text-black-50 mb-1" data-ar="{{__('frontend/footer.rights.b')}}" data-en="{{__('frontend/footer.rights.b')}}">
             <a style="text-decoration: underline;" href="https://hatf.sa">{{__('frontend/footer.rights.b')}}</a>
            </p>
        </div>

    </footer>
    <!-- end footer -->
