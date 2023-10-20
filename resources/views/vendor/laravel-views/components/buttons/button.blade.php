@props(['variant' => 'primary', 'type' => 'button'])

<button {{ $attributes->merge(['class' => 'btn btn-' . $variant]) }} type="{{ $type }}">
  {{ $slot }}
</button>