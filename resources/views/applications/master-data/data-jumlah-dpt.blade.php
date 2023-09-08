@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
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
    </div>
@endsection
