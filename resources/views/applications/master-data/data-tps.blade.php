@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
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
                                @foreach ($tpsData as $item)
                                    <tr>
                                        <td class="text-center">
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
                                            <a href="{{ route('edit-TPS', ['id' => $item->id]) }}" class="mx-3"
                                                id="edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#formDataTPS">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                             </a>

                                            <a href="{{ route('delete-TPS', ['id' => $item->id]) }}" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Delete TPS">
                                                <i class="fas fa-trash text-secondary"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
