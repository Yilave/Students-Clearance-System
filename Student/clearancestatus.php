<?php include 'Include/header.php';?>
<?php  include '../inc/db.php';
session_start();
$user = $_SESSION['username'];
 $sql = mysqli_query($con, "SELECT * FROM students WHERE matno = '$user'") or die(mysql_error($con));
 
$row = mysqli_fetch_array($sql);
$department = $row['department'];
$fullname = $row['fullname'];
$facult = $row['faculty'];
 
 $profileImageName = $row['profile_image'];


 $sqls = mysqli_query($con, "SELECT * FROM form WHERE matno = '$user'") or die(mysql_error($con));
 $rows = mysqli_fetch_array($sqls);
 $hod = $rows['Department'];
 $faculty = $rows['Faculty'];
 $library = $rows['library'];
 $laboratory = $rows['laboratory'];
 $sport = $rows['sport'];
 $bursary = $rows['bursary'];
 $security = $rows['security'];
 


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
        <h2 style="text-align: center;">Clearance Statement</h2>
        <hr>
    <div  class="img" style="">  <img src="Images/<?php echo $profileImageName;  ?>" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
    <hr>

    <p style="text-align: center; font-size: 18px;"><label>Name:</label> <?php echo $fullname; ?></p>
    <p style="text-align: center; font-size: 18px;"><label>Matriculation Number:</label> <?php echo $user; ?></p>
    <p style="text-align: center; font-size: 18px;"><label>Department:</label> <?php echo $department; ?></p>
    <p style="text-align: center; font-size: 18px;"><label>Faculty:</label> <?php echo $facult; ?></p>
    <hr>
   
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tbody>
      <tr>
       
        <th>Clearance Units</th>
        <th>Clearance Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td>Department</td>
        <?php if($hod == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($hod == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      <tr>
        <td>Faculty</td>
        <?php if($faculty == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($faculty == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
      <tr>
        <td>Library</td>
        <?php if($library == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($library == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
      <?php if($row['faculty'] == 'Pure and Applied Science' or $row['faculty'] == 'Agriculture and Life Science'){ ?>
      <tr>
          <td>Laboratory</td>
          <?php if($laboratory == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($laboratory == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
      <?php } ?>
      <tr>
          <td>Sports Office</td>
          <?php if($sport == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($sport == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
      <tr>
          <td>Bursary</td>
          <?php if($bursary == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($bursary == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
      <tr>
          <td>Security</td>
          <?php if($security == 1){ ?>
        <td><?php echo "Approved"; ?></td>
      <?php }else if($security == 2){ ?>
     <td><?php echo "Declined"; ?></td>
     <?php } else{?>
       <td><?php echo "Pending"; ?></td>
     <?php } ?>
      </tr>
    </tbody>
  </table>
</div>

<div class="alert alert-info">
  <strong style="color: green;">Kindly click on the link below to print your clearance statement, <b style="font-weight: bolder; color: red;">if and only if</b> all the units are cleared</strong> 
</div>

<a style="background: green; border: 1px solid white; margin-bottom: 25px;" href="#" class="btn btn-primary" onclick="print()"> <span class="glyphicon glyphicon-print"></span> Print Statement</a>
        
		
    </fieldset>

		
	



    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
