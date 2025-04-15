  <div class="card mb-4">
      <div class="card-body">
          <div class="needsclick">
              <div class="dz-message needsclick">
                  <div>
                      {{ __('admins/profile.upload_instruction') }}
                      <span class="note needsclick">
                          {{ __('admins/profile.image_only_note') }}
                      </span>
                  </div>
                  <div>
                      <img style="max-width: 300px; max-height:300px;"  src="{{ $data ?? '' }}">
                  </div>
              </div>
              <div class="fallback">
                  <input type="file" name="{{$content}}" id="imageUpload" />
              </div>
              <div id="imagePreview" style="margin-top: 20px; text-align: center;">
              </div>
          </div>
          @error('img')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
  </div>

  @push('css')
      <link rel="stylesheet" href="{{ asset('vendor/libs/dropzone/dropzone.css') }}" />
  @endpush

  @push('js')
      <script src="{{ asset('vendor/libs/dropzone/dropzone.js') }}"></script>
      <script src="{{ asset('js/forms-file-upload.js') }}"></script>
  @endpush
