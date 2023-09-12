@extends('layouts.user_type.auth')

@section('content')
    <div class="row">

        <div class="col-4">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row">
                        <div class=" me-auto p-2">
                            <h5 class="mb-0">Parameter Simulasi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-3 pt-3 pb-2">
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Target Menang
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            2 %
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Estimasi Partisipasi Pemilih
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            75 %
                        </div>
                    </div>
                </div>
                <div class="card-header pb-0">
                    <div class="d-flex flex-row">
                        <div class=" me-auto p-2">
                            <h5 class="mb-0">Data Simulasi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-3 pt-3 pb-2">
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Jumlah DPT
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            404.374
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Jumlah Paslon
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            3 (tiga)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Estimasi Partisipasi Pemilih (75%)
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            303.280
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Target Suara (2%)
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-3">
                            107.159
                        </div>
                    </div>
                    <hr>
                    <div class="row px-2">
                        <div class="col-7">
                            <p class="text-bold">
                                Target Kemenangan
                            </p>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-4">
                            <h5 class="text-success">
                                35.33%
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-8">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row">
                        <div class=" me-auto p-2">
                            <h5 class="mb-0">Semua TPS</h5>
                        </div>
                        <div class="ms-md-3 pe-md-3 d-flex align-items-center p-2">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Type here...">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn bg-gradient-primary btn-sm mb-0 text-lg" data-bs-toggle="modal"
                                data-bs-target="#formDataTPS">+&nbsp; TPS</button>
                        </div>

                        @include('applications.master-data.partial.form-data-tps')

                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kecamatan
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kelurahan
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jumlah TPS
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bakongan</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Ujong Padang</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">300</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Dalam Kondisi Baik</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
