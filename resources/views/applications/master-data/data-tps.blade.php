@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row">
                        <div class="me-auto p-2">
                            <h5 class="mb-0">Semua TPS</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <x-button_create id_modal="formDataTPS" button_create="TPS"/>
                        </div>
                        @component('applications.master-data.partial.form-data-tps')
                        @endcomponent
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown">
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
                                        @foreach ($tpsData as $item)
                                            <tr>
                                                <td data-table class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $item->village->district->regency->province->name }}
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $item->village->name }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $item->jumlah_tps }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $item->keterangan }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('edit-TPS', ['id' => $item->id]) }}"
                                                        class="btn btn-link text-dark px-3 mb-0" id="edit-btn"
                                                        data-bs-toggle="modal" data-bs-target="#formDataTPS">
                                                        <i class="fas fa-pencil-alt text-dark"></i>
                                                    </a>

                                                    <a href="{{ route('delete-TPS', ['id' => $item->id]) }}"
                                                        class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete TPS">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 10 of 10 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
