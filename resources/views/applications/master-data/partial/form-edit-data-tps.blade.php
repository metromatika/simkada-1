<div class="modal fade" id="formDataTPS{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Edit Form Master TPS {{ $item->id }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update-TPS', ['id' => $item->id]) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    @component('components._form-regions')
                    @endcomponent
                    <div class="row justify-content-start align-items-start g-2">
                        <x-input col="12" value="{{ old('jumlah_tps', $item->jumlah_tps) }}" for_name_id="jumlah_tps" content="Jumlah TPS" type="text" placeholder="Jumlah TPS"/>
                    </div>
                    <div class="row justify-content-start align-items-start g-2">
                        <x-input col="12" value="{{ old('keterangan', $item->keterangan) }}" for_name_id="keterangan" content="Keterangan" type="text" placeholder="Keterangan"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-edit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
