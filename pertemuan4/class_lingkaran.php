<?php
// membuat class lingkaran
class Lingkaran{
    // buat properti
    private $jari;
    const PHI = 3.14;

// metode
function __construct($r){
    $this->jari = $r;
}

// buat metode getluas untuk mencari luas lingkaran
function getluas(){
    return self::PHI * $this->jari * $this->jari;
}

// buat metode getkeliling untuk mencari keliling lingkaran
function getkeliling(){
    return 2 * self::PHI * $this->jari;
}
}
?>