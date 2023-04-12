<?php include 'header.php' ?>
<?php
//mendapatkan id toko si user yang login
$id_pelanggan = $_GET['id'];
$id_user = $_SESSION['user']['id_user'];
$id_toko = $_SESSION['user']['id_toko'];

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan' AND id_toko = '$id_toko'");
$pelanggan = $ambil->fetch_assoc();



?>
<div class="container">
    <div class="card border-0 shadow">
        <div class="card-header bg-primary text-white">Edit Pelanggan</div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $pelanggan['nama_pelanggan'] ?>">
                </div>
               
                    <div class="mb-3">
                        <label>Email Pelanggan</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $pelanggan['email_pelanggan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Telepon Pelanggan</label>
                        <input type="number" name="telepon" class="form-control" value="<?php echo $pelanggan['telepon_pelanggan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Alamat Pelanggan</label>
                        <textarea name="alamat" class="form-control" rows="5"><?php echo $pelanggan['alamat_pelanggan'] ?></textarea>
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

    $koneksi->query("UPDATE pelanggan SET
    id_toko='$id_toko',
    nama_pelanggan='$nama',
    email_pelanggan='$email',
    telepon_pelanggan='$telepon',
    alamat_pelanggan='$alamat' WHERE id_pelanggan = '$id_pelanggan' AND id_toko = '$id_toko' ");
    
    

    echo "<script>alert('data tersimpan')</script>";
    echo "<script>location='pelanggan.php'</script>";
}
?>
<?php include 'footer.php' ?>