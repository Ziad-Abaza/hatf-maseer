<div id="about" class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-lg-block d-none center">
                <img src="{{asset('frontend/images/about-img.svg')}}" width="75%" height="100%" alt="img">
            </div>
            <div class="col-12 col-lg-6 text-center text-lg-end d-flex justify-content-center flex-column">
                <h2 class="fw-bold pb-3 translatable" data-ar="{{ __('frontend/about.title.title') }}" data-en="Get to Know Us">{{ __('frontend/about.title.title') }}
                </h2>

                <p class="fw translatable"
                    data-ar="{{ __('frontend/about.desc.desc') }}"
                    data-en="{{ __('frontend/about.desc.desc') }}">
                {{ __('frontend/about.desc.desc') }}
                </p>
            </div>
        </div>
    </div>
</div>



