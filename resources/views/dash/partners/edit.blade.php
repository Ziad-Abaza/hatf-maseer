@extends('layouts.dash')



@section('content')
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
                    <form action="{{ route('partenrs.update', $partenr->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- img -->
                            <div class="col-12">
                                <x-dash.img content="img" 
                                    data="{{ $partenr->getFirstMediaUrl('partenrs') }}" />
                            </div>


                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12" style="display: flex; justify-content: center;">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        {{ __('dash/edit.buttons.save') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
