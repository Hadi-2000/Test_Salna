<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Parfume</title>
        <link rel="stylesheet" href="CSS/index.css">
    </head>
    <body>
        <?php include_once "halaman/koneksi.php";
        $tamp = mysqli_query($conn, "select * from barang");
        ?>
    <nav>
            <ul>
                <li class="nav_left nav-active"><a href="Index.php"><h3>Sabar Sakdremo</h3></a></li>
                <li class="nav_right"><a href="Index.php"><h3>Home</h3></a></li>
                <li class="nav_right"><a href="halaman/Produk Kami.php"><h3>Produk Kami</h3></a></li>
                <li class="nav_right"><a href="halaman/Tentang Kami.php"><h3>Tentang Kami</h3></a></li>
                <li class="nav_right"><a href="halaman/Keranjang.php"><h3>Keranjang</h3></a></li>
            </ul>
        </nav>
        <!--Container-->
        <img src="img/Sabar Sakdremo.jpeg" width="100%" height="500px" alt="container">
        <h1 class="judul">Produk Kami</h1>
        <div>
            <table>
                <th></th>
                <tr>
                    <?php
                    while($hec = mysqli_fetch_assoc($tamp)){
                    ?>
                    <td>
                        <form action="halaman/detail_produk.php" method="POST">
                        <input type="hidden" name="id_barang" value="<?=$hec['id']?>">
                        <a href="halaman/detail_produk.php">
                            <img src="img/barang.png" width="30%" height="120px" alt="produk 1">
                            <h3><?=$hec['nama'] ?></h3><br>
                            <p>Harga <?= $hec['harga']?> per kilo</p>
                            <p>Stock <?= $hec['stock']?> kg</p>
                            <p><?= $hec['deskripsi'] ?></p>
                            <div style="height: 50px;"></div>
                        </a>
                        </form>
                    </td>
                    <?php } ?>
                </table>
        <!--Footer-->
        <div class="footer">Copyright 2025 Sabar Sakdremo</div>
    </body>
</html>
