<?php
//soal
echo "Harga Beli = Rp. 6000";
echo "<br>";
echo "Harga Beli = Rp. 7500";
echo "<br>";
echo "Keuntungan = Rp. 300";
echo "<br>";
echo "Berapa Jumlah kambing yang dibeli? Jawaban : ...ekor";
echo "<br><br>";

//deklarasi
$beli = 6000;
$jual = 7500;
$untung = 300;

//rumus
echo "Laba Perekor = Harga Jual - Harga Beli";
echo "<br>";
echo "Laba Perekor = $jual - $beli";
echo "<br>";
$laba = $jual - $beli;
echo "Laba Perekor = $laba";
echo "<br><br>";
echo "Kambing Yang Dibeli = Total Laba / Total Keuntungan";
echo "<br>";
echo "Kambing Yang Dibeli = $laba / $untung";
echo "<br>";
$hasil = $laba / $untung;
echo "Kambing yg dibeli = $hasil";
echo "<br><br>";
echo "<b>Jadi, Jumlah Kambing Yang Dibeli Petani adalah $hasil ekor</b>.";

?>