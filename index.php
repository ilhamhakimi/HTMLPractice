<!DOCTYPE html>
<html>
<head>
	<title>SISTEM MAKLUMAT AHLI BOLA SEPAK</title>
</head>
<body>
	<center>
		<h2></h2>
<body>
   
		
		<table border="1" cellspacing="0" cellpadding="6">
		  <tr>	

			<th><a href="add.php"> Add New Member </a></a></th>
			</tr><tr>
			<th>ID</th>
        	<th>Nama</th>
        	<th>Posisi</th>
			<th>No. Telefon</th>
			<th>Tindakan</th>
		  </tr>
		  <?php
		  	include 'config.php'; //wrong file directory name 'config1.php'

		  	$papar=mysqli_query($connect,"SELECT * FROM ahli");

		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['id']."</td>
			<td>".$row['nama']."</td>
        		<td>".$row['posisi']."</td>
        		<td>".$row['notel']."</td>
<td><a href='edit.php?id=".$row['id']."'> Edit </a>" | " <a href='delete.php?id=".$row['id']."' onclick='myHapus()'> Delete </a></td>
		  </tr>";
		}
		  ?>
		</table>
<p></p> <!-- wrong file directory name 'tambah.php' -->
		
	</center>

	
</body>
</html>


