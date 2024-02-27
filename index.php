<!DOCTYPE html>
<html>
<head>
   <title>User Login</title> 
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="Student/style.css"/>
</head>
<body style="background: -webkit-linear-gradient(left, green, white, #1aa3ff);">
  <div style="background:  height: 100%;
">
  
<div class="container" style=" width: 90%; background-color:#3e4144;  margin: 30px auto; ">
   
<?php
 include 'inc/db.php'; 
session_start();
include 'header.php';
if (isset($_POST['login'])) {
  $username =$_POST['username'];
$password =$_POST['password'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
 
$row = mysqli_fetch_array($sql);
 

if($row['password'] == $password){
$_SESSION['username'] = $row['username'];

$_SESSION['role'] = $row['role'];

$role = $_SESSION['role'];

if ($role == 'Student') {
 header('location: Student/index.php');
}elseif ($role == 'Admin') {
  header('location: admin/admindashboard.php');
}elseif ($role == 'Department' || $role == 'Faculty' || $role == 'Laboratory' || $role == 'Library' || $role == 'Security' || $role == 'Bursary' || $role == 'Sport') {
    header('location: Staff/staffdashboard.php');
}
}else{
    echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Wrong Username/Password combination</h3><br/>
                  <p class='link'><a href='index.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
  

}

 }else{
?>


    <form id="form_login" class="form form-responsive" method="POST" name="login" style="margin-top: 200px; opacity: 0.8; width: 400px;">
        <h1 class="login-title" style="font-family: tahoma;">User Login</h1>
        <input required="" type="text" class="login-input" name="username" placeholder="User ID" autofocus="true"/>
        <input required="" type="password" class="login-input" name="password" placeholder="Password"/>
        
        <input type="submit" value="Login" name="login" class="login-button"/>
       

</p>
  </form>
  <p style="text-align: center; color: white; font-size: 18px; ">Are you a student? please kindly <a style="background: green; border: 1px solid white; border-radius: 3px; color: white; text-decoration none;" href="Student/studentregistration.php" class="btn btn-primary">Click here</a> to register before you proceed with the clearance procedure. Thank you.
  </p>



</div>
</div>
<div style="margin: 0px auto; width: 20%;">
<img src="logofuw.png" class="image-responsive" width="300" hight="300">
</div>




<?php } ?>



<?php include 'footer.php';?>
</body>
</html>
