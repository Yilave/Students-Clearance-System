<?php

include("../inc/db.php");
session_start();

$matno = $_GET['matno'];
$user = $_SESSION['username'];

$sql = $con->query("SELECT * FROM staff WHERE email = '$user'");

$ft = mysqli_fetch_array($sql);

$office = $ft['office'];


$update = $con->query("UPDATE form SET $office = 2 WHERE matno = '$matno'")or die(mysqli_error($con));

if($update){
  header("location: clearstudents.php");
}


?>