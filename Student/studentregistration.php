<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: #3e4144;">
<?php
include 'Includes/Disabled.php';
    include '../inc/db.php';
    // Define variables and set to empty values.
    if ((isset($_POST['send']))) {

        
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $target = 'Images/' . $profileImageName;
    
    $role = $_POST['role']; 
    $matno = $_POST['matno'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $session = $_POST['session'];
    $password = $_POST['password'];
    $role1 = $role;
    
    $status = 1;
    $password1 = ($password);

 
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

    
 $sql =  mysqli_query($con, "SELECT * FROM students WHERE matno = '$matno'")or die(mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if($count > 0){
      echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>Student already registered</h3><br/>
                  <p class='link'><a href='studentregistration.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } else{
 
    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        $query    = "INSERT into `students` (role, matno, fullname, gender, phone, email, address, faculty, department, session, create_datetime, profile_image)
                     VALUES ('$role', '$matno', '$fullname','$gender', '$phone', '$email', '$address', '$faculty', '$department', '$session', '$create_datetime', '$profileImageName')";
      
        $result   = mysqli_query($con, $query)or die(mysqli_error($con));

        $sqls    = "INSERT into `users` (username, password, role, create_datetime)
                     VALUES ('$matno', '$password1','$role1', '$create_datetime')";
           }          
        $addUser   = mysqli_query($con, $sqls)or die(mysqli_error($con));
        if ($result and $addUser) {
             echo "<div class='form' style='text-align: center; margin-top: 200px;'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php' class = 'btn btn-primary'>Login</a></p>
    
                  </div>";
    } 

    }    
}else{
        ?>
    <form style="width: 440px; margin-top: 200px;" class="form" action="studentregistration.php" method="POST" enctype="multipart/form-data">
        <h1 class="login-title">Student Registration</h1>
  <strong style='color: white;'><?php if(isset($msg)){ echo $msg;} ?>
        </strong>
        <input type="text" required="" class="login-input" name="matno" placeholder="Matriculation number" required />
        <select required="" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" name="role" style="width: 49%; margin-left: 1px; padding: 11px; border: 1px solid #ccc; border-radius: 0px; background-color: white;">
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <option>Select User Role</option>
            <option value="Student">Student</option>
        </ul>
        </select>
    
        
        <input type="text" required="" class="login-input" name="fullname" placeholder="Full Name">
        <input type="text" required="" class="login-input" name="gender" placeholder="Gender">
        <input type="number" required="" class="login-input" name="phone" placeholder="Contact">
        <input type="email" required="" class="login-input" name="email" placeholder="Email">
        <input type="text" required="" class="login-input" name="address" placeholder="Address">
        <input type="password" required="" class="login-input" name="password" placeholder="Password">

        <input type="text" required="" class="login-input" name="department" placeholder="Department">
        <input type="text" required="" class="login-input" name="session" placeholder="Session">
        <select required=""  class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" name="faculty" style="font-size: 15px; width: 100%; margin-bottom: ; padding: 11px; border: 1px solid #ccc; border-radius: 0px; background-color: white;">
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <option>Select Faculty</option>
            <option value="Pure and Applied Science">Pure and Applied Science</option>
             <li role="presentation" class="divider"></li>
            <option value="Agriculture and Life Science">Agriculture and Life Science</option>
             <li role="presentation" class="divider"></li>
            <option value="Humanities and Social Science">Humanities and Social Science</option>
        </ul>
        </select>
        <fieldset style="border: 2px solid white; margin-top: 10px;">
            <legend style="text-align: center;">Upload a valid photograph of your's</legend>
        

        <div  class="img" style="">  <img src="Images/default.png" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
        <input style="margin-bottom: 7px;" type="file" name="profileImage" onchange="displayImage(this)"  id="profileImage" autofocus="true">
        </fieldset>

        <input type="submit" name="send" value="Register" class="login-button">

        <p class="link" style="margin-top: 3px; color: green; font-size: 17px;" >Already Registered? <a href="../index.php" class="btn btn-primary" style="background: green; color: white; border: 1px solid white; margin-top: 2px;border-radius: 0px; font-size: 17px;">Login Here</a></p>
    </form>
<?php
    }
?>
<script type="text/javascript" src="scripts.js"></script>



 <?php include 'Include/scripts.php';?>
<?php include '../footer.php';?>
</body>
</html>