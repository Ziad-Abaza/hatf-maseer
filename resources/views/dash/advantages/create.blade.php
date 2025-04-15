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
                    <form action="{{ route('advatages.store') }}" method="POST" class="browser-default-validation"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- img -->
                            <div class="col-12">
                                <x-dash.img content="img" data='' />
                            </div>

                            <x-dash.editor_ar content="content_ar" trans=" {{ __('dash/create.labels.content_ar') }}"
                                data='<h4 class="translatable" data-ar="جودة لا مثيل لها" >
                                    جودة لا مثيل لها
                                </h4>
                                <p class="translatable"
                                    data-ar="نحن نستخدم أحدث التقنيات لضمان تقديم منتجات تبريد عالية الجودة."
                                    >
                                    نحن نستخدم أحدث التقنيات لضمان تقديم منتجات تبريد عالية الجودة.
                                </p>' />

                            <x-dash.editor_en content="content_en" trans=" {{ __('dash/create.labels.content_en') }}"
                                data='<h4 class="translatable"  data-en="Unmatched Quality">
                                        Unmatched Quality
                                    </h4>
                                    <p class="translatable"
                                        
                                        data-en="We use the latest technology to ensure high-quality cooling products.">
                                        We use the latest technology to ensure high-quality cooling products.
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
