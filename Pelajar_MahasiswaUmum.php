<html>
<head>
<style>
body {margin: 100px;padding: 50px;font-size: 15px;background-image: url('Background1.jpg');
background-repeat: no-repeat;background-size: cover;}
</style>
</head>
<body>
<?php
include 'Class_Pelajar.php';
$Laptop1 = new LaptopPelajar("15.6 inch, HD (1366 x 768)", "AMD Athlon™ Gold 3150U", "AMD Radeon™ Graphics","4 GB DDR4","256 GB SSD","3-cell, 41 Wh Li-ion",5950000);
$Laptop2 = new LaptopPelajar("15,6 inch HD (1366 x 768)", "AMD Athlon Silver 3050U", "Intel® UHD Graphics","8 GB DDR4","1 TB HDD","41wh",6300000);
$Laptop3 = new LaptopPelajar("14 inch HD (1366 x 768) ", "Intel Celeron N4020 dual-core ", "Intel UHD Graphics 600","4 GB DDR4","1 TB SATA III 5400rpm HDD","2-cell,Li-ion 41wh",5500000);

echo "<center><h1><b><font face='Algerian'color='#a52a2a'>---Rekomendasi Pemilihan Laptop---</font></b></h1></center>";
echo "<marquee direction='left'><h2><b><font face='Forte' color='#a52a2a'>---Laptop Pelajar/Mahasiswa Umum---</font></h2></b></marquee>";
echo " <form method='post' action='Rekomendasi_Pemilihan_Laptop.php'><button type='submit'>Home</button>";
echo "<pre>";
echo "<h2><b>1. Hp 15 Athlon Gold 3150U </b></h2>";                                      
echo "<table>";
echo "<img src= 'Laptop1.jpg'  alt= 'Laptop1.jpg'  width='250' height='190' border= '2' /> <br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $Laptop1->getLayar()."<br>";
echo "Processor    : " , $Laptop1->getProcessor() . "<br>";
echo "Graphic Card : " , $Laptop1->getGraphicCard() . "<br>";
echo "Ram          : " , $Laptop1->getRam() . "<br>";
echo "Storage      : " , $Laptop1->getStorage() . "<br>";
echo "Baterai      : " , $Laptop1->getBaterai() . "<br>";
echo "Harga        : Rp." , $Laptop1->getHarga() . "<br>";
echo "";

$Laptop1->setLayar("14 inch, HD (1366 x 768)");
$Laptop1->setProcessor("Intel® Pentium® Silver N5000");
$Laptop1->setGraphicCard("Intel® UHD Graphics 605");
$Laptop1->setStorage("128 GB M.2 SSD");
$Laptop1->setHarga(4700000);
echo "<h2><b>2. HP 14 N5000</b></h2>";
echo "<table>";
echo "<img src= 'Laptop2.jpg'  alt= 'Laptop2.jpg'  width='250' height='190' border= '2' /><br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $Laptop1->getLayar()."<br>";
echo "Processor    : " , $Laptop1->getProcessor() . "<br>";
echo "Graphic Card : " , $Laptop1->getGraphicCard() . "<br>";
echo "Ram          : " , $Laptop1->getRam() . "<br>";
echo "Storage      : " , $Laptop1->getStorage() . "<br>";
echo "Baterai      : " , $Laptop1->getBaterai() . "<br>";
echo "Harga        : Rp." , $Laptop1->getHarga() . "<br>";

echo "<h2><b>3.Acer Extensa 15 EX215-22 </b></h2>";
echo "<table>";
echo "<img src= 'Laptop3.jpg'  alt= 'Laptop3.jpg'  width='250' height='190' border= '2' /><br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $Laptop2->getLayar()."<br>";
echo "Processor    : " , $Laptop2->getProcessor() . "<br>";
echo "Graphic Card : " , $Laptop2->getGraphicCard() . "<br>";
echo "Ram          : " , $Laptop2->getRam() . "<br>";
echo "Storage      : " , $Laptop2->getStorage() . "<br>";
echo "Baterai      : " , $Laptop2->getBaterai() . "<br>";
echo "Harga        : Rp." , $Laptop2->getHarga() . "<br>";

echo "<h2><b>4.ASUS VivoBook A416MA </b></h2>";
echo "<table>";
echo "<img src= 'Laptop4.jpg'  alt= 'Laptop4.jpg'  width='250' height='190' border= '2' /><br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $Laptop3->getLayar()."<br>";
echo "Processor    : " , $Laptop3->getProcessor() . "<br>";
echo "Graphic Card : " , $Laptop3->getGraphicCard() . "<br>";
echo "Ram          : " , $Laptop3->getRam() . "<br>";
echo "Storage      : " , $Laptop3->getStorage() . "<br>";
echo "Baterai      : " , $Laptop3->getBaterai() . "<br>";
echo "Harga        : Rp." , $Laptop3->getHarga() . "<br>";

$Laptop3->setLayar("15.6 inch, HD (1366 x 768)");
$Laptop3->setProcessor("Intel Celeron 4205U");
$Laptop3->setGraphicCard("Intel UHD Graphics 610");
$Laptop3->setStorage("1 TB HDD");
$Laptop3->setBaterai("42Wh, 3-cell");
$Laptop3->setHarga(4420000);
echo "<h2><b>5. Dell Inspiron 15 3583 Celeron 4205U</b></h2>";
echo "<table>";
echo "<img src= 'Laptop5.jpg'  alt= 'Laptop5.jpg'  width='250' height='190' border= '2' /><br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $Laptop3->getLayar()."<br>";
echo "Processor    : " , $Laptop3->getProcessor() . "<br>";
echo "Graphic Card : " , $Laptop3->getGraphicCard() . "<br>";
echo "Ram          : " , $Laptop3->getRam() . "<br>";
echo "Storage      : " , $Laptop3->getStorage() . "<br>";
echo "Baterai      : " , $Laptop3->getBaterai() . "<br>";
echo "Harga        : Rp." , $Laptop3->getHarga() . "<br>";
echo "</pre>";
?>
</body>
</html>


