<?php
include '../koneksi.php';
$id = $_GET["id"];

unset($_SESSION["cart"][$id]);
header("location:../cart.php");
?>
