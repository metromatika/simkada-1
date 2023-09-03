@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
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

                        @include('partial.form-data-jumlah-dpt')

                    </div>
                </div>

                @switch('')
                    @case('bc-provinsi')
                        @include('applications.master-data.tbl-provinsi')
                        @break
                    @case('bc-kab-kota')
                        @include('applications.master-data.tbl-kab-kota')
                        @break
                    @default
                        @include('applications.master-data.tbl-kecamatan')
                @endswitch

            </div>
        </div>
    </div>
    </div>
@endsection
