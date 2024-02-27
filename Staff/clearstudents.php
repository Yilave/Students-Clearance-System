<?php include 'Include/header.php';
include '../inc/db.php';

$sel= $con->query("SELECT * FROM form JOIN students on form.matno = students.matno WHERE form.matno != ''")


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #3e4144;">
	<?php include 'Includes/header.php';?>
	
		<fieldset id="photo" style="margin-top: 73px;">
      <div class="alert alert-info" style=" text-align: center;">
  <strong style="color: green; ">Kindly click on the buttons to approve or decline a student</strong> 
</div>

			<h1>Students clearance</h1>
			<hr>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Student Name</th>
        <th>Matriculation Number</th>
        <th>Department</th>
        <th>Faculty</th>
        <th>Academic Session</th>
        <th>Photograph</th>
        <th>Application Date</th>
        <th>Update Status</th>
        <th>Confirm Status</th>

        
      </tr>
    </thead>
    <?php $no=1;  while ($row = mysqli_fetch_array($sel)) { ?>
    
    <tbody>
    
      
      <tr>
        <td><?php echo $no++; ?></td>
      	
      	<td><?php echo $row['fullname'];?></td>
          <td><?php echo $row['matno'];?></td>
          <td><?php echo $row['department'];?></td>
          <td><?php echo $row['faculty'];?></td>
          <td><?php echo $row['session'];?></td>


          
          <td><img src="../Student/Images/<?php echo $row['profile_image'];  ?>" class="img-responsive" width="80" hight="110"></td>
          <td><?php echo $row['create_datetime'];?></td>

          
          <td><a href="approve.php?matno=<?php echo $row['matno'] ?>" class="btn btn-primary">Clear</a>   <a href="decline.php?matno=<?php echo $row['matno'] ?>" class="btn btn-primary">Decline</a></td>

                    <?php if($row['Department'] == 1 || $row['faculty'] == 1 || $row['library'] == 1  || $row['laboratory'] == 1 || $row['sport'] == 1 || $row['bursary'] == 1 || $row['security'] == 1 ){ ?>
        <td>Approved</td>
        <?php }elseif ($row['Department'] == 2 || $row['faculty'] == 2 || $row['library'] == 2  || $row['laboratory'] == 2 || $row['sport'] == 2 || $row['bursary'] == 2 || $row['security'] == 2 ){ ?>
        <td>Declined</td>
      <?php } else{ ?>
        <td>Pending</td>

        <?php } ?>
      </tr>
       </tbody>

   <?php } ?>
</table>
</div>

		
        </fieldset>

		
	



    


    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
