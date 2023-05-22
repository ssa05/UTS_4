<html> 
<head>
    <title>Perhitungan Clarissa</title> 
</head>
<body> 
    <form action="" method="post"> 
        <!-- Form untuk mengirimkan data dengan metode POST -->
        <h1>Demo Operator</h1> 
        <h2>Arithmetic</h2> 
        <table border="3"> 
            <table width="25%" border="2" cellspacing="0" cellpadding="0"> 
                <tr> 
                    <td align="center"><b>Operand Kiri</b></td> 
                    <!-- Sel pada kolom 1 dengan teks "Operand Kiri" -->
                    <td align="center"><b>Operator</b></td> 
                    <!-- Sel pada kolom 2 dengan teks "Operator" -->
                    <td align="center"><b>Operator Kanan</b></td> 
                    <!-- Sel pada kolom 3 dengan teks "Operator Kanan" -->
                    <td align="center"><b></b></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="angka1" size="20" /></td> 
                    <!-- Sel pada kolom 1 dengan input teks untuk operand kiri -->
                    <td>
                        <select name="operasi"> 
                            <!-- Sel pada kolom 2 dengan dropdown/select box untuk memilih operator -->
                            <option value="*">x</option> 
                            <option value="/">:</option> 
                            <option value="+">+</option> 
                            <option value="-">-</option> 
                            <option value="%">%</option> 
                        </select>
                    </td> 
                    <td><input type="text" name="angka2" size="20" /></td> 
                    <!-- Sel pada kolom 3 dengan input teks untuk operand kanan -->
                    <td><input type="submit" value="Submit" /></td>
                    <!-- Sel pada kolom 4 dengan tombol submit -->
                </tr> 
            </table> 
        </table> 
        
        <?php 
        if (isset($_POST["angka1"]) && isset($_POST["angka2"])) { 
            // Memulai blok if dengan pengecekan apakah "angka1" dan "angka2" ada dalam $_POST
            
            $angka1 = $_POST["angka1"]; // Mengambil nilai angka1
            $angka2 = $_POST["angka2"]; // Mengambil nilai angka2
            if ($_POST["operasi"] == '*') { 
                // Blok if dengan kondisi $_POST["operasi"] sama dengan '*' (perkalian)
                echo "<br> hasilnya = ";
                echo $angka1 * $angka2; 
                // Menampilkan hasil perkalian
            } elseif ($_POST["operasi"] == '/') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '/' (pembagian)
                echo "<br> hasilnya = ";
                echo $angka1 / $angka2; 
                // Menampilkan hasil pembagian
            } elseif ($_POST["operasi"] == '+') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '+' (penjumlahan)
                echo "<br> hasilnya = ";
                echo $angka1 + $angka2; 
                // Menampilkan hasil penjumlahan
            } elseif ($_POST["operasi"] == '-') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '-' (pengurangan)
                echo "<br> hasilnya = ";
                echo $angka1 - $angka2; 
                // Menampilkan hasil pengurangan
            } elseif ($_POST["operasi"] == '%') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '%' (modulus)
                echo "<br> hasilnya = ";
                echo $angka1 % $angka2; 
                // Menampilkan hasil modulus
            } 
        } 
        ?> 
    </form> 
</body> 
</html> 