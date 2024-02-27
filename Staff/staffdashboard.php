<?php include 'Include/header.php';
include '../inc/db.php';
session_start();
$email = $_SESSION['username'];
$select = $con->query("SELECT * FROM staff WHERE email = '$email'") or die(mysql_error($con));

$ft = mysqli_fetch_array($select);
$fullname = $ft['fullname'];
$email = $ft['email'];
$phone = $ft['phone'];
$gender = $ft['gender'];
$office = $ft['office'];
$profileImageName = $ft['profile_image'];



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
	<div class="alert alert-info" style=" text-align: center; margin-top: 73px;">
  <strong style="color: green; ">Welcome <?php echo $fullname;  ?>, you are logged in successfully</strong> 
</div>

		<fieldset id="photo" class="table table-responsive">
      <h1 style="text-align: center; margin-top: 5px;">Staff Information</h1>
      <hr style="margin-top: 5px;">
    <form style="margin-top: 5px;" class="well" id="form">
      <div  class="img" style="">  <img src="../Admin/Images/<?php echo $profileImageName;  ?>" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
        <div class="well">
        <strong>
         
          <p class="detail"><label class="info">Name</label>: <?php echo $fullname; ?></p>
          <p class="detail"><label class="info">E-mail</label>: <?php echo $email; ?></p>
          <p class="detail"><label class="info">Contact</label>: <?php echo $phone; ?></p>
          <p class="detail"><label class="info">Gender</label>: <?php echo $gender; ?></p>
          <p class="detail"><label class="info">Unit</label>: <?php echo $office; ?></p>



        </strong>
        </div>
        <form/>
        </fieldset>



        <script type="text/javascript" src="scripts.js"></script>


    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
