<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: #3e4144;">
    <?php
    include '../inc/db.php';
    include 'Includes/header.php';
    // Define variables and set to empty values.
  if ((isset($_POST['send']))) {
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $target = 'Images/' . $profileImageName;
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $office = $_POST['office'];
    $password = $_POST['password'];
    $role = $office;
    
      # code...
    ;
     date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

//$password1 = md5($password);
  $sql =  mysqli_query($con, "SELECT * FROM staff WHERE email = '$email'")or die(mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if($count > 0){
      echo "<div id='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Staff already registered</h3><br/>
                  <p class='link'><a href='addstaff.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    }else{ 
    
    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        $query    = "INSERT into `staff` (fullname, phone, email, gender, office, create_datetime, profile_image)
                     VALUES ('$fullname', '$phone', '$email','$gender', '$office', '$create_datetime', '$profileImageName')";
   
        $result   = mysqli_query($con, $query)or die(mysqli_error($con));

        $sqls    = "INSERT into `users` (username, password, role, create_datetime)
                     VALUES ('$email', '$password','$role', '$create_datetime')";
          } 

        $addUser   = mysqli_query($con, $sqls)or die(mysqli_error($con));
        if ($result and $addUser) {
             echo "<div id='form' style='text-align: center; margin-top: 200px;'>
                  <h3 style='color: black;'>Staff registered successfully.</h3>
                 
                 <p style='text-align: center;'> <a href='addstaff.php' class='btn btn-primary'>OK</a></p>

    
                  </div>";


                  
    }
    } 
    }else{


?>
    
<fieldset class="photo" style="margin-top: 200px;">
    <form id="form" action="addstaff.php" method="POST" enctype="multipart/form-data" style="width: 440px">
        <h1 class="login-title">Staff Registration</h1>
        </strong> 
        <input type="text" required="" class="login-input" name="fullname" placeholder="Full Name" required />
        <input type="number" required="" class="login-input" name="phone" placeholder="Contact">
        <input type="text" required="" class="login-input" name="email" placeholder="Email">
        <input type="text" required="" class="login-input" name="gender" placeholder="Gender">
        <select required="" name="office"style="width: 49%; margin-left: 1px; padding: 11px; border: 1px solid #ccc; border-radius: 0px; background-color: white;">>
            <option>Select Office</option>
            <option value="Department">Department</option>
             <li role="presentation" class="divider"></li>
            <option value="Faculty">Faculty</option>
             <li role="presentation" class="divider"></li>
            <option value="Library">Library</option>
             <li role="presentation" class="divider"></li>
             <option value="Laboratory">Laboratory</option>
              <li role="presentation" class="divider"></li>
              <option value="Sport"> Sports Office</option>
               <li role="presentation" class="divider"></li>
               <option value="Bursary">Bursary</option>
                <li role="presentation" class="divider"></li>
                <option value="Security">Security</option>
        </select>
        <input type="password" required="" class="login-input" name="password" placeholder="Password">
         <fieldset style="border: 2px solid white; margin-top: 10px;">
            <legend style="text-align: center;">Upload a valid photograph of your's</legend>
        

       <div  class="img">  <img src="Images/default.png" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
        <input required="" style="margin-bottom: 7px;" type="file" name="profileImage" onchange="displayImage(this)"  id="profileImage" autofocus="true">
        </fieldset>
        <input type="submit" name="send" value="Register" class="login-button">
    </form>

    </fieldset>
<?php } ?>
<script type="text/javascript" src="scripts.js"></script>


<?php include '../footer.php';?>
<?php include 'Include/scripts.php';?>
</body>
</html>