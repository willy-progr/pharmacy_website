<?php
session_start();
?>
<!DOCTYPE html>
 <html class="no-js"> 
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <style type="text/css">
    html { 
  background: url(images/13.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
    </style>
</head>


<body>
    
	<div class="header-area"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="#"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cushome.php">Home</a></li>
						<li><a href="#">Cart</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
    <?php
                        $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'medicineguide.sql');

                        $result = mysqli_query($con,"SELECT * FROM customer where cuName='".$_SESSION["uname"]."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        $cuname=$row["cuName"];
                        $cumobile=$row["cuMobile"];
                        $cuadd=$row["cuAddress"];
                        $cuemail=$row["cuEmail"];
    ?>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center">
            <h2>Patient's Panel - User Details</h2>
			  <div class="form-group center">
                  <label>Username:</label>
                  <br>
                  <?php echo "<label>".$cuname."</label>";
                  ?>
                  <br>
                  <label>Mobile:</label>
                  <br>
                  <?php echo "<label>".$cumobile."</label>";
                  ?>
                  <br>
                  <label>Address:</label>
                  <br>
                  <?php echo "<label>".$cuadd."</label>";
                  ?>
                  <br>
                  <label>Email:</label>
				<br>
                  <?php echo "<label>".$cuemail."</label>";
                  ?>
                  <br>
			  </div>
                <br>
                <button type="submit" class="btn btn-default">Update Info</button>
                <button type="submit" class="btn btn-default">Change Password</button>
                
			  
			  <br>
			</form> 
			<br>
			
		</div>
		<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
		-->
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>