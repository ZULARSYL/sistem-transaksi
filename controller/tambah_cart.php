<?php
    include '../koneksi.php';
    $id = $_GET["id"];

    $sql = "SELECT * FROM `produk` WHERE `id_produk` =".$id;
    $query = mysqli_query($conn,$sql);
    $hasil = mysqli_fetch_object($query);
    $_SESSION["cart"][$id] = [
        "nama" => $hasil->nama_produk,
        "harga" =>$hasil->harga,
        "jumlah" => 1
    ];
    header("location:../cart.php");
?>