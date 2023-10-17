@props(['icon', 'size' => 'md'])

<button data-bs-toggle="tooltip" data-bs-original-title="{{ __('Delete') }}" {{ $attributes }}
    class="{{ $size === 'sm' ? 'p-1' : 'p-2' }}
btn btn-link text-danger text-sm text-gradient mb-0">
    <i class="{{ $icon }}"></i>
</button>
