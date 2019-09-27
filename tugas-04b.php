<?php
//soal
echo "Jumlah Saluran = 523";
echo "<br>";
echo "Jumlah Terpakai = 8891";
echo "<br>";
echo "Rata-rata Pemakaian = ...?";
echo "<br>";
echo "Jawaban : ...liter/keluarga";
echo "<br><br>";

//deklarasi
$saluran = 523;
$terpakai = 8891;

//rumus
echo "Jumlah liter seminggu = Jumlah Terpakai / Jumlah Saluran";
echo "<br>";
echo "Jumlah liter seminggu = $terpakai / $saluran";
$liter = $terpakai / $saluran;
echo "<br>";
echo "Jumlah liter seminggu = $liter";
echo "<br><br>";
echo "<b>Jadi, Jumlah Rata-rata Air Yang Terpakai dalam Seminggu Untuk Tiap-tiap Keluarga adalah $liter liter.</b>";

?>