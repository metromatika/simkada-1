@props(['col', 'for_name_id', 'content', 'placeholder', 'type', 'value'])

<div class="col-{{ $col }} mt-2">
    <label for="{{ $for_name_id }}" class="form-label">{{ $content }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $for_name_id }}" id="{{ $for_name_id }}"
        placeholder="{{ $placeholder }}" value="{{ $value }}">
</div>
