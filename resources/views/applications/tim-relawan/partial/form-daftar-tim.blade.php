<div class="modal fade" id="formDaftarTim" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Form Tambah Tim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                    <form method="POST" action="{{ route('create-tim') }}">
                        @csrf
                        <div class="modal-body">
                            @component('components._form-regions')
                            @endcomponent
                            <x-input col="12" value="" for_name_id="nama_tim" content="Nama Tim"
                                type="text" placeholder="Nama Tim" />
                            <x-input col="12" value="" for_name_id="koordinator" content="Nama Koordinator"
                                type="text" placeholder="Nama Koordinator" />
                            {{-- <x-input col="12" value="" for_name_id="jumlah_anggota" content="Jumlah Anggota"
                            type="text" placeholder="Jumlah Anggota" /> --}}
                            <x-input col="12" value="" for_name_id="keterangan" content="Keterangan"
                                type="text" placeholder="Keterangan" />
                            <div class="modal-footer">
                                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>

            {{-- <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-label" for="flexCheckDefault">
                    <a class="form-label">
                        Tim Wilayah <br>
                        <i class="fw-lighter">
                            Silahkan tandai jika Tim ini merupakan Tim Wilayah
                        </i>
                    </a>
                </label>
            </div> --}}