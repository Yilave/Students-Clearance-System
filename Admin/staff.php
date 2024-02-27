<?php include 'Include/header.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #3e4144;">
	<?php include 'Includes/header.php';?>
    <?php
     include '../inc/db.php';
    $sql = $con->query("SELECT * FROM staff")

     ?>

		<fieldset class="photo" style="margin-top: 200px;">
			<h1>Staff</h1>
			<hr>
			<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
      <tr>
        <th>S/N</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Office</th>
        <th>Photograph</th>
        <th>Registeration Date</th>
      </tr>
    </thead>
     <?php $no=1;  while ($row = mysqli_fetch_array($sql)) { ?>
    <tbody>
         <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['fullname'];?></td>
          <td><?php echo $row['phone'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['office'];?></td>
          <td><img src="../Admin/Images/<?php echo $row['profile_image'];  ?>" class="img-responsive" width="80" hight="110"></td>
          <td><?php echo $row['create_datetime']; ?></td>
            <?php } ?>

      </tr>
    </tbody>
  
  </table>
</div>

		</fieldset>

		
	



    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
