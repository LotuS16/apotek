<form action="<?= base_url('obat/keluarProses')?>" method="POST">
    <div class="form-group">
        <label>Nama Obat</label>
        <input type="text" name="nama_obat" class="from-control">
        <?= form_error('nama_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Jenis Obat</label>
        <select name="jenis_obat" class="form-select" aria-label="default select example">
            <option selected>---pilih---</option>
            <option value="obatcair">Obat Cair</option>
            <option value="tablet">Tablet</option>
            <option value="kapsul">kapsul</option>
            <option value="obatoles">Obat Oles</option>
            <option value="suppositoria">Suppositoria</option>
            <option value="obatetes">Obat tetes</option>
            <option value="inhaler">Inhaler</option>
            <option value="obatsuntik">Obat Suntik</option>
            <option value="implanobattempel">Implan / Obat Tempel</option>
        </select>
        <?= form_error('jenis_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Jumlah Obat Keluar</label>
        <input type="text" name="jumlah_obat" class="from-control">
        <?= form_error('jumlah_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Tanggal Pencatatan</label>
        <input type="datetime-local" id="tgl_masuk" name="tgl_masuk">
        <?= form_error('tgl_catat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Hapus</i></button>
</form>