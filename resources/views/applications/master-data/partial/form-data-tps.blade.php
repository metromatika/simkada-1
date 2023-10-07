<div class="modal fade" id="formDataTPS" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Form Master TPS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('create-TPS') }}">
                @csrf
                <div class="modal-body">
                    @component('components._form-regions')
                    @endcomponent

                    <div class="row justify-content-start align-items-start g-2">
                        <div class="col-12">
                            <label for="jumlah_tps" class="form-label">Jumlah TPS</label>
                            <input type="text" class="form-control" name="jumlah_tps" id="jumlah_tps"
                                placeholder="Jumlah TPS">
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-start g-2">
                        <div class="col-12">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="keterangan"
                                placeholder="Keterangan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-edit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
