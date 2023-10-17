@if ($searchBy)
  @component('laravel-views::components.form.input-group', [
    'placeholder' => 'Search...',
    'model' => 'search',
    'onClick' => 'clearSearch',
    'icon' => $search ? 'far fa-times-circle' : 'fas fa-search',
    ])
  @endcomponent
@endif
