{{-- table-view.table-view

Base layout to render all the UI componentes related to the table view, this is the main file for this view,
the rest of the files are included from here

You can customize all the html and css classes but YOU MUST KEEP THE BLADE AND LIVEWIERE DIRECTIVES

UI components used:
  - table-view.filters
  - components.alert
  - components.table
  - components.paginator --}}

<x-lv-layout>
    <div class="table-responsive p-0">
        {{-- Search input and filters --}}
        @include('laravel-views::components.toolbar.toolbar')

        @if (count($items))
            {{-- Content table --}}
            <div class="overflow-x-scroll lg:overflow-x-visible">
                @include('laravel-views::components.table')
            </div>
        @else
            {{-- Empty data message --}}
            <div class="flex justify-center items-center p-4">
                <h5>{{ __('There are no items in this table') }}</h5>
            </div>
        @endif

        {{-- Paginator, loading indicator and totals --}}
        <div class="dataTable-bottom pt-2 pb-1 d-flex justify-content-between align-items-center">
            <div class="dataTable-info">
                Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} entries
            </div>
            <div class="pagination-container">
                <ul class="pagination pagination-primary justify-content-center">
                    @if ($items->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                    @endif
            
                    {{-- Array Of Links --}}
                    @if ($items->lastPage() > 1)
                        @for ($i = 1; $i <= $items->lastPage(); $i++)
                            <li class="{{ $items->currentPage() == $i ? 'active' : '' }} page-item">
                                <a href="{{ $items->url($i) }}" class="page-link">{{ $i }}</a>
                            </li>
                        @endfor
                    @endif
            
                    @if ($items->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        
</x-lv-layout>
