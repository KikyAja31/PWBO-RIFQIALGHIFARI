<?php ?>
<div class="container mt-4">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <button type="button" class="btn btn-primary tombolTambahData mb-3" data-toggle="modal" data-target="#formModal">Tambah Data Pinjam Buku</button>
      <h3>Daftar Pinjam Buku</h3>
      <ul class="list-group">
        <?php foreach( $data['pinjam'] as $pj ) : ?>
          <li class="list-group-item">
            <?= htmlspecialchars($pj['Kd_pinjam032']); ?> — <?= htmlspecialchars($pj['JudulBuku032']); ?>
            <a href="<?= BASEURL; ?>/pinjam/hapus/<?= urlencode($pj['Kd_pinjam032']); ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>

            <a href="<?= BASEURL; ?>/pinjam/ubah/<?= urlencode($pj['Kd_pinjam032']); ?>" 
               class="badge badge-success float-right ml-1 tampilModalUbah" 
               data-toggle="modal" data-target="#formModal" data-id="<?= htmlspecialchars($pj['Kd_pinjam032']); ?>">Ubah</a>

            <a href="<?= BASEURL; ?>/pinjam/detail/<?= urlencode($pj['Kd_pinjam032']); ?>" class="badge badge-primary float-right ml-1">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal: form tambah/ubah -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= BASEURL; ?>/pinjam/tambah" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Tambah Data Pinjam Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- input hidden untuk Kd_pinjam032 saat ubah -->
          <input type="hidden" name="Kd_pinjam032" id="Kd_pinjam032">

          <div class="form-group">
            <label for="NimMhs032">NIM Mahasiswa</label>
            <input type="text" class="form-control" id="NimMhs032" name="NimMhs032" required>
          </div>

          <div class="form-group">
            <label for="JudulBuku032">Judul Buku</label>
            <input type="text" class="form-control" id="JudulBuku032" name="JudulBuku032" required>
          </div>

          <div class="form-group">
            <label for="TglPinjam032">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="TglPinjam032" name="TglPinjam032" required>
          </div>

          <div class="form-group">
            <label for="TglKembali032">Tanggal Kembali</label>
            <input type="date" class="form-control" id="TglKembali032" name="TglKembali032">
          </div>

          <div class="form-group">
            <label for="JmlPinjam032">Jumlah Pinjam</label>
            <input type="number" class="form-control" id="JmlPinjam032" name="JmlPinjam032" min="1" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>