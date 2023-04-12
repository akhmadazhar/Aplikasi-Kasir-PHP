<?php include 'header.php' ?>
<?php
//mendapatkan id toko si user yang login
$id_user = $_SESSION['user']['id_user'];
$id_toko = $_SESSION['user']['id_toko'];
$pelanggan = array();
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_toko='$id_toko'");
while ($tiap = $ambil->fetch_assoc())
{
    $pelanggan[]= $tiap;
}

?>
<div class="container">
    <div class="card border-0 shadow">
        <div class="card-header bg-primary text-white">Tambah Pelanggan</div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control">
                </div>
               
                    <div class="mb-3">
                        <label>Email Pelanggan</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Telepon Pelanggan</label>
                        <input type="number" name="telepon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Alamat Pelanggan</label>
                        <textarea name="alamat" class="form-control" rows="5"></textarea>
                    </div>
                
                
                <button class="btn btn-primary" name="simpan">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) 
{
    $id_toko = $_SESSION['user']['id_toko'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];


        $koneksi->query("INSERT INTO pelanggan (id_toko,nama_pelanggan,email_pelanggan,telepon_pelanggan,alamat_pelanggan)
         VALUES ('$id_toko','$nama','$email','$telepon','$alamat') ");
    
    

    echo "<script>alert('data tersimpan')</script>";
    echo "<script>location='pelanggan.php'</script>";
}
?>
<?php include 'footer.php' ?>