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
$Laptop1 = new LaptopPelajar("13.5 inch (3000 x 2000)", "Intel® Core™ i7-1165G7", "Intel® Iris® Xe Graphics","16 GB LPDDR4-3200","2 TB SSD","4-cell, 66 Wh Li-ion polymer",25000000);
$Laptop2 = new LaptopPelajar("14 inch , FHD (1920 x 1080)", "Intel® Core™ i7-1165G7", "Nvidia® GeForce® MX 330","8 GB DDR4","512 GB SSD","3-cell 40 Wh lithium ion",13000000);
$Laptop3 = new LaptopPelajar("14 inch, FHD (1920 x 1080)", "Intel® Core™ i7-1165G7", "Intel® Iris® Xe Graphics","16 GB LPDDR4X Dual Channel","512 GB SSD","integrated",15000000);
$Laptop4 = new LaptopPelajar("14 inch FHD (1920 x 1080)", "AMD Ryzen™ 7-4800U", "Radeon™ Grafis","16 GB LPDDR4X","1 TB SSD M.2 2280 NVME TLC","integrated 67 wh",16800000);
$Laptop5 = new LaptopPelajar("14 inch FHD (1920 x 1080)", "Intel® Core™ i7-1165G7", "NVIDIA GeForce MX450 2GB","16 GB DDR4","512 GB SSD","3-cell, 52 Whr",18600000);
$LaptopSemua=[$Laptop1,$Laptop2,$Laptop3,$Laptop4,$Laptop5];
$Gambar=["Laptop1P.jpg","Laptop2P.jpg","Laptop3P.jpg","Laptop4P.jpg","Laptop5.jpg"];
$Nomor=[1,2,3,4,5];
$Judul=["HP Spectre x360 14 i7 1165G7","Dell Inspiron 5406 i7 1165G7","Acer Swift 3 Infinity i7 1165G7","Lenovo Yoga Slim 7 Ryzen 7 4800U","MSI Modern 14 B11SB i7 1165G7"];
echo "<center><h1><b><font face='Algerian'color='#a52a2a'>---Rekomendasi Pemilihan Laptop---</font></b></h1></center>";
echo "<marquee direction='left'><h2><b><font face='Forte' color='#a52a2a'>---Laptop Programmer---</font></h2></b></marquee>";
echo " <form method='post' action='Rekomendasi_Pemilihan_Laptop.php'><button type='submit'>Home</button>";
echo "<pre>";
for  ($i=0; $i<count($LaptopSemua),$i<count($Gambar),$i<count($Nomor),$i<count($Judul);$i++){
echo "<h2>$Nomor[$i].".$Judul[$i]. "</h2><br>";                                      
echo "<table>";
echo "<img src= '$Gambar[$i]'  alt= '$Gambar[$i]'  width='250' height='190' border= '2' /> <br>";
echo "</table>";
echo "<br>===Spesifikasi====<br>";
echo "Ukuran Layar : ", $LaptopSemua[$i]->getLayar()."<br>";
echo "Processor    : " , $LaptopSemua[$i]->getProcessor() . "<br>";
echo "Graphic Card : " , $LaptopSemua[$i]->getGraphicCard() . "<br>";
echo "Ram          : " , $LaptopSemua[$i]->getRam() . "<br>";
echo "Storage      : " , $LaptopSemua[$i]->getStorage() . "<br>";
echo "Baterai      : " , $LaptopSemua[$i]->getBaterai() . "<br>";
echo "Harga        : Rp." , $LaptopSemua[$i]->getHarga() . "<br>";
echo "";
}
echo "</pre>";
?>
</body>
</html>

