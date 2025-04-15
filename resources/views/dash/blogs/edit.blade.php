@extends('layouts.dash')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> مدونات / تعديل</h4>
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                    </div>

                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <x-dash.editor_ar content="title_ar" trans=" {{ __('dash/create.labels.title_ar') }}"
                                data="{{ old('title_ar', de_ar($blog->title) ?? '') }}" />

                            <x-dash.editor_en content="title_en" trans=" {{ __('dash/create.labels.title_en') }}"
                                data="{{ old('title_en', de_en($blog->title) ?? '') }}" />



                            <x-dash.editor_ar content="descraption_ar"
                                trans=" {{ __('dash/create.labels.descraption_ar') }}"
                                data="{{ old('descraption_ar', de_ar($blog->descraption) ?? '') }}" />

                            <x-dash.editor_en content="descraption_en"
                                trans=" {{ __('dash/create.labels.descraption_en') }}"
                                data="{{ old('descraption_en', de_ar($blog->descraption) ?? '') }}" />



                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-image">الصورة</label>
                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror"
                            id="basic-default-img" />
                        @error('img')
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">تحديث</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


@section('js')
    <script>
        CKEDITOR.replace('descraption_ar', {
            contentsLangDirection: 'rtl', // Set text direction to right-to-left
            language: 'ar' // Optionally, set the language to Arabic
        });
    </script>
@endsection
