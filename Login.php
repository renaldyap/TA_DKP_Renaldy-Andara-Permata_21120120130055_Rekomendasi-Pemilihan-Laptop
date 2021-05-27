<?php
$form_error = '';
 
if(isset($_POST['submit'])){
 
    $Username = $_POST['Username'];
    $Nim = $_POST['Nim'];
 
    if($Username == 'Renaldy' AND $Nim == '21120120130055'){
        header('Location: Rekomendasi_Pemilihan_Laptop.php');
    }else{
 
        $form_error = '<center><p>Login Gagal, Username atau Nim yang kamu masukkan salah</p></center>';
    }
}
 
?>
 
<html>
<head>
    <title>Login Sederhana</title>
<style>body {margin: 50px;padding: 50px;background-image: url('Background3.jpg');
       background-repeat: no-repeat;background-size: cover;}
</style>
</head>
<body>
<?php
    
echo "<pre>";
echo "<center><h2><font face ='Arial'>Rekomendasi Pemilihan Laptop<br>Silakan Login </h2></center>";
echo '<form method="POST" action="login.php">
      <center > Username : <input type="Username" name="Username"></center>
      <center > Nim          : <input type="Nim" name="Nim"></center><br>';
echo $form_error; 
echo'<center><input type="submit" name="submit" value="Login"></center>
      </form>';
echo"</pre>";
 ?>
 
</body>
</html>