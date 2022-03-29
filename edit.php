<!DOCTYPE html>
<html>
<head>
	<title>SISTEM MAKLUMAT AHLI BOLA SEPAK</title>
</head>
<body>
	<center>
		<h2>SISTEM MAKLUMAT AHLI BOLA SEPAK</h2>
<body>
		<center><img src="banner.jfif" style="width: 36vw; min-width: 330px;" /></img><center><br><br>
		<center><a href="index.php">Home</a> | <a href="">Training</a> | <a href="">Tournament</a> | <a href="">About</a><center><br><br>
		<?php
		
include "config.php";
$id = $_GET["id"];
$name = $_GET["nama"];
$posisi = $_GET["posisi"];
$notel = $_GET["notel"];


$query = "UPDATE ahli SET name = '$name', posisi = '$posisi', 
notel = '$notel' WHERE id = '$id'";

$res = mysql_query($query);

if ($res)
echo "<p>Record Updated<p>";
else
echo "Problem updating record. MySQL Error: " . mysql_error();
?>

<form action="update.php" method="post">
<input type="hidden" name="id" value="<?=$id;?>">
Name:<br> <input type='text' name='name' id='name' maxlength='25'   style='width:247px' name="name" value="<?=$name;?>"/><br>
Posisi:<br> <input type='text' name='posisi' id='posisi' maxlength='20' style='width:248px'     name="ud_img" value="<?=$posisi;?>"/><br>
Notel:<br> <input type='text' name='notel' id='notel' maxlength='50' style='width:250px'    name="ud_img" value="<?=$notel;?>"/><br>
<input type="submit">
</form>
		
	</center>

	
</body>
</html>