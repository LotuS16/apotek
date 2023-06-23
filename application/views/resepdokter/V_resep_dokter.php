<div class="card">
    <div class="card-header">
    <a href="<?= base_url('resep_dokter/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Resep</a>
    </div>
<div class="card">
        <!-- <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Siswa</a> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Nama Dokter</th>
                    <th>Foto Resep</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr class="text-center">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-slash"></i></button>
                        <!-- <button class="btn btn-light btn-sm"><i class="fas fa-print"></i></button> -->
                        <button class="btn btn-success btn-sm"><i class="fas fa-check"></i></button>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal edit-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('pasien/tambah_pasien')?>" method="POST">
    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" class="from-control">
        <?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text"name="nomor_hp" class="from-control">
        <?= form_error('nomor_hp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nama Dokter</label>
        <input type="text"name="nomor_hp" class="from-control">
        <?= form_error('nomor_hp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Foto Resep</label>
        <a href="path_to_file" download="">Download</a>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Hapus</i></button>
  </div>

</form>
      </div>
      </div>
    </div>
  </div>
</div>
