<?php 
include '../koneksi.php';
$id_pelanggan = $_GET['id'];
$id_toko = $_SESSION['user']['id_toko'];

$pelanggan = array();
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan' AND id_toko = '$id_toko' ");
while($tiap = $ambil->fetch_assoc()) {
    $id_pelanggan = $tiap['id_pelanggan'];
}
$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan' AND id_toko = '$id_toko'");

echo "<script>alert('data terhapus!')</script>";
echo "<script>location='pelanggan.php'</script>";
?>