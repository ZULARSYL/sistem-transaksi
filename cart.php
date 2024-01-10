<?php 
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<body>
    <a href="index.php"><b>Beli Produk</b></a><br>
    <?php 
        if (!empty($_SESSION["cart"])) {
    ?>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>Subtotal</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            $grandtotal=0;
            $no=1;
            foreach($_SESSION["cart"] as $cart => $val){
                $subtotal = $val["harga"] * $val["jumlah"];
            ?>
                <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $val["nama"]; ?></td>
                    <td><?= $val["harga"]; ?></td>
                    <td><?= $val["jumlah"]; ?>pcs</td>
                    <td><?= $subtotal ;?></td>
                    <td>
                        <a href="controller/hapus_cart.php?id=<?= $cart?>">batal</a>
                    </td>                                                             
                </tr>
            <?php
            $grandtotal+=$subtotal;
            }
            ?>
            <th colspan="4">Grand Total</th>
            <th><?=$grandtotal?></th>
            <th>&nbsp;</th>
    </table>
    <a href="controller/tambah_transaksi.php">beli</a>
    <?php
    } else {            
        echo "cart kosong";
    }   
    ?>
</body>
</html>