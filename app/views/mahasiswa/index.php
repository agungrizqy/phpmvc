<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button> 
            <h2>Daftar Mahasiswa</h2>
            <?php foreach($data['mhs'] as $m) : ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex">
                        <div class="p-2 flex-grow-1"><?= $m['nama']; ?></div>
                        <div class="p-2">
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $m['id']; ?>" class="badge text-bg-primary  ">detail</a>
                        </div>
                        <div class="p-2">
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $m['id']; ?>" class="badge text-bg-danger  " onclick="return confirm('Yakin ingin menghapus?');">hapus</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="jurusan" name="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Perwibuan">Teknik Perwibuan</option>
                    <option value="Teknik Perchindoan">Teknik Perchindoan</option>
                </select>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>

    </div>
  </div>
</div>