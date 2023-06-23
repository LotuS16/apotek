<div class="card">
    <div class="card-header">
        <h1>Catatan Pengeluaran Obat</h1>
        <a href="<?= base_url('obat/keluar')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Catatan Obat Keluar</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
    <h1>History Pengeluaran Obat</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Jumlah Obat Keluar</th>
                    <th>Tanggal Obat Keluar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
foreach ($ex as $x)
: ?>
        <tbody>
            <tr class="text-center">
                <td><?= $no++?></td>
                <td><?= $x->nama_obat?></td>
                <td><?= $x->jenis_obat?></td>
                <td><?= $x->jumlah_obat?></td>
                <td><?= $x->tgl_catat?></td>
                <td><?= anchor('obat/detail/'. $bt->id_obat, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                <td><?= anchor('obat/edit/'. $bt->id_obat, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>')?></td>
            </tr>
        </tbody>
    <?php endforeach?>
    </table>
</div>
