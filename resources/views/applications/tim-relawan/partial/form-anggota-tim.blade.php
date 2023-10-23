<div class="modal fade" id="anggotaTim" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Form Daftar Personil/Relawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form text-left" method="POST" action="{{ route('create-anggota') }}">
                    @csrf
                    <div class="mb-2">
                      <select class="form-control" name="role" id="role">
                          <option selected>Anda Mendaftar sebagai...</option>
                          <option disabled value="Admin">Admin</option>
                          <option disabled value="Koordinator">Koordinator</option>
                          <option selected value="Anggota">Anggota</option>
                      </select>
                      @error('role')
                          <p class="text-danger text-xs mt-1 mb-0">{{ $message }}</p>
                      @enderror
                    </div>
                    <x-input class="" value="" for_name_id="ref_referal" content="Referensi Referal" type="text" placeholder="Referensi Refera Anda (6 huruf)..." />
                  <div class="card-body p-0">
                    
                    <div class="mt-2 position-relative text-center">
                        <p class="text-sm font-weight-bold mb-2 text-dark text-border d-inline z-index-2 bg-white px-3">
                          Kredensial
                        </p>
                      </div>
                      <x-input class="" value="" for_name_id="nama" content="Nama" type="text" placeholder="Nama..." />
                      <x-input class="" value="" for_name_id="email" content="Email" type="email" placeholder="Email..." />
                      <x-input class="" value="" for_name_id="password" content="Password" type="password" placeholder="Password..." />
                      <div class="mt-2 position-relative text-center">
                        <p class="text-sm font-weight-bold mb-2 text-dark text-border d-inline z-index-2 bg-white px-3">
                          Data Diri
                        </p>
                      </div>
                      <x-input class="" value="" for_name_id="nik" content="Nomor Induk Kependudukan (NIK)" type="number" placeholder="16 digits" />
                      <div class="mb-2">
                        <label for="jenis_kelamin" class="form-label mb-0">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                          <option>Pilih Jenis Kelamin...</option>
                          <option value="(L)">Laki-Laki</option>
                          <option value="(P)">Perempuan</option>
                        </select>
                        @error('role')
                        <p class="text-danger text-xs mt-1 mb-0">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="mb-2">
                        <label for="agama" class="form-label mb-0">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                          <option selected>Pilih Agama...</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Konghuchu">Konghucu</option>
                        </select>
                        @error('agama')
                        <p class="text-danger text-xs mt-1 mb-0">{{ $message }}</p>
                        @enderror
                      </div>
                      <x-input class="" value="" for_name_id="suku" content="Suku" type="text" placeholder="Suku..." />
                      <x-input class="" value="" for_name_id="telepon" content="Nomor Telepon" type="tel" placeholder="(+62) . . .  -  . . . .  -  . . . ." />
                      <div class="mt-2 position-relative text-center">
                        <p class="text-sm font-weight-bold mb-2 text-dark text-border d-inline z-index-2 bg-white px-3">
                          Data Alamat Lengkap
                        </p>
                      </div>
                      @component('components._form-regions')
                      @endcomponent
                      <x-input class="" value="" for_name_id="alamat" content="Alamat" type="text" placeholder="Alamat Lengkap..." />
                      <div class="input-group mt-2">
                        <span class="input-group-text">RT</span>
                        <input type="text" name="rt" id="rt" aria-label="First name" class="form-control" placeholder="(000)">
                        <span class="input-group-text">RW</span>
                        <input type="text" name="rw" id="rw" aria-label="Last name" class="form-control" placeholder="(000)">
                        <span class="input-group-text">TPS</span>
                        <input type="text" name="tps" id="tps" aria-label="Last name" class="form-control" placeholder="(000)">
                      </div>
                      <div class="modal-footer">
                          <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div>

{{-- <form method="POST" action="{{ route('create-anggota') }}">
    @csrf
    <div class="mb-3">
        <label for="nama_anggota" class="form-label">Nama Anggota</label>
        <input type="text" class="form-control" name="nama_anggota" id="nama_anggota"
            placeholder="Masukkan Nama Anggota">
    </div>

    <div class="mb-3">
        <label for="referal" class="form-label">Referal</label>
        <input type="text" class="form-control" name="referal" id="referal"
            placeholder="Masukkan Referal">
    </div>

    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik"
            placeholder="Masukkan NIK">
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">No. HP</label>
        <input type="text" class="form-control" name="no_hp" id="no_hp"
            placeholder="Masukkan No. HP">
    </div>

    <div class="mb-3">
        <label for="direkrut_oleh" class="form-label">Direkrut Oleh</label>
        <input type="text" class="form-control" name="direkrut_oleh" id="direkrut_oleh"
            placeholder="Masukkan Nama yang Direkrut Oleh">
    </div>

    <div class="mb-3">
        <label for="tanggal_rekrut" class="form-label">Tanggal Rekrut</label>
        <input type="date" class="form-control" name="tanggal_rekrut" id="tanggal_rekrut">
    </div>

    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
            placeholder="Masukkan Tempat Lahir">
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
    </div>

    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" id="keterangan"
            placeholder="Masukkan Keterangan">
    </div>

    <div class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select" name="agama" id="agama" aria-label="Pilih Agama">
            <option selected>Pilih Agama...</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="suku" class="form-label">Suku</label>
        <input type="text" class="form-control" name="suku" id="suku"
            placeholder="Masukkan Suku">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat"
            placeholder="Masukkan Alamat">
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin"
            aria-label="Pilih Jenis Kelamin">
            <option selected>Pilih Jenis Kelamin...</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="tps" class="form-label">TPS</label>
                <input type="text" class="form-control" name="tps" id="tps"
                    placeholder="TPS (000)">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="rt" class="form-label">RT</label>
                <input type="text" class="form-control" name="rt" id="rt"
                    placeholder="RT (000)">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="rw" class="form-label">RW</label>
                <input type="text" class="form-control" name="rw" id="rw"
                    placeholder="RW (000)">
            </div>
        </div>
    </div>

</form> --}}