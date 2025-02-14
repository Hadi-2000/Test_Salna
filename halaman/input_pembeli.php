<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Parfume/input_pembeli</title>
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
    <?php include_once "koneksi.php"; 
        $alt = mysqli_query($conn, "select * from barang");
    ?>
        <nav>
            <ul>
                <li class="nav_left"><a href="../Index.html"><h3>Sabar Sakdremo</h3></a></li>
                <li class="nav_right"><a href="../Index.html"><h3>Home</h3></a></li>
                <li class="nav_right"><a href="Produk Kami.php"><h3>Produk Kami</h3></a></li>
                <li class="nav_right nav-active"><a href="Tentang Kami.php"><h3>Tentang Kami</h3></a></li>
                <li class="nav_right"><a href="Keranjang.php"><h3>Keranjang</h3></a></li>
            </ul>
        </nav>
        <!--Container-->
        <h2 class="judul">Masukan Data</h2>
        <form method="$_POST">
            <label for="name">Nama  : </label><br>
            <input type="text" id="name" placeholder="Masukan Nama Anda" require><br>
            <label for="alamat">Alamat  : </label><br>
            <input type="text" id="alamat" placeholder="Masukan Alamat Anda" require><br>
            <label for="produk">Produk  : </label><br>
            <select id="produk">
                <option id="produk">Beras Type Biru</option>
                <option id="produk">Beras Type Merah</option>
                <option id="produk">Beras Type Hijau</option>

                
            </select><br>
            
            <label for="jumlah">Jumlah  : </label><br>
            <input type="number" id="jumlah" placeholder="Masukan Jumlah Pesanan dalam kilogram" require> kg<BR>
            <label for="total">Total : </label><br>
            <label for="metode">Metode Pemesanan  : </label>
            <select id="metode">
                <option>BRI</option>
                <option>BCA</option>
            </select><br>

            <button type="button" onclick="generateWhatsAppLink()">Pesan Sekarang</button>
    </form>
    
    <script>
        function generateWhatsAppLink() {
            const name = document.getElementById('name').value;
            const alamat = document.getElementById('alamat').value;
            const produkSelect = document.getElementById('produk');
            const produkName = produkSelect.options[produkSelect.selectedIndex].getAttribute('data-name');
            if(produkSelect=='Beras Type Biru'){
                const total = 12600 * jumlah;
            }
            const produkHarga = produkSelect.options[produkSelect.selectedIndex].getAttribute('data-harga');
            const jumlah = document.getElementById('jumlah').value;
            const metode = document.getElementById('metode').value;
            
            
            const message = `Halo, saya ingin memesan produk dari Sabar Sakdremo:\n\n` +
                            `Nama: ${name}\n` +
                            `Alamat: ${alamat}\n` +
                            `Produk: ${produkName}\n` +
                            `Harga per kg: Rp${produkHarga}\n` +
                            `Jumlah: ${jumlah} kg\n` +
                            `Total: Rp${total}\n` +
                            `Metode Pembayaran: ${metode}`;

            const waLink = `https://wa.me/+6282135525209?text=${encodeURIComponent(message)}`;

            window.open(waLink, '_blank');
        }
    </script>

        <!--Footer-->
        <div class="footer">Copyright 2025 Sabar Sakdremo</div>
    </body>
</html>
