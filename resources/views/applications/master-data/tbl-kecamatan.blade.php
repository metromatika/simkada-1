@extends('layouts.user_type.auth')

@section('content')
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
