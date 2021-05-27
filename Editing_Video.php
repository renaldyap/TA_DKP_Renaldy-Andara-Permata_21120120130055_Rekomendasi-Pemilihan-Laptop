<html>
<head>
<style>
body {margin: 100px;padding: 50px;;font-size: 15px;background-image: url('Background1.jpg');
background-repeat: no-repeat;background-size: cover;}
</style>
</head>
<body>
<center><h1><b><font face='Algerian'color='#a52a2a'>---Rekomendasi Pemilihan Laptop---</font></b></h1></center>
<marquee direction='left'><h2><b><font face='Forte' color='#a52a2a'>---Laptop Editing Video--</font></h2></b></marquee>
<form method='post' action='Rekomendasi_Pemilihan_Laptop.php'><button type='submit'>Home</button>
<pre>
<?php

$NamaLaptop= ["ASUS ZenBook Pro Duo UX482EG","Dell XPS 15 9500","Apple MacBook Pro M1","Lenovo Yoga Slim 7i Carbon","Asus ROG Zephyrus Duo 15"];
$UkuranLayar= ["14 inch, FHD (1920 x 1080) 60 Hz ","15.6 inch FHD (1920 x 1200)","13,3 inch QHD, (2560 x 1600 )","13,3 inch QHD, (2560 x 1600 )","15.6 inch,UHD (3840 x 2160)"];
$Processor= ["Intel® Core™ i7-1165G7","Intel® Core™ i7-10750H","Apple M1 Chip CPU 8-core GPU-8 Core","Intel® Core™ i7-1165G7","Intel® Core™ i7-10875H"];
$GraphicChard = ["Intel® Iris Xe graphics, NVIDIA® GeForce® MX450, 2 GB GDDR6","NVIDIA® GeForce® GTX 1650 Ti 4GB GDDR6 ","Appple M1 Chip ","Intel®Iris®Xe","NVIDIA® GeForce® RTX 2080 SUPER™ 8GB GDDR6 VRAM"];
$Ram= ["16 GB LPDDR4x","16 GB DDR4","8 GB DDR4","16 GB LPDDR4X"," 2 x 16 GB DDR4 "];
$Storage= ["512 GB SSD","512 GB SSD","512 GB SSD","1 TB SSD","2 x 1 TB M.2 SSD"]; 
$Baterai= ["70 Wh, 4-cell Li-ion","86 Wh","Lithium-polymer 58,2 wh","50Wh","90 WHrs, 4S1P, 4-cell Li-ion"];
$harga=[24500000,23999000,24600000,20300000,48600000];
$Gambar=["Laptop1E.jpg","Laptop2E.jpg","Laptop3E.jpg","Laptop4E.jpg","Laptop5E.jpg"];
$Nomor=[1,2,3,4,5];


for ($i = 0; $i < count($NamaLaptop),$i < count($UkuranLayar),$i < count($Processor),$i < count($GraphicChard),$i < count($Ram),$i < count($Storage),$i < count($Baterai),$i < count($harga),$i < count($Gambar),$i < count($Nomor); $i++) {
echo  "<h2> $Nomor[$i].".$NamaLaptop[$i]."</h2><br>";
echo "<table>";
echo "<img src= '$Gambar[$i]'  alt= '$Gambar[$i]'  width='250' height='190' border= '2' /><br>";
echo "</table>";
echo "<br>--Spesifikasi-- <br>";
echo "Ukuran Layar : " , $UkuranLayar[$i]."<br>";
echo "Processor    : " , $Processor[$i] . "<br>";
echo "Graphic Card : " , $GraphicChard[$i]. "<br>";
echo "Ram          : " , $Ram[$i] . "<br>";
echo "Storage      : " , $Storage[$i] . "<br>";
echo "Baterai      : " , $Baterai[$i]. "<br>";
echo "Harga        : Rp." , $harga[$i]. "<br>";
echo "<br>";}

?>
</pre>
</body>
</html>