<div class="modal fade" id="formDataDPT" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Form DPT Manual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('create-update-jumlah-DPT', ['id' => $dpt->id ?? null]) }}">
                    @csrf
                    <div class="modal-body">
                        @component('components._form-regions')
                        @endcomponent

                        <div class="row justify-content-start align-items-start g-2">
                            <div class="col-12">
                                <label for="dpt_l" class="form-label">L (orang)</label>
                                <input type="number" class="form-control" name="dpt_l" id="dpt_l" placeholder="Data DPT (L)">
                            </div>
                            <div class="col-12">
                                <label for="dpt_p" class="form-label">P (orang)</label>
                                <input type="number" class="form-control" name="dpt_p" id="dpt_p"placeholder="Data DPT (P)">
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
</div>
