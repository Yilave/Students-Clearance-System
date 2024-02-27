<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: #3e4144;">

<?php include 'Include/header.php';?>
<?php include '../inc/db.php';
session_start();
$matno = $_SESSION['username'];
if(isset($_POST['submit'])){
   date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");
$sql = $con->query("SELECT * FROM form WHERE matno = '$matno'");
$all = mysqli_num_rows($sql);
if($all > 0){
 echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Already Applied</h3><br/>
                  <p class='link'><a href='clearanceform.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
//exit();
}
$add = $con->query("INSERT INTO form (matno, Department, Faculty, library, laboratory, sport, bursary, security, create_datetime) VALUES ('$matno', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '$create_datetime')");

if($add){
 echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Applied Successfully</h3><br/>
                  <p class='link'><a href='clearanceform.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
}
}else{
?>



  <?php include 'Includes/header.php';?>
  

  <fieldset id="photo" class="table table-responsive" style="margin-top: 200px;">
    <form class="form" action="" method="POST">
            
  <strong style='color: #3e4144;'><?php if(isset($msg)){ echo $msg;} ?></strong> 

        <h1 class="login-title">Click to apply for clearance</h1>
      
        <input type="submit" value="Apply" name="submit" class="login-button"/>
      </form>
    </fieldset>

    
  



    


<?php } ?>










    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
