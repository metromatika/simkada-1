@extends('layouts.user_type.auth')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row">
                    <div class=" me-auto p-2">
                        <h5 class="mb-0">Data Operator</h5>
                    </div>
                    <div class="ms-md-3 pe-md-3 d-flex align-items-center p-2">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn bg-gradient-primary btn-sm mb-0 text-lg" type="button" data-bs-toggle="modal" data-bs-target="#formOperatorSimkada">+&nbsp; Operator</a>
                    </div>
                    @include('applications.operator-simkada.partial.form-operator-simkada')
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email/Username
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No. HP Utama
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No. HP Lainnya
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Hak Akses
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Terakhir Login
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status
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
                                    <p class="text-xs font-weight-bold mb-0">rifqia@gmail.com</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">082198765432</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">088598765476</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Super Administrator</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">26 Oct 2023, 19:05 WIB</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Aktif</p>
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
