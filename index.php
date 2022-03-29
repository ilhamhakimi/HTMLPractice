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
		
		<table border="1" cellspacing="0" cellpadding="6">
		  <tr>	
			<th colspan="5"><a href="add.php"> Add New Member </a></th>
			</tr><tr>
			<th>ID</th>
        	<th>Nama</th>
        	<th>Posisi</th>
			<th>No. Telefon</th>
			<th>Tindakan</th>
		  </tr>
		  <?php
		  	include 'config.php';

		  	$papar=mysqli_query($connect,"SELECT * FROM ahli");

		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['id']."</td>
			<td>".$row['nama']."</td>
        		<td>".$row['posisi']."</td>
        		<td>".$row['notel']."</td>
				<td><a href='edit.php?id=".$row['id']."'> Edit </a>	| <a href='delete.php?id=".$row['id']."' onclick='myHapus()'> Delete </a></td>
		  </tr>";
		}
		  ?>
		</table>
<p></p>
		
	</center>

	
</body>
</html>


