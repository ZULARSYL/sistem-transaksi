<?php
include '../koneksi.php';
$sql = "INSERT INTO `header_transaksi` (`tgl_transaksi`) VALUES ('".date("Ymd")."')";
$query = mysqli_query($conn,$sql);
$id_transaksi = mysqli_insert_id($conn);

foreach($_SESSION["cart"] as $cart =>$val){
    $sql= "INSERT INTO `detail_transaksi` (`id_transaksi`,`id_produk`,`jumlah`) VALUES (".$id_transaksi.", ".$cart.", ".$val["jumlah"].")";
    $query = mysqli_query($conn,$sql);
}

unset($_SESSION["cart"]);
header("location:../cart.php");
?>