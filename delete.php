Delete.php
<?php
include 'config.php'; 
	$kod_produk =$_GET['kod_produk'];// sending query
	$delete= mysqli_query($connect, "DELETE FROM jadualmainan WHERE kod_produk = '$kod_produk'") ; //wrong data directory name 'jadual_item'
		
	header("Location: index.php");
?>
