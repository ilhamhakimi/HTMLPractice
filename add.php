<!DOCTYPE html>
<html>
<head>
	<title>SISTEM MAKLUMAT AHLI BOLA SEPAK</title>
</head>
<body>
	<center>
		<h2>SISTEM MAKLUMAT AHLI BOLA SEPAK</h2>

		<center><img src="banner.jfif" style="width: 36vw; min-width: 330px;" /></img><center><br><br>
		
		<center><a href="index.php">Home</a> | <a href="">Training</a> | <a href="">Tournament</a> | <a href="">About</a><center><br><br>
		
<?php
include('config.php');


if(isset($_POST['submit']))
{

$kod_produk=($_POST['id']);
$nama_produk=($_POST['nama']);
$harga=($_POST['posisi']);
$kuantiti=($_POST['notel']);


$insert = mysqli_query($connect, "INSERT INTO jahli VALUES ('$id','$nama','$posisi','$notel')");

	header("location:index.php");
}
?>


<center>
<fieldset style="width:500px;">
<h4>TAMBAH Ahli Baharu</h4>

<form method="post" action="">
Nama : <input type="text" name="nama"><br>
Posisi : <input type="text" name="posisi"><br>
No. Telefon : <input type="text" name="notel"><br>
<br>
<input type="submit" name="submit">
</form>

</fieldset>
</center>
</body>
</html>