  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="deleteKaryawan" tabindex="-1" aria-labelledby="deleteKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="deleteKaryawanLabel">Konfirmasi</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Anda yakin menghapus data? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
          <button type="button" wire:click.prevent="deleteKaryawan()" data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger">Ya, Hapus</button>
        </div>
      </div>
    </div>
  </div>