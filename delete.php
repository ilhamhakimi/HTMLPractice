<?php
include 'config.php'; 
	$id=$_GET['id'];
    $sql = "DELETE FROM ahli WHERE id='$id'";

    if ($connect->query($sql) === TRUE) {
       header("Location: index.php");
    } else {
        echo "Error deleting record: " . $connect->error;
    }

    $connect->close();

?>