@extends('layouts.user_type.auth')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row">
                    <div class=" me-auto p-2">
                        <h5 class="mb-0">Daftar Saksi</h5>
                    </div>
                    <div class="ms-md-3 pe-md-3 d-flex align-items-center p-2">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0 text-lg" type="button">+&nbsp; Operator</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="row justify-content-start align-items-start gx-2 mt-3">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-center me-2">
                            <a href="#" class="btn bg-gradient-info btn-sm mb-0 text-sm" type="button"><i class="fas fa-file-download pe-2 text-lg"></i>Kode Kelurahan</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gradient-dark btn-sm mb-0 text-sm" type="button"><i class="fas fa-file-download pe-2 text-lg"></i>Template Saksi</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn bg-gradient-success btn-sm mb-0 text-sm" type="button"><i class="fas fa-file-import pe-2 text-lg"></i>Data Saksi</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Saksi
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Username
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No. HP
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kab/Kota
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kecamatan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kelurahan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    TPS
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Last Seen
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Rifqi A.</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">rifqi_an</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">082198765432</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Medan</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Medan Sunggal</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Lalang</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">109</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">26 Oct 2023, 19:05 WIB</p>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
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
