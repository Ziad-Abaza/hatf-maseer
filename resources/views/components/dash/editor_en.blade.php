<div class="mb-12 col-12 col-md-12 text-end">

    <label
        @if (getDirection()) style="text-align: {{ getDirection() == 'rtl' ? 'left' : 'right' }};" @endif
        for="{{ $content }}" class="form-label text-dark fw-bold">
        {{ $trans }}
    </label>

    <textarea type="text" class="form-control font-m @error($content) is-invalid @enderror" id="{{ $content }}"
        name="{{ $content }}">
        @if($data)  {!! $data !!}  @endif   
    </textarea>
    @error($content)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#{{ $content }}'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                        'undo', 'redo'
                    ]
                }
            })
            .then(editor => {
                console.log('CKEditor initialized successfully!', editor);
            })
            .catch(error => {
                console.error('Error initializing CKEditor:', error);
            });
    </script>
@endpush
