<div class="content-wraper">
    <section class="content">
        <?php foreach($pasien as $psn) :?>
        <form action="<?= base_url().'pasien/update'?>"
        method="post">

        <div class="form-group">
            <label >Nama Pasien</label>
            <input type="hidden" name="id_pasien" class="form-control"
            value="<?= $psn->id_pasien?>">
            <input type="text" name="nama_pasien" class="form-control"
            value="<?= $psn->nama_pasien?>">
        </div>
        <div class="form-group">
            <label >Alamat</label>
            <input type="text" name="alamat" class="form-control"
            value="<?= $psn->alamat?>">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" class="form-control"
            value="<?= $psn->email?>">
        </div>
        <div class="form-group">
            <label >Nomor Telepon</label>
            <input type="text" name="nomor_hp" class="form-control"
            value="<?= $psn->nomor_hp?>">
        </div>

        <button type="submit" class="btn btn-primary">simpan</button>
        <button type="reset" class="btn btn-danger">reset</button>
        </form>
        <?php endforeach?>
    </section>
</div>