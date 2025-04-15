<form wire:submit.prevent="submit" method="POST" enctype="multipart/form-data" id="contactForm">
    @csrf

    <div class="form-group">
        <label for="name">{{ __('frontend/contact.inputs.full_name') }}</label>
        <input type="text" wire:model="name" value="{{ old('name') ?: '' }}" id="name" name="name"
            placeholder="{{ __('frontend/contact.placeholder.full_name') }}">
        @error('name')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">{{ __('frontend/contact.inputs.phone_number') }}</label>
        <input type="number" id="phone" wire:model="phone" value="{{ old('phone') ?: '' }}"
            placeholder="{{ __('frontend/contact.placeholder.phone_number') }}">
        @error('phone')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">{{ __('frontend/contact.inputs.email') }}</label>
        <input type="email" id="email" wire:model="email" value="{{ old('email') ?: '' }}"
            placeholder="{{ __('frontend/contact.placeholder.email') }}">
        @error('email')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="company">{{ __('frontend/contact.inputs.company_name') }}</label>
        <input type="text" id="company" wire:model="company" value="{{ old('company') ?: '' }}"
            placeholder="{{ __('frontend/contact.placeholder.company_name') }}">
        @error('company')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="position">{{ __('frontend/contact.inputs.position') }}</label>
        <input type="text" id="position" wire:model="position" value="{{ old('position') ?: '' }}"
            placeholder="{{ __('frontend/contact.placeholder.position') }}">
        @error('position')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="city">{{ __('frontend/contact.inputs.city') }}</label>
        <input type="text" id="city" wire:model="city" value="{{ old('city') ?: '' }}"
            placeholder="{{ __('frontend/contact.placeholder.city') }}">
        @error('city')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="message">{{ __('frontend/contact.inputs.message') }}</label>
        <textarea id="message" wire:model="message"
            placeholder="{{ __('frontend/contact.placeholder.message') }}"></textarea>
        @error('message')
            <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">{{ __('frontend/contact.inputs.submit') }}</button>
</form>
