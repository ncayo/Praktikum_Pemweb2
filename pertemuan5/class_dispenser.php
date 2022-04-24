<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    public function set_volume($v){     
        return $this->volume = $v;
    }

    public function set_hargaSegelas($hs){     
        return $this->hargaSegelas = $hs;
    }
    
    public function pengurangan($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil Volume Sekarang adalah " .$this->volume ." " ."Ml";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman = "Air Mineral Oasis";
echo "<hr>";
echo $air -> set_volume("Volume galonnya adalah 1000 Ml");
echo "<br>";
echo $air -> set_hargaSegelas("Harga segelasnya adalah 3000 Rupiah");
echo "<br>";
echo "Aku beli air 1 gelas yang volumenya " .Dispenser::volumeGelas ." " ."Ml";
echo "<br>";
$air->pengurangan(1000);
?>