
<div class="card">
    <div class="card-header">
      <a href="<?= base_url('pasien/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Pasien</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
foreach ($pasien as $psn)
    : ?>
            <tbody>
            <tr class="text-center">
                    <td><?= $no++?></td>
                    <td><?= $psn->nama_pasien?></td>
                    <td><?= $psn->alamat?></td>
                    <td><?= $psn->email?></td>
                    <td><?= $psn->nomor_hp?></td>
                    <td onclick="javascript: return confirm('Hapus Data Ini?')"><?= anchor('pasien/delete/'.$psn->id_pasien, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
                    </td>
                    <td><?= anchor('pasien/edit/'. $psn->id_pasien, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                </tr>
        </tbody>
    <?php endforeach?>
    </table>
</div>
