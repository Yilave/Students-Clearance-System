<?php include 'Include/header.php';
include '../inc/db.php';
session_start();
$email = $_SESSION['username'];
$select = $con->query("SELECT * FROM admin WHERE email = '$email'") or die(mysql_error($con));

$ft = mysqli_fetch_array($select);
$name = $ft['name'];
$email = $ft['email'];
$phone = $ft['contact'];
$gender = $ft['gender'];



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #3e4144;">
	<?php include 'Includes/header.php';?>
	<div class="alert alert-info" style="margin-top: 200px; text-align: center;">
  <strong style="color: green; ">Welcome <?php echo $name; ?> You are successfully logged in as the Administrator of this system.</strong> 
</div>

		<fieldset class="photo">
      <h1 style="text-align: center; margin-top: 5px;">Administrator Information</h1>
      <hr style="margin-top: 5px;">
    <form style="margin-top: 5px; " class="well" id="form">
     
        <div class="well">
        <strong>
         
          <p class="detail"><label class="info">Name</label>: <?php echo $name;?></p>
          <p class="detail"><label class="info">E-mail</label>: <?php echo $email; ?></p>
          <p class="detail"><label class="info">Contact</label>: <?php echo $phone; ?></p>
          <p class="detail"><label class="info">Gender</label>: <?php echo $gender; ?></p>



        </strong>
        </div>
        <form/>
        </fieldset>



        <script type="text/javascript" src="scripts.js"></script>

    <?php include '../footer.php';?>
    <?php include 'Include/scripts.php';?>
</body>
</html>
