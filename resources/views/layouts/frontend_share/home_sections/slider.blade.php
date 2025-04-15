<div id="Slider" class="Slider py-5 overflow-x-hidden" dir="ltr">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div
                class="col-12 pb-md-0 pb-4 col-md-6 text-center d-flex align-content-md-start align-items-center controls-container">
                <h2 class="translatable fw-bold" data-ar="{{ __('frontend/services.title.title') }}" data-en="Services">{{ __('frontend/services.title.title') }}</h2>
                <div class="custom-nav d-md-block d-none ">
                    <button id="prev-slide">&lt;</button>
                    <button id="next-slide">&gt;</button>
                </div>
            </div>

            <div class="col-md-10 col-12 slide-Shadow">
                <div class="swiper">
                    <div class="swiper-wrapper">
                       
                       
                        @foreach ($services as $service )
                        <div class="swiper-slide">
                            <img src="{{ $service->getFirstMediaUrl('services') }}" alt="">
                            <div style="
                                position: absolute;
                                background: #0000007a;
                                width: 100%;
                                height: 100%;
                                margin: 0;
                                color: white;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                flex-direction: column;">
                                <div style="overflow: auto;">
                                    
                                {!! de_lang($service['content']) !!}
                                </div>
                            </div>
                        </div>   
                        @endforeach

                        {{-- <div class="swiper-slide"><img src="{{asset('frontend/images/service-img1.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="صيانة غرف ومستودعات التبريد والتجميد"
                                data-en="Maintenance of cooling and freezing rooms and warehouses">
                                أنظمة شفط الفنادق والتبريد المركزية
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img2.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="صيانة صناديق السيارات المبردة"
                                data-en="Maintenance of refrigerated vehicle boxes">
                                صيانة وحدات تبريد السيارات المبردة
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img3.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="صيانة وحدات تبريد السيارات المبردة"
                                data-en="Maintenance of refrigerated vehicle cooling units">
                                صيانة صناديق السيارات المبردة
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img4.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="أنظمة شفط الفنادق والتبريد المركزية"
                                data-en="Hotel exhaust and central cooling systems">
                                صيانة غرف ومستودعات التبريد والتجميد
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img2.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="صيانة صناديق السيارات المبردة"
                                data-en="Maintenance of refrigerated vehicle boxes">
                                صيانة صناديق السيارات المبردة
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img3.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="صيانة وحدات تبريد السيارات المبردة"
                                data-en="Maintenance of refrigerated vehicle cooling units">
                                صيانة وحدات تبريد السيارات المبردة
                            </div>
                        </div>
                        <div class="swiper-slide"><img src="{{asset('frontend/images/service-img4.png')}}" alt="">
                            <div class="overlay-s translatable" data-ar="أنظمة شفط الفنادق والتبريد المركزية"
                                data-en="Hotel exhaust and central cooling systems">
                                أنظمة شفط الفنادق والتبريد المركزية
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 2,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
        },
    });

    document.getElementById("prev-slide").addEventListener("click", function () {
        swiper.slidePrev();
    });

    document.getElementById("next-slide").addEventListener("click", function () {
        swiper.slideNext();
    });
});

</script>