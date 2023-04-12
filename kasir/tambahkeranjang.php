<?php include '../koneksi.php';
$id_produk = $_POST['id_produk'];
$id_toko = $_SESSION['user']['id_toko'];

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$produk = $ambil->fetch_assoc();

if ($produk['stok_produk'] > 0 ){
    
    //jika di keranjang belum ada id_produk itu, maka jumlah = default 1
    if(!isset($_SESSION['keranjang'][$id_produk]))
    {
        $_SESSION['keranjang'][$id_produk] = 1;
    } 
    else
    {
        $jumlahdikeranjang = $_SESSION['keranjang'][$id_produk];
        if ($produk['stok_produk'] > $jumlahdikeranjang) 
        {
            $_SESSION['keranjang'][$id_produk]+= 1;
        }

        
    }   
}


?>

