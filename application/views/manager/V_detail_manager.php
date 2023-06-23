<div class="content-wrapper">
    <section class="content">
        <h4><strong>Detail Data Obat</strong></h4>
        <table class="table">
            <tr>
                <th>Nama Obat</th>
                <td><?php echo $detail->nama_obat?></td>
            </tr>
            <tr>
                <th>Obat Non Generik / Paten</th>
                <td><?php echo $detail->non_generik?></td>
            </tr>
            <tr>
                <th>Jenis Obat</th>
                <td><?php echo $detail->jenis_obat?></td>
            </tr>
            <tr>
                <th>Jumlah Barang</th>
                <td><?php echo $detail->jumlah_barang?></td>
            </tr>
            <tr>
                <th>Brand Obat</th>
                <td><?php echo $detail->brand_obat?></td>
            </tr>
            <tr>
                <th>Harga beli</th>
                <td><?php echo $detail->harga_beli?></td>
            </tr>
            <tr>
                <th>Harga Jual</th>
                <td><?php echo $detail->harga_jual?></td>
            </tr>
            <tr>
                <th>Tanggal Obat Masuk</th>
                <td><?php echo $detail->tgl_masuk?></td>
            </tr>
            <tr>
                <th>Tanggal Expired</th>
                <td><?php echo $detail->tgl_exp?></td>
            </tr>
        </table>
    </section>
    <a href="<?= base_url('manager')?>">kembali</a>
</div>