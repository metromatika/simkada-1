@extends('layouts.user_type.auth')

@section('content')

<div class="card-header pb-0">
    <div class="d-flex flex-row">
        <div class=" me-auto p-2">
            <h5 class="mb-0">Jumlah Daftar Pemilih Tetap (Manual)</h5>
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
                data-bs-target="#formDataTPS">+&nbsp; DPT</button>
        </div>
        @include('applications.master-data.partial.form-data-jumlah-dpt')
    </div>
</div>
<div class="card-body">
    {{ Breadcrumbs::render('bc-kecamatan') }}
</div>
<div class="card-body px-0 pt-0 pb-2" id="Kecamatan">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                    </th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Kelurahan
                    </th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        L (orang)
                    </th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        P (orang)
                    </th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Total
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
                        <p class="text-xs font-weight-bold mb-0">1.</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Lalang</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">13</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">40</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">53</p>
                    </td>
                    <td class="text-center">
                        <a href="#" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Edit">
                            <i class="fas fa-edit text-secondary"></i>
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
@endsection
