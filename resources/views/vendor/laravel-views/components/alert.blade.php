{{-- components.alert

Renders the alert message with its different variants
You can customize all the html and css classes but YOU MUST KEEP THE BLADE AND LIVEWIRE DIRECTIVES,
it is using the variant helper to get the styles, icon and title depending of the alert type,
it could be success, error, warning.

You can customize the variants classes in config/laravel-views.php
--}}
@props(['type' => 'success', 'onClose' => ''])

<div class="alert alert-{{$type}}">
  <div class="bg-white rounded p-4 flex items-center shadow-lg h-auto border-gray-200 border">
    <div class="{{ variants("alerts.{$type}.icon") }} mr-4 rounded-full p-2">
      <div class="{{ variants("alerts.{$type}.base") }} rounded-full p-1 border-2">
        <i data-feather="{{ variants()->alert($type)->icon() }}" class="text-sm w-4 h-4 font-semibold"></i>
      </div>
    </div>

    <div class="flex-1">
      <b class="text-gray-900 font-semibold">
        {{ variants()->alert($type)->title() }}!
      </b>
      <div class="text-sm">
        {{ $slot }}
      </div>
    </div>

    {{-- Flush this message from the session --}}
    <button @click.prevent="{{ $onClose ?? ''}}" class="text-gray-400 hover:text-gray-900 transition duration-300 ease-in-out cursor-pointer">
      <i data-feather="x-circle"></i>
    </button>
  </div>
</div>