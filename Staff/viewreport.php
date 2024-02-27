<?php 
include 'Include/header.php';
include '../inc/db.php';
session_start();
$role = $_SESSION['role'];
$user = $_SESSION['username'];
$sql = mysqli_query($con, "SELECT * FROM students RIGHT JOIN message on students.matno = message.stuMatno WHERE message.office = '$role'") or die(mysqli_error($con));
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
	

		<fieldset id="photo" style="margin-top: 73px;">
			<div class="alert alert-info" style=" text-align: center;">
  <strong style="color: green; ">Kindly click on Reply to reply a student's complain</strong> 
</div>
			<h1>Students' Complains</h1>
			<hr>

			<div class="well" style=" margin: 50px auto; width: 400px; text-align: center;" >
			<?php while ($row = mysqli_fetch_array($sql)) { ?>
				<fieldset style="border: 2px solid green; margin-bottom: 5px;">
					<legend style="background-color: grey; text-align: center;"><?php echo $row['create_datetime'] ?></legend>
				<img src="../Student/Images/<?php echo $row['profile_image'];  ?>" class="img-responsive" width="80" hight="110" style ="margin:10px auto;">
				<label style="color: green;">Name:</label> <?php echo $row['fullname']; ?><br>
				<label style="color: green;">Matriculation number:</label> <?php echo $row['matno']; ?><br>
				<label style="color: green;">Department:</label> <?php echo $row['department']; ?><br>
				<label style="color: green;">Complain:</label> <?php echo $row['body'] ?><br>
				<a style="margin-bottom: 5px;" class="btn btn-primary" style="background-color: green;" href="reply.php?stuMatno=<?php echo $row['stuMatno']; ?>">Reply</a>
				</fieldset>
		<?php 	} ?>
		
			</div>
			
		
        </fieldset>

		
	



    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
