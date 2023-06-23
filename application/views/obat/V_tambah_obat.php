<form action="<?= base_url('obat/tambah_obat')?>" method="POST">
    <div class="form-group">
        <label>Nama Obat</label>
        <input type="text" name="nama_obat" class="from-control">
        <?= form_error('nama_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Generik / Obat Paten</label>
        <select name="non_generik" class="form-select" aria-label="default select example">
            <option selected>---pilih---</option>
            <option value="generik">Generik</option>
            <option value="nongenerik">Non-Generik</option>
        </select>
        <?= form_error('non_generik', '<div class="text-small text-danger">', '</div>'); ?>
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
        <label>Jumlah Barang</label>
        <input type="text"name="jumlah_barang" class="from-control">
        <?= form_error('jumlah_barang', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Brand Obat</label>
        <input type="text"name="brand_obat" class="from-control">
        <?= form_error('brand_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Harga Beli</label>
        <input type="text"name="harga_beli" class="from-control">
        <?= form_error('harga_beli', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Harga Jual</label>
        <input type="text" name="harga_jual" class="from-control">
        <?= form_error('harga_jual', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div>
        <label>Tanggal Masuk</label>
        <input type="datetime-local" id="tgl_masuk" name="tgl_masuk">
        <?= form_error('tgl_masuk', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div>
        <label>Tanggal Expired</label>
        <input type="datetime-local" id="tgl_exp" name="tgl_exp">
        <?= form_error('tgl_exp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Hapus</i></button>
</form>