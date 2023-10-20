{{-- components.editable

Render an editable input field --}}
@props(['model', 'field' => ''])

<div x-data="{
    field: '{{ $field }}',
    id: {{ $model->id }},
    value: {{ json_encode(strip_tags($model->$field)) }},
    original: {{ json_encode(strip_tags($model->$field)) }},
    editing: false
  }"
  @click.away="editing = false; value = original;" class="d-block">
  <input
    x-cloak
    x-ref="input"
    x-show="editing"
    x-model="value"
    @keydown.enter="$wire.update(id, {
      [field]: value
    }); editing = false; original = value"
    @keydown.escape="editing = false; value = original;"
    class="form-control form-control-sm w-100 h-50 px-2 py-0 text-left">
  <a x-show="!editing" data-bs-toggle='tooltip' data-bs-original-title='Click to Edit!'
    @click="editing = true; $nextTick(() => {$refs.input.focus()})"
    x-html="value"
    class='text-decoration-underline text-info:hover'>
    {!! strip_tags($model->$field) !!}
  </a>

</div>
