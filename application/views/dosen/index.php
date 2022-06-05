<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script>
        function hapusDosen(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h3>Selamat Datang $username</h3>";
}
?>
<body>
    <h2 align='center'>Daftar Dosen</h2>
    <table border="1" style="color : red" class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($dosen as $dsn){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$dsn->nama?></td>
                    <td><?=$dsn->gender?></td>
                    <td><?=$dsn->pendidikan?></td>
                    <td>
                        <a class="btn btn-success" href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a>
                        <a class="btn btn-warning" href="<?php echo base_url("index.php/dosen/edit/$dsn->id") ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url("index.php/dosen/delete/$dsn->id") ?>" onclick="return hapusDosen('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $dsn->nama ?>?')">Delete</a>
                    </td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/dosen/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>