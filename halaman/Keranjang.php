<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Parfume/Keranjang</title>
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
    <?php include_once "koneksi.php"; ?>
    <nav>
            <ul>
                <li class="nav_left"><a href="../Index.php"><h3>Sabar Sakdremo</h3></a></li>
                <li class="nav_right"><a href="../Index.php"><h3>Home</h3></a></li>
                <li class="nav_right"><a href="Produk Kami.php"><h3>Produk Kami</h3></a></li>
                <li class="nav_right"><a href="Tentang Kami.php"><h3>Tentang Kami</h3></a></li>
                <li class="nav_right nav-active"><a href="Keranjang.php"><h3>Keranjang</h3></a></li>
            </ul>
        </nav>
        <!--Container-->
        <h1 class="judul">Keranjang</h1>
        <div>
            <table border="1">
                <th>
                    <td><h3>Produk</h3></td>
                </th>
                <tr>
                    <td>
                        <img src="../img/barang.png" width="50%" height="120px" alt="produk 1">
                    </td>
                    <td> 
                        <h3 class="judul">Produk Parfum A</h3><br>
                        <p>Parfum A adalah produk parfum yang...</p>
                    </td>
                </tr>
            </table>
        </div>

        <div style="margin:20px"></div>
        <!--Footer-->
        <div class="footer">Copyright 2025 Sabar Sakdremo</div>
    </body>
</html>