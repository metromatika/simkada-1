@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header px-4 pb-0 pt-2">
                    <div class="d-flex flex-row">
                        <div class="me-auto p-2">
                            <h5 class="mb-0">Semua TPS</h5>
                        </div>
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
                    <div class="table-responsive p-0">
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
                                            <th data-sortable
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <a href="#" class="dataTable-sorter">
                                                    Kecamatan
                                                </a>
                                            </th>
                                            <th data-sortable
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Kelurahan
                                            </th>
                                            <th data-sortable
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jumlah TPS
                                            </th>
                                            <th data-sortable
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Keterangan
                                            </th>
                                            <th data-sortable
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tpsData as $item)
                                            <tr>
                                                <td class="text-center text-sm p-0">
                                                    {{ $item->village->district->regency->province->name }}
                                                </td>
                                                <td class="text-center text-sm p-0">
                                                    {{ $item->village->name }}
                                                </td>
                                                <td class="text-center text-sm p-0">
                                                    {{ $item->jumlah_tps }}
                                                    <p class=" mb-0"></p>
                                                </td>
                                                <td class="text-center text-sm p-0">
                                                    {{ $item->keterangan }}
                                                </td>
                                                <td class="text-center p-0">
                                                    <a class="btn btn-link text-sm text-dark px-3 mb-0" id="edit-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#formDataTPS{{ $item->id }}">
                                                        <i class="fas fa-pencil-alt text-dark"></i>
                                                    </a>

                                                    <a href="{{ route('delete-TPS', $item->id) }}"
                                                        class="btn btn-link text-danger text-sm text-gradient px-3 mb-0"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete TPS">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            Kosong
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
