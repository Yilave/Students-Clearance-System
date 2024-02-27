<?php include 'Include/header.php';
include '../inc/db.php';

$sel = mysqli_query($con, "SELECT * FROM form JOIN students on form.matno = students.matno WHERE form.matno != ''");
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

<fieldset class="photo" style="margin-top: 200px;">
    <h1>Library</h1>
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
        <th>Gender</th>
        <th>Contact</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Session</th>
        <th>Clearance Status</th>
        <th>Photograph</th>
        <th>Application Date</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1;  while ($row = mysqli_fetch_array($sel)) {?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['matno']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['faculty'];  ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['session'];  ?></td>
        <?php if($row['library'] == 1){ ?>
        <td>Approved</td>
      <?php } elseif ($row['library']== 2) { ?>
        <td>Declined</td>
      <?php } else{ ?>
        <td>Pending</td>
        <?php } ?>
         <td><img src="../Student/Images/<?php echo $row['profile_image'];  ?>" class="img-responsive" width="80" hight="110"></td>
           <td><?php echo $row['create_datetime']; ?></td>
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
