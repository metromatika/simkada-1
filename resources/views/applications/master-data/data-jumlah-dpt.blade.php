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
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <x-button_create id_modal="formDataDPT" button_create="DPT"></x-button_create>
                    </div>
                    @include('applications.master-data.partial.form-data-jumlah-dpt')
                </div>
            </div>
            {{-- <div class="card-body">
                {{ Breadcrumbs::render('bc-kecamatan') }}
            </div> --}}
            <div class="card-body px-0 pt-0 pb-2" id="Kecamatan">
                @livewire('data-jumlah-dpt')
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        @switch('tbl-kecamatan')
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
            </div> --}}
        </div>
    </div>
</div>
@endsection
