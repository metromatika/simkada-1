@props(['actions', 'model'])

@foreach ($actions as $action)
  @if ($action->renderIf($model, $this))
    {{-- <x-lv-tooltip :tooltip="$action->title"> --}}
      <x-lv-icon-button :icon="$action->icon" size="sm" wire:click.prevent="executeAction('{{ $action->id }}', '{{ $model->getKey() }}')" data-bs-toggle="tooltip" data-bs-original-title="{{ __('Delete') }}"/>
    {{-- </x-lv-tooltip> --}}
  @endif
@endforeach
