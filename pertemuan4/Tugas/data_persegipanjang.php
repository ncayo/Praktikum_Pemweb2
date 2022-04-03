<?php
//  memanggil file atau class_persegiPanjang.php
require_once 'class_persegiPanjang.php';
$LuasPersegi = new PersegiPanjang();
echo "Diketahui";
echo "<br>";
echo "Panjang Persegi Panjang : " .$LuasPersegi->getpanjang(20) ." " ."cm";
echo "<br>";
echo "Lebar Persegi Panjang : " .$LuasPersegi->getlebar(10) ." " ."cm";
echo "<hr>";
echo "Hasilnya adalah";
echo "<br>";
echo $LuasPersegi->luasp() ." " ."cm";
echo "<br>";
echo $LuasPersegi->kelilingp() ." " ."cm";
?>