<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'Include/header.php';

	//include '../inc/db.php';


	?>
	
	<style type="text/css">
		<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		h1{
			text-align: center;
		}
		#top_header{
			display: block;
			background: -webkit-linear-gradient(left, white , green);
			height: 100px;
		}
		#a{
			font-family: tahoma;
			font-weight: bold;
        	font-size: 17px;

		}
		img{
			margin-top: 17px;
		}
		
		
	</style>
</head>
<body>
	
	<header style="position: fixed; top: 0; width: 100%;">
		<div id="top_header">
					<img src="../logofuw.png" class="image-responsive" width="250" hight="250">
			

			

			
		
	</div>

	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: green;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	 </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="a" class="active"><a href="staffdashboard.php">Home</a></li>
        <li id="a"><a href="clearstudents.php">Clear Students</a></li>
        <li id="a"><a href="viewreport.php">View Complains</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li id="a"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
	</nav>
	</header>

<?php include 'footer.php';?>
</body>
</html>