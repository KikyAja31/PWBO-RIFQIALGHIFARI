<?php if(isset($data['matkul'])) : ?>
<div class="container mt-5">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($data['matkul']['nama_mk']); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($data['matkul']['kode_mk']); ?></h6>
            <p class="card-text">Jenis: <?= htmlspecialchars($data['matkul']['jns_mk']); ?></p>
            <p class="card-text">SKS: <?= htmlspecialchars($data['matkul']['sks']); ?></p>
            <a href="<?= BASEURL; ?>/matakuliah" class="card-link">Kembali</a>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container mt-5">
    <div class="alert alert-warning">Data mata kuliah tidak ditemukan.</div>
    <a href="<?= BASEURL; ?>/matakuliah" class="btn btn-secondary">Kembali</a>
</div>
<?php endif; ?>