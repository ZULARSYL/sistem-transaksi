<?php
include 'koneksi.php';
?>     
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Produk</title>
    </head>
    <body>
        <h1>Produk</h1>
    <?php   
        $sql = "SELECT * FROM `produk`;";
        $query = mysqli_query($conn, $sql);
        ?>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            $no = 1;
            while ($hasil = mysqli_fetch_object($query)) {
            ?>
                <tr>
                    <td><?php echo $no++;?>.</td>
                    <td><?php echo $hasil->nama_produk;?></td>
                    <td><?php echo $hasil->harga;?></td>
                    <td>
                        <a href="controller/tambah_cart.php?id=<?= $hasil->id_produk?>">tambah cart</a>
                    </td>
                </tr>
            <?php    
            }
            ?>
        </table>
    </body>
</html>