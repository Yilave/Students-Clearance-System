<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: #3e4144;">


<?php include 'Include/header.php';


$stMatno = $_GET['stuMatno'];

  include '../inc/db.php';

session_start();
$role = $_SESSION['role'];
$user = $_SESSION['username'];
if ((isset($_POST['submit']))) {
        
    
    
    $body = $_POST['body'];
    $msg = "Sent";
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");



    $query    = "INSERT into `reply` (matno, office, body, create_datetime)
                     VALUES ('$stMatno', '$role', '$body', '$create_datetime')";
        $result   = mysqli_query($con, $query)or die(mysqli_error($con));
        if ($result) {
            echo "<div id='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Reply sent successfully</h3><br/>
                  <p class='link'><a href='reply.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    
                
    } 
}else{
        

?>

  <?php include 'Includes/header.php';?>
  

  <fieldset class="photo">

        <form id="form" method="POST" style="margin-top: 200px;">

            <h1 class="login-title">Reply To</h1>
           
            <h3><?php echo $stMatno; ?></h3>
            <strong style='color: #3e4144; margin-bottom: 10px;'><?php if(isset($msg)){ echo $msg;} ?></strong> 
  
    
        <textarea class="report" name="body" required>
                
        </textarea>
        
        <input type="submit" value="Send" name="submit" class="login-button"/>
        </form>
        
       
    </fieldset>

    
  
<?php } ?>


    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>


 