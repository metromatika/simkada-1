@extends('layouts.user_type.auth')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row">
                    <div class=" me-auto p-2">
                        <h5 class="mb-0">Daftar Pengeluaran Barang</h5>
                    </div>
                    <div class="ms-md-3 pe-md-3 d-flex align-items-center p-2">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0 text-lg" type="button">+&nbsp; Pengeluaran Barang</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal Dibuat
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Barang
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Satuan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Harga Satuan (Rp)
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah Penerimaan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Keterangan
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">02/12/2023, 15:36</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Goodie Bag</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">pcs</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">5.000</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">500</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Dalam Perjalanan</p>
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
