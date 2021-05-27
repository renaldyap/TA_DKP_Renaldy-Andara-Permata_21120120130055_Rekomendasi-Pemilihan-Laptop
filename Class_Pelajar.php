<?php
class LaptopPelajar{
    private $layar;
    private $processor;
    private $graphicCard;
    private $ram;
    private $storage;
    private $baterai;
    Private $harga;

    public function __construct($layar, $processor, $graphicCard,$ram, $storage, $baterai,$harga)
    {
        $this->layar = $layar;
        $this->processor = $processor;
        $this->graphicCard = $graphicCard;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->baterai = $baterai;
        $this->harga = $harga;
}
    public function setLayar($layarBaru){
        $this->layar = $layarBaru;
  }
    public function setProcessor($processorBaru){
        $this->processor = $processorBaru;
  }
    public function setGraphicCard($graphicCardBaru){
        $this->graphicCard = $graphicCardBaru;
  }
    public function setRam($ramBaru){
        $this->ram = $ramBaru;
  }
    public function setStorage($storageBaru){
        $this->storage = $storageBaru;
  }
    public function setBaterai($bateraiBaru){
        $this->baterai = $bateraiBaru;
  }
    public function setHarga($hargaBaru){
        $this->harga = $hargaBaru;
  }
    public function getLayar(){
     return $this->layar;
  }
    public function getProcessor(){
     return $this->processor;
  }
    public function getGraphicCard(){
     return $this->graphicCard;
  }
    public function getRam(){
     return $this->ram;
}
    public function getStorage(){
     return $this->storage;
  }
    public function getBaterai(){
     return $this->baterai;
  }
    public function getHarga(){
     return $this->harga;
  }
}