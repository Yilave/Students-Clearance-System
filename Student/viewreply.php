<?php include 'Include/header.php';
      include '../inc/db.php';
session_start();
$user = $_SESSION['username'];
$sql = mysqli_query($con, "SELECT * FROM reply WHERE matno = '$user'") or die(mysql_error($con));




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
	

		<fieldset id="photo" class="table table-responsive" style="margin-top: 153px;">
			<h1 style="text-align: center;">Staff reply</h1>
			<hr>
			

			<div class="well" style=" margin: 50px auto; width: 400px; text-align: center;" >
				<div class="p">
			<?php while ($row = mysqli_fetch_array($sql)) { ?>
				<fieldset style="border: 2px solid green; margin-bottom: 5px;">
					<legend style="background-color: grey; text-align: center;"><?php echo $row['create_datetime'] ?></legend>
				<p><label style="color: green;"><b> <?php echo $row['office'] ?> Unit</b></label>: <?php echo $row['body'] ?></p>
				</fieldset>
		<?php 	} ?>
		
		</div>
			</div>
        </fieldset>

		
	



    













    <?php include 'Include/scripts.php';?>
     <?php include '../footer.php';?>
</body>
</html>
