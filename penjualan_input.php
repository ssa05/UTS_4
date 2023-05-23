<html>
    <head> 
        <title>Penjualan Handphone</title>
        </head>
        <body>
            <h1>HANDPHONE SHOP</h1>
            <!-- Menampilkan judul halaman -->
            Produk GSM Mobile (Best Price) :<br>
            <form action="penjualan_output.php" method="post">
                <!-- Form untuk mengumpulkan data customer dan produk -->
                <input type="checkbox" name="produk1" value="Nokia 1208 Rp.350.000,-">Nokia 1208 Rp.350.000,- <br> 
                <input type="checkbox" name="produk2" value="Nokia 1661 Rp.465.000,-">Nokia 1661 Rp.465.000,-<br>
                <input type="checkbox" name="produk3" value="SonyEricson K330 Rp.485.000,-">SonyEricson K330 Rp. 485.000,-<br>
                <input type="checkbox" name="produk4" value="Samsung Champ Rp.865.000,-">Samsung Champ Rp.865.000,-<br>
                <input type="checkbox" name="produk5" value="Samsung B3410 Rp.1.624.000,-">Samsung B3410 Rp.1.624.000,-<br>
                <!-- Pilihan produk dengan checkbox -->
                ================================================ <br>
    <pre> Data Customer <br>
    ID Customer :   <input type="text" name="ID" size="30" maxlength="60">
    <!-- Input field untuk ID Customer -->
    Nama        :   <input type="text" name="nama" size="30" maxlength="60">
    <!-- Input field untuk Nama Customer -->
    Email       :   <input type="text" name="email" size="30" maxlength="60">
    <!-- Input field untuk Email Customer -->
    Alamat      :   <input type="text" name="alamat" size="30" maxlength="100">
    <!-- Input field untuk Alamat Customer -->
    Member :
     <input type=radio name="member" value=Ya checked>Member 
     <input type=radio name="member" value=Bukan>Bukan 
     <!-- Pilihan Member menggunakan radio button -->
     Pembayaran : <select name=pembayaran>
     <option value=VISA>VISA
     <option value=MasterCard>Master Card
    <option value=DebitBCA>Debit BCA
    </select><br>
    <!-- Pilihan metode pembayaran menggunakan dropdown select -->                           
    </pre>
    <input type="submit" value="Proses" name="submit">
    <!-- Tombol submit untuk memproses data -->
            </form>
        </body>
</html>
