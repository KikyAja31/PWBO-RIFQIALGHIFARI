<div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModalMatakuliah">Tambah Mata Kuliah</button>
            <h3>Daftar Mata Kuliah</h3>
            <ul class="list-group">
                <?php foreach( $data['matkul'] as $mk ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong><?= htmlspecialchars($mk['kode_mk']); ?></strong> - <?= htmlspecialchars($mk['nama_mk']); ?>
                            <div class="text-muted small">Jenis: <?= htmlspecialchars($mk['jns_mk']); ?> · SKS: <?= htmlspecialchars($mk['sks']); ?></div>
                        </div>
                        <a href="<?= BASEURL; ?>/matakuliah/detail/<?= $mk['id']; ?>" class="badge badge-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModalMatakuliah" tabindex="-1" role="dialog" aria-labelledby="judulModalMatakuliah" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalMatakuliah">Tambah Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/matakuliah/tambah" method="POST">
          <div class="form-group">
            <label for="kode_mk">Kode MK</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" required>
          </div>
          <div class="form-group">
            <label for="nama_mk">Nama MK</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" required>
          </div>
          <div class="form-group">
            <label for="jns_mk">Jenis MK</label>
            <select class="form-control" id="jns_mk" name="jns_mk" required>
              <option value="Teori">Teori</option>
              <option value="Praktikum">Praktikum</option>
              <option value="Teori & Praktikum">Teori & Praktikum</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sks">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" min="0" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
