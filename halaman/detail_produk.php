<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Parfume/detail_produk</title>
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
    <?php include_once "koneksi.php"; 
    ?>
        <nav>
            <ul>
                <li class="nav_left"><a href="../Index.php"><h3>Sabar Sakdremo</h3></a></li>
                <li class="nav_right"><a href="../Index.php"><h3>Home</h3></a></li>
                <li class="nav_right"><a href="Produk Kami.php"><h3>Produk Kami</h3></a></li>
                <li class="nav_right nav-active"><a href="Tentang Kami.php"><h3>Tentang Kami</h3></a></li>
                <li class="nav_right"><a href="Keranjang.php"><h3>Keranjang</h3></a></li>
            </ul>
        </nav>
        <!--Container-->
        <table>
            <tr>
                <td><img src="../img/barang.png" width="50%" height="120px"></td>
                <td>
                    <h2 class="judul">.....</h2><hr>
                    <p>Produk ini adalah ....</p>
                    <button><a href="input_pembeli.php">Beli Sekarang</a></button>
                    <button onclick="">Masukan Keranjang</button>
                </td>
            </tr>
        </table>
        
        <div style="margin:20px"></div>

        <!--Footer-->
        <div class="footer">Copyright 2025 Sabar Sakdremo</div>
    </body>
</html>