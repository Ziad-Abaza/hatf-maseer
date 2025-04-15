@extends('layouts.dash')



@section('content')
    <!-- Content -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('banners.store') }}" method="POST" class="browser-default-validation"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- img -->
                            <div class="col-12">
                                <x-dash.img content="img" 
                                data=''  />
                            </div>

                            <x-dash.editor_ar content="content_ar" trans=" {{ __('dash/create.labels.content_ar') }}"
                                data='<h2 class="text-white pb-3 translatable"
                                    data-ar="ابتكار وجودة لا مثيل لها في حلول التغليف التي تلبي احتياجات كافة الصناعات.">
                                    ابتكار وجودة لا مثيل لها في حلول التغليف التي تلبي احتياجات كافة الصناعات.
                                </h2>
                                <p class="text-white mb-2 translatable" data-ar="حلول تغليف قوية، تصاميم مبتكرة.">
                                    حلول تغليف قوية، تصاميم مبتكرة.
                                </p>'  />

                            <x-dash.editor_en content="content_en" trans=" {{ __('dash/create.labels.content_en') }}"
                                data='<h2 class="text-white pb-3 translatable"
                            data-en="Innovation and unparalleled quality in packaging solutions that meet the needs of all industries.">
                                Innovation and unparalleled quality in packaging solutions that meet the needs of all industries.
                               </h2>
                                <p class="text-white mb-2 translatable" 
                                    data-en="Strong packaging solutions, innovative designs.">
                                Strong packaging solutions, innovative designs.
                                </p>' />

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12" style="display: flex; justify-content: center;">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        {{ __('dash/create.buttons.save') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
