<div id="card-pounter" class="card-pounter py-5">
    <div class="py-5 text-center">
        <h2 class="fw-bold translatable" data-ar=" {{__('frontend/advatages.title.title')}}" data-en="  {{__('frontend/advatages.title.title')}}">
            {{__('frontend/advatages.title.title')}}
        </h2>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="containers">
                @foreach ($advatages as $index => $advatage)
                <input type="radio" name="slide" id="c{{$index+1}}" checked>
                <label for="c{{$index+1}}" class="card">
                    <img src="{{ $advatage->getFirstMediaUrl('advantages') }}" alt="{{ $advatage->getFirstMediaUrl('advantages') }}"
                    style="object-fit: cover;">
                    <div class="row" 
                    style="background: #0000008a; height: 100%; width: 100%;">
                        <div class="description">
                            {!! de_lang($advatage['content']) !!}
                        </div>
                    </div>
                </label>
                @endforeach
            </div>
        </div>
    </div>
</div>
