<div id="infinite-bar" class="infinite-bar py-5">
            <div class="py-5 text-center">
                <h2 class="fw-bold translatable" data-ar="{{__('frontend/partner.title.title')}}" data-en="{{__('frontend/partner.title.title')}}">
                    {{__('frontend/partner.title.title')}}
                </h2>
            </div>
            <div class="shadow-box" style="box-shadow: 0px 0px 33px -22px black;">
                <div class="logos-container">
                    <div class="logos" style="box-shadow: 0px 0px 33px -22px black;">
                        <div class="logos-slide">
                            @foreach ($partners as $partner)
                            <img src="{{ $partner->getFirstMediaUrl('partenrs') }}" alt="Partner Logo" />
                            @endforeach
                        </div>
                        <div class="logos-slide">
                            @foreach ($partners as $partner)
                            <img src="{{ $partner->getFirstMediaUrl('partenrs') }}" alt="Partner Logo" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>