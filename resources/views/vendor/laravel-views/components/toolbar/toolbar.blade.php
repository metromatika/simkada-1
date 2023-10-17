{{-- list-view.filters.blade

Renders the search input and the filters dropdown
You can customize all the html and css classes but YOU MUST KEEP THE BLADE AND LIVEWIERE DIRECTIVES
UI components used:
  - form/input-group
  - dropdown --}}

<div class="dataTable-top">
    {{-- Search input --}}
    <div class="dataTable-search p-3">
        @include('laravel-views::components.toolbar.search')
    </div>

    {{-- Actions on the left --}}
    <div class="dataTable-dropdown">
        <x-lv-loading class="" wire:loading />

        {{-- Bulk actions --}}
        <div>
            @include('laravel-views::components.toolbar.bulk-actions')
        </div>

        {{-- Sorting --}}
        @if (isset($sortableBy) && $sortableBy->isNotEmpty())
            <div>
                @include('laravel-views::components.toolbar.sorting')
            </div>
        @endif

        {{-- Filters --}}
        <div>
            @include('laravel-views::components.toolbar.filters')
        </div>
    </div>
</div>
