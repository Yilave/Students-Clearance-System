<?php include 'Include/header.php';
      include '../inc/db.php';
      //include 'ProcessForm.php';

session_start();
$user = $_SESSION['username'];
 $sql = mysqli_query($con, "SELECT * FROM students WHERE matno = '$user'") or die(mysql_error($con));
 
$row = mysqli_fetch_array($sql);
 $fullname = $row['fullname'];
$profileImageName = $row['profile_image'];
  $matno = $row['matno'];
  $faculty = $row['faculty']; 
  $department = $row['department'];
   $session = $row['session'];


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
	<div class="alert alert-info" style=" margin-top: 153px; text-align: center;">
  <strong style="color: green; font-weight: bolder; ">Welcome <?php echo $fullname; ?>, You are logged in Succesfully.</strong> 
</div>

		<fieldset id="photo" class="table table-responsive">
			<h2 style="text-align: center; margin-left: 15px; margin-right: 15px;">Student Information</h2>
			<hr style="margin-top: 5px;">
		<form style="margin-top: 5px;" class="form">
			<div  class="img" style="">  <img src="Images/<?php echo $profileImageName;  ?>" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
        <div class="well">
        <strong>
         
        	<p class="detail"><label class="info">Name</label>: <?php echo "$fullname"; ?></p>
        	<p class="detail"><label class="info">Matriculation Number</label>: <?php echo "$matno"; ?></p>
        	<p class="detail"><label class="info">Faculty</label>: <?php echo "$faculty"; ?></p>
        	<p class="detail"><label class="info">Department</label>: <?php echo "$department"; ?></p>
          <p class="detail"><label class="info">Session</label>: <?php echo "$session"; ?></p>



        </strong>
        </div>
        <form/>
        </fieldset>

		
	



    









        <script type="text/javascript" src="scripts.js"></script>



    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
