@extends('layouts.dash')

@section('content')

<div class="container mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('dash/show.banner_details') }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>{{ __('dash/show.content_ar') }}:</h5>
                        <p>{!! de_ar($service->content) !!}</p> <!-- Assuming you have a helper function like de_ar to extract Arabic content -->
                    </div>
                    <div class="col-md-6">
                        <h5>{{ __('dash/show.content_en') }}</h5>
                        <p>{!! de_en($service->content) !!}</p> <!-- Similarly, extract English content -->
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>{{ __('dash/show.banner_image') }}:</h5>
                        <img src="{{ $service->getFirstMediaUrl('services') }}" alt="Banner Image" style="max-width: 100%; height: auto;">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">
                            {{ __('dash/show.back_to_list') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
