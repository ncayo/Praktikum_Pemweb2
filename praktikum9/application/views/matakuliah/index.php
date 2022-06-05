<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata kuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <h3>Daftar matakuliah</h3>
    <table border="1" style="color : red" class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($matakuliah as $matkul){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$matkul->nama?></td>
                    <td><?=$matkul->sks?></td>
                    <td><?=$matkul->kode?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url("index.php/matakuliah/edit/$matkul->id") ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url("index.php/matakuliah/delete/$matkul->id") ?>" onclick="return hapusMatakuliah('Anda yakin ingin menghapus matakuliah yang bernama <?php echo $matkul->nama ?>?')">Delete</a>
                    </td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>