<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>Nama Obat</th>
            <th>Obat Generik/Paten</th>
            <th>Jenis Obat</th>
            <th>Brand Obat</th>
            <th>Jumlah Barang</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Tanggal Obat Masuk</th>
            <th>Tanggal Expired</th>
        </tr>
        <?php $no = 1;
            foreach ($obat as $bt)
        :?>
        <tr>
            <td><?= $bt->nama_obat?></td>
            <td><?= $bt->non_generik?></td>
            <td><?= $bt->jenis_obat?></td>
            <td><?= $bt->brand_obat?></td>
            <td><?= $bt->jumlah_barang?></td>
            <td><?= $bt->harga_beli?></td>
            <td><?= $bt->harga_jual?></td>
            <td><?= $bt->tgl_masuk?></td>
            <td><?= $bt->tgl_exp?></td>
            </tr>
        <?php endforeach?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>