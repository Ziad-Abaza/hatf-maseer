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
                    <form action="{{ route('services.store') }}" method="POST" class="browser-default-validation"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- img -->
                            <div class="col-12">
                                <x-dash.img content="img" 
                                data=''  />
                            </div>

                            <x-dash.editor_ar content="content_ar" trans=" {{ __('dash/create.labels.content_ar') }}"
                                data='<div class="overlay-s translatable" data-ar="صيانة غرف ومستودعات التبريد والتجميد"> أنظمة شفط الفنادق والتبريد المركزية</div>'  />

                            <x-dash.editor_en content="content_en" trans=" {{ __('dash/create.labels.content_en') }}"
                                data='<div class="overlay-s translatable"data-en="Maintenance of cooling and freezing rooms and warehouses">Maintenance of cooling and freezing rooms and warehouses</div>' />

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
