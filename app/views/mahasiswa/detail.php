<div class="container mt-3">
<h3>Detail Mahasiswa <?= $data['mhs']['nama']; ?></h3>
    <div class="card mt-4" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text"><?= $data['mhs']['email']; ?></p>
        <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa/" class="btn btn-primary btn-sm">Kembali</a>
        
    </div>
    </div>
</div>