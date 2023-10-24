<div class="modal fade" id="formDaftarTim" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Form Tambah Tim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('create-tim') }}">
                @csrf
                    @component('components._form-regions')
                    @endcomponent
                    <x-input class="" value="" for_name_id="nama_tim" content="Nama Tim"
                        type="text" placeholder="Nama Tim" />
                    <x-input class="" value="" for_name_id="koordinator" content="Nama Koordinator"
                        type="text" placeholder="Nama Koordinator" />
                    <x-input class="" value="" for_name_id="keterangan" content="Keterangan"
                        type="text" placeholder="Keterangan" />
                    <div class="modal-footer">
                        <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>