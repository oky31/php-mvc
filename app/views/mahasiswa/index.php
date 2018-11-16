<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
          <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
          Launch demo modal
        </button>

        <?php foreach ($data['mahasiswa'] as $mahasiswa): ?>
          <ul class="list-group">
            <li class="list-group-item ">
              <?= $mahasiswa['nama']; ?>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mahasiswa['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ? ')">hapus</a>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
            </li>
          </ul>
        <?php endforeach; ?>
      </div>

    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">  
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknink Informatika">Teknik Informatika</option>
              <option value="Teknink Mesin">Teknik Mesin</option>
              <option value="Design Komunikasi Visual">Design Komunikasi Visual</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Tambah Data</button>

        </form>
      </div>
    </div>
  </div>
</div>