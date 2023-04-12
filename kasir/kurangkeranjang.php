<?php include '../koneksi.php';
$id_produk = $_POST['id_produk'];

    //jk dikeranjang tinggal 1, maka hilang sekalian
    if ($_SESSION['keranjang'][$id_produk]==1)
    {
    unset($_SESSION['keranjang'][$id_produk]);
    }
    else
    {
    $_SESSION['keranjang'][$id_produk] -= 1;
    }
        
?>

