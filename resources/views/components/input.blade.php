@props(['class', 'for_name_id', 'content', 'placeholder', 'type', 'value'])

<div class="{{ $class }} @error($for_name_id) has-danger @enderror">
    <label for="{{ $for_name_id }}" class="form-label mb-0">{{ $content }}</label>
    <input type="{{ $type }}" class="form-control @error($for_name_id) is-invalid @enderror"
        name="{{ $for_name_id }}" id="{{ $for_name_id }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
    @error($for_name_id)
        <p class="text-danger text-xs mt-1 mb-0">{{ $message }}</p>
    @enderror
</div>

