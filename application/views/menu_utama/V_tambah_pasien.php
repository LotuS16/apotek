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
        <label>Email</label>
        <input type="text" name="email" class="from-control">
        <?= form_error('email', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nomor Hp</label>
        <input type="text"name="nomor_hp" class="from-control">
        <?= form_error('nomor_hp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Hapus</i></button>
</form>