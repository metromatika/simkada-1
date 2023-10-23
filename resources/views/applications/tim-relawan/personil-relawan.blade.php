@extends('layouts.user_type.auth')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row">
                    <div class=" me-auto p-2">
                        <h5 class="mb-0">Daftar Anggota Tim</h5>
                    </div>
                    <div class="ms-md-3 pe-md-3 d-flex align-items-center p-2">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0 text-lg" type="button" data-bs-toggle="modal" data-bs-target="#anggotaTim">+&nbsp; Relawan</a>
                    </div>
                    @include('applications.tim-relawan.partial.form-anggota-tim')
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                @livewire('tabel-daftar-anggota')
                <div class="table-responsive p-0">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Nama
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Kecamatan
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Kelurahan
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Referal
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                NIK
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No. HP
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Direkrut oleh
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Tanggal Rekrut
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Tempat Lahir
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Tanggal Lahir
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Keterangan
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Agama
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Suku
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Alamat
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Jenis Kelamin
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                TPS
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                RT
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                RW
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
                <p class="text-xs font-weight-bold mb-0">Medan</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Medan Sunggal</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">EPBGSASD</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">127163599690012</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">085365976212</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Ferdinan</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">11 Mei 2022</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Medan</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">12 Juni 2002</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Aktif</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Islam</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Jawa</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">Jl. Perniagaan No. 1A</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">L</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">012</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">000</p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">000</p>
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
</table> --}}