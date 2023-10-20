{{-- components.table

Renders a data table
You can customize all the html and css classes but YOU MUST KEEP THE BLADE AND LIVEWIRE DIRECTIVES,

props:
  - headers
  - itmes
  - actionsByRow --}}
  <div class="dataTable-container">
      <table class="table table-flush dataTable-table align-items-center mb-0">
        <thead class="thead-light">
          <tr>
            @if ($this->hasBulkActions)
              <th class="pl-3">
                <span class="flex items-center justify-center">
                  <x-lv-checkbox wire:model="allSelected" />
                </span>
              </th>
            @endif
            {{-- Renders all the headers --}}
            @foreach ($headers as $header)
              <th class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7 p-2" {{ is_object($header) && ! empty($header->width) ? 'width=' . $header->width . '' : '' }}>
                @if (is_string($header))
                  {{ $header }}
                @else
                  @if ($header->isSortable())
                    <div class="d-flex align-items-center">
                      <a href="#!" wire:click.prevent="sort('{{ $header->sortBy }}')" class="">
                        {{ $header->title }}
                      </a>
                      <a href="#!" wire:click.prevent="sort('{{ $header->sortBy }}')" class="d-flex flex-column align-items-center ms-3">
                        <i class="{{ $sortBy === $header->sortBy && $sortOrder === 'asc' ? 'text-gray-dark' : 'text-secondary'}} fas fa-sort-up" style="height: .1rem;"></i>
                        <i class="{{ $sortBy === $header->sortBy && $sortOrder === 'desc' ? 'text-gray-dark' : 'text-secondary'}} fas fa-sort-down"></i>
                      </a>
                    </div>
                  @else
                    {{ $header->title }}
                  @endif
                @endif
              </th>
            @endforeach

            {{-- This is a empty cell just in case there are action rows --}}
            @if (count($actionsByRow) > 0)
              <th></th>
            @endif
          </tr>
        </thead>

        <tbody>
          @foreach ($items as $item)
            <tr wire:key="{{ $item->getKey() }}">
              @if ($this->hasBulkActions)
                <td class="pl-3">
                  <span class="flex items-center justify-center">
                    <x-lv-checkbox value="{{ $item->getKey() }}" wire:model="selected" />
                  </span>
                </td>
              @endif
              {{-- Renders all the content cells --}}
              @foreach ($view->row($item) as $column)
                <td class="text-center text-sm px-3 py-2 w-100 h-100">
                  {!! $column !!}
                </td>
              @endforeach

              {{-- Renders all the actions row --}}
              @if (count($actionsByRow) > 0)
                <td class="text-center p-0">
                    <x-lv-actions :actions="$actionsByRow" :model="$item" />
                </td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

