<div class="card">
    <div class="card-header">
    <a href="<?= base_url('obat/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Obat</a>
        <a href="<?= base_url('obat/print')?>" class="btn btn-danger btn-sm" ><i class="fas fa-print"></i> Print</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Generik/Paten Obat</th>
                    <th>Jenis Obat</th>
                    <th>experied</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
foreach ($obat as $bt)
    : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++?></td>
                    <td><?= $bt->nama_obat?></td>
                    <td><?= $bt->non_generik?></td>
                    <td><?= $bt->jenis_obat?></td>
                    <td><?= $bt->tgl_exp?></td>
                    <td onclick="javascript: return confirm('Hapus Data Ini?')"><?= anchor('obat/delete/'.$bt->id_obat, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
                    </td>
                    <td><?= anchor('manager/detailObat/'. $bt->id_obat, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                    <td><?= anchor('obat/edit/'. $bt->id_obat, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                </tr>
            </tbody>
        <?php endforeach?>
        </table>
    </div>
