<div id="hero" class="hero" dir="ltr">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($banners as $index => $banner)
            <button style="background-color: white; width: 10px; height: 10px; border-radius: 50%; position: sbsolute; z-index: 1;" type="button"
                data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$index}}" class="active" aria-current="true"
                aria-label="Slide {{$index+1}}">
            </button>
          @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $index => $banner)
            <div class="carousel-item @if ($index == 0) active @endif" data-bs-interval="20000">
                <img src="{{ $banner->getFirstMediaUrl('banners') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center text-center w-100 h-100"
                     style="background: rgba(0, 0, 0, 0.5);">
                     {!! de_lang($banner['content']) !!}
                     <a href="#form" class="translatable" data-ar="{{ __('frontend/banner.contact_us.contact_us') }}" data-en="Contact Us">{{ __('frontend/banner.contact_us.contact_us') }}</a>
                </div>
            </div>
        @endforeach
        
        </div>
    </div>
</div>