@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header px-4 pb-0 pt-2">
                    <div class="d-flex flex-row">
                        <x-title_table title="Semua TPS" />
                        <div class="d-flex align-items-center justify-content-center">
                            <x-button_create id_modal="formDataTPS" button_create="TPS" />
                        </div>

                        @component('applications.master-data.partial.form-data-tps')
                        @endcomponent

                        @foreach ($tpsData as $item)
                            @component('applications.master-data.partial.form-edit-data-tps', ['item' => $item])
                            @endcomponent
                        @endforeach
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @livewire('tabel-data-t-p-s')
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    {{-- <div class="table-responsive p-0">
        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-top py-2 px-4">
                <div class="dataTable-dropdown ps-3">
                    <label>Show
                        <select class="dataTable-selector">
                            <option value="5" selected="">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select> entries
                    </label>
                </div>
                <div class="dataTable-search">
                    <input class="dataTable-input" placeholder="Search..."type="text">
                </div>
            </div>
            <div class="dataTable-container">
                <table class="table table-flush dataTable-table align-items-center mb-0" id="dataTPS">
                    <thead class="thead-light">
                        <tr>
                            <x-table.th content="Provinsi" />
                            <x-table.th content="Kab/Kota" />
                            <x-table.th content="Kecamatan" />
                            <x-table.th content="Kelurahan" />
                            <x-table.th content="Jumlah TPS" />
                            <x-table.th content="Keterangan" />
                            <x-table.th content="Aksi" />
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tpsData as $item)
                            <tr>
                                <x-table.td
                                    content="{{ $item->village->district->regency->province->name }}" />
                                <x-table.td content="{{ $item->village->district->regency->name }}" />
                                <x-table.td content="{{ $item->village->district->name }}" />
                                <x-table.td content="{{ $item->village->name }}" />
                                <x-table.td content="{{ $item->jumlah_tps }}" />
                                <x-table.td content="{{ $item->keterangan }}" />
                                <td class="text-center p-0">
                                    <form action="{{ route('delete-TPS', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-link text-sm text-dark px-3 mb-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#formDataTPS{{ $item->id }}">
                                            <i class="fas fa-pencil-alt text-dark" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit TPS"></i>
                                        </a>
                                        <button type="submit"
                                            class="btn btn-link text-danger text-sm text-gradient px-3 mb-0">
                                            <i class="far fa-trash-alt" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete TPS"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="m-3">
                                <p class="text-dark">Data masih Kosong</p>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="dataTable-bottom pt-2 pb-1 d-flex justify-content-between align-items-center">
                <div class="dataTable-info">
                    Showing 1 to 10 of 10 entries
                </div>
                <div class="pagination-container">
                    <ul class="pagination pagination-primary justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:;">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}