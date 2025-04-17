@extends('layouts.dash')

@section('content')
<div class="container mt-5">
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('marketers.update', $marketer->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">{{ __('dash/index.name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $marketer->name }}"
                                required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone" class="form-label">{{ __('dash/index.phone') }}</label>
                            <input type="tel" name="phone" id="phone" class="form-control"
                                value="{{ $marketer->phone }}" required>
                        </div>
                        <div class="col-12">
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
