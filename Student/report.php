 <link rel="stylesheet" href="style.css"/>
 <body style="background-color: #3e4144;">
<?php 

include 'Include/header.php';
      include '../inc/db.php';
session_start();
$user = $_SESSION['username'];

if ((isset($_POST['send']))) {
        
   
    $office = $_POST['office'];
    $body = $_POST['body'];
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

    

    $query    = "INSERT into `message` (stuMatno, office, body, create_datetime)
                     VALUES ('$user', '$office', '$body', '$create_datetime')";
        $result   = mysqli_query($con, $query)or die(mysqli_error($con));
        if ($result) {
           echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Complain sent successfully</h3><br/>
                  <p class='link'><a href='report.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    
                
    } 
}else{
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
   
</head>

    <?php include 'Includes/header.php';?>
    

    <fieldset id="photo" style="margin-top: 153px;">
        <div class="alert alert-info" style="text-align: center;">
        <strong style="color: green; ">Please kindly report any problem you have concerning your clearance below. Thank you</strong> 
        </div>

        <form class="form" action="#" method="POST" id="comment_form">
        <h1 class="login-title">Complain</h1>
        <select id="subject" name="office" required="" style="width: 100%; margin-bottom: 25px; padding: 11px; border: 1px solid #ccc; border-radius: 0px; background-color: white;" required>
            <option>Select Unit</option>
            <option value="Department">Department</option>
            <li role="presentation" class="divider"></li>
            <option value="Faculty">Faculty</option>
            <li role="presentation" class="divider"></li>
            <option value="Library">Library</option>
            <li role="presentation" class="divider"></li>
            <option value="Laboratory">Laboratory</option>
            <li role="presentation" class="divider"></li>
            <option value="Sport">Sports Office</option>
            <li role="presentation" class="divider"></li>
            <option value="Bursary">Bursary</option>
            <li role="presentation" class="divider"></li>
            <option value="Security">Security</option>
        </select>
        <textarea id="comment" class="report" name="body" required>
                
        </textarea>
        
      <input type="submit" name="send" value="Submit" class="login-button">
        </form>
        
             
    </fieldset>

        
    
<?php } ?>


    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
