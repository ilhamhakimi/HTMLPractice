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
$id=($_POST['id']);
$nama=($_POST['nama']);
$posisi=($_POST['posisi']);
$notel=($_POST['notel']);


$insert = mysqli_query($connect, "INSERT INTO ahli VALUES ('$id','$nama','$posisi','$notel')");

	header("location:index.php");
}
?>


<center>
<h2>Tambah Ahli Baharu</h2>
<form method="post" action="">
<table border="1" cellspacing="0" cellpadding="6" style="width:400px;">
<tr><td>Nama</td><td> : </td><td><input type="text" name="nama"></td>
<tr><td>Posisi</td><td> : </td><td><input type="text" name="posisi"></td>
<tr><td>No. Telefon</td><td> : </td><td><input type="text" name="notel"></td>
</table><br>
<input type="submit" name="submit">
</form>
</center>
</body>
</html>