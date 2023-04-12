<?php include 'header.php' ?>
<?php
//mendapatkan id toko si user yang login
$id_user = $_SESSION['user']['id_user'];
$id_toko = $_SESSION['user']['id_toko'];
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_toko='$id_toko'");
while ($tiap = $ambil->fetch_assoc())
{
    $pelanggan[]= $tiap;
}

?>
<div class="container">
    <div class="card border-0 shadow">
        <div class="card-header bg-primary text-white">Pelanggan</div>
        <div class="card-body">
        <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelanggan as $key => $value):?>
                        
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value["nama_pelanggan"]?> </td>
                        <td><?php echo $value["email_pelanggan"]?> </td>
                        <td><?php echo $value["telepon_pelanggan"]?> </td>
                        <td><?php echo $value["alamat_pelanggan"]?> </td>

                        <td>
                        <a class="btn btn-outline-warning btn-sm" href="pelanggan_edit.php?id=<?php echo $value['id_pelanggan']?>">Edit</a>
                        <a class="btn btn-outline-danger btn-sm" href="pelanggan_hapus.php?id=<?php echo $value['id_pelanggan']?>" onclick="return confirm('yakin?')">Hapus</a>
                    </td>
                    
                    </tr>
                    <?php endforeach ?>
                </tbody>
        </table>
        <a class="btn btn-outline-primary btn-sm" href="pelanggan_tambah.php">Tambah</a>
        </div>
        
    </div>
</div>
<?php include 'footer.php' ?>