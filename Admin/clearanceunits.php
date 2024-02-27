<?php include 'Include/header.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style type="text/css">
    .a{
        list-style: none;
        color: white;
        margin: 5px;
        font-weight: bold;
        font-size: 17px;
        text-decoration: none;
    }
    .a:hover{
        color: black;
        text-decoration: none;
    }

</style>
<body style="background-color: #3e4144;">
	<?php include 'Includes/header.php';?>
<div class="alert alert-info" style="margin-top: 200px;">
  <strong style="color: green;">Kindly click on the links below to view the cleared, uncleared and pending clearance status of students in each clearance unit</strong> 
</div>

	<fieldset class="photo">
        <style type="text/css">
            .form{
    margin: 50px auto;
    border-radius: 10px;

}
        </style>
       
              
        <form id="form" style="width: 400px; height: auto;">
        <div class="well" style="">
    <div class="list-group">
        <a class="list-group-item" href="department.php">Department</a></li>
        <a class="list-group-item" href="faculty.php">Faculty</a></li>
        <a class="list-group-item" href="library.php">Library</a></li>
        <a class="list-group-item" href="laboratory.php">Laboratory</a></li>
        <a class="list-group-item" href="sportsoffice.php">Sports Office</a></li>
        <a class="list-group-item" href="bursary.php">Bursary</a></li>
        <a class="list-group-item" href="security.php">Security</a></li>
        </div> 
        </div>
        </form>
        
       
        
			 
    </fieldset>

		
	



    













    <?php include 'Include/scripts.php';?>
    <?php include '../footer.php';?>
</body>
</html>
