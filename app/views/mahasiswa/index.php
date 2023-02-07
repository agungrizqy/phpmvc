<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h2>Daftar Mahasiswa</h2>

            <?php foreach($data['mhs'] as $m) : ?>
            <ul class="list-group ">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $m['nama']; ?> <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $m['id']; ?>" class="badge text-bg-primary">detail</a>
                </li>
            </ul>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>