<!-- Modal -->
  <div wire:ignore.self class="modal fade" id="editKaryawan" tabindex="-1" aria-labelledby="editKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editKaryawanLabel">Form Edit Data Karyawan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3 row">
                <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                  <input type="text" wire:model="NIP" class="form-control @error('NIP') is-invalid @enderror" id="NIP">
                @error('NIP')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                </div>
              </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" wire:model="Nama" class="form-control @error('Nama') is-invalid @enderror" id="Nama">
                  @error('Nama')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            <div class="mb-3 row">
                <label for="TglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" wire:model="TglLahir" class="form-control @error('TglLahir') is-invalid @enderror" id="TglLahir">
                  @error('TglLahir')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            <div class="mb-3 row">
                <label for="Departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                  <input type="text" wire:model="Departemen" class="form-control @error('Departemen') is-invalid @enderror" id="Departemen">
                  @error('Departemen')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
          <button type="button" wire:click="updateKaryawan" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>