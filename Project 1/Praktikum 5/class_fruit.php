<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class sebelumnya.
    public function pesan(){
        echo "Aku adalah jambu atau mangga?";
    }
}
$buah = new Strawberry('jambu','merah');
$buah->pesan();
$buah->intro();
?>