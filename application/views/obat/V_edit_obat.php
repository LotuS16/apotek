<div class="content-wraper">
    <section class="content">
        <?php foreach($obat as $bt) :?>
        <form action="<?= base_url().'obat/update'?>"
        method="post">

        <div class="form-group">
            <label >Nama Obat</label>
            <input type="hidden" name="id_obat" class="form-control"
            value="<?= $bt->id_obat?>">
            <input type="text" name="nama_obat" class="form-control"
            value="<?= $bt->nama_obat?>">
        </div>
        <div class="form-group">
            <label>Generik/Non-Generik</label>
            <select name="non_generik" class="form-control" value="<?= $bt->non_generik?>">
                <option value="generik">Generik</option>
                <option value="non-generik">Non-Generik</option>
        </select>
        </div>
        <div class="form-group">
            <label >Jenis Obat</label>
            <select name="jenis_obat" class="form-control" value="<?= $bt->jenis_obat?>">
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
        </div>
        <div class="form-group">
            <label >Jumlah Barang</label>
            <input type="text" name="jumlah_barang" class="form-control"
            value="<?= $bt->jumlah_barang?>">
        </div>
        <div class="form-group">
            <label >Brand Obat</label>
            <input type="text" name="brand_obat" class="form-control"
            value="<?= $bt->brand_obat?>">
        </div>
        <div class="form-group">
            <label >Harga Beli</label>
            <input type="text" name="harga_beli" class="form-control"
            value="<?= $bt->harga_beli?>">
        </div>
        <div class="form-group">
            <label >Harga Jual</label>
            <input type="text" name="harga_jual" class="form-control"
            value="<?= $bt->harga_jual?>">
        </div>
        <div>
            <label>Tanggal Masuk</label>
            <input type="datetime-local" id="tgl_masuk" name="tgl_exp" <?= $bt->tgl_masuk?>>
        </div>
        <div>
            <label>Tanggal Expired</label>
            <input type="datetime-local" id="tgl_exp" name="tgl_exp" <?= $bt->tgl_exp?>>
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
        <button type="reset" class="btn btn-danger">reset</button>
        </form>
        <?php endforeach?>
    </section>
</div>