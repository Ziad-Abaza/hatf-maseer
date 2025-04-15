@extends('layouts.dash')

@section('content')

<div class="container mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('dash/show.partenr_details') }}</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>{{ __('dash/show.partenr_image') }}:</h5>
                        <img src="{{ $partenr->getFirstMediaUrl('partners') }}" alt="partenr Image" style="max-width: 100%; height: auto;">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <a href="{{ route('partenrs.index') }}" class="btn btn-secondary">
                            {{ __('dash/show.back_to_list') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
