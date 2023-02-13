<?php
require("connect_db.php");

$id=$_GET["id"];


//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="DELETE FROM survey WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>