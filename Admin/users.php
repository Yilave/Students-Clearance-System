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
    $sql = $con->query("SELECT * FROM users")
     ?>

        <fieldset class="photo" style="margin-top: 200px;">
            <h1>Users</h1>
            <hr>
            <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
      <tr>
        <th>S/N</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Registration Date</th>
      </tr>
    </thead>
     <?php $no=1;  while ($row = mysqli_fetch_array($sql)) { ?>
    <tbody>
         <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['username'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php echo $row['role'];?></td>
          <td><?php echo $row['create_datetime'];?></td>
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
