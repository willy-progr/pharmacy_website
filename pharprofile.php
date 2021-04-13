<?php
session_start();
?>
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
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
    
    
</head>


<body class="login">
    
	<div class="header-area"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="#"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#">Home</a></li>
						
						<li><a href="index.php">Logout</a></li>
						
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

                        $result = mysqli_query($con,"SELECT * FROM pharmacy where pName='".$_SESSION["uname"]."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        $puName=$row["pName"];
                        $phuMobile=$row["phMobile"];
                        $phuAdd=$row["phAddress"];
                        $puRegion=$row["pRegion"];
    ?>
	
	<div class="main-area"> 
		
		
		
		
		<div class=""> 
			<form class="col-md-6 col-sm-offset-3 text-center">
            <h2>Pharmacy Panel Panel - User Details</h2>
			  <div class="form-group center">
                  <label>Username: </label>
                  
                  <?php echo "<label>".$puName."</label>";
                  ?>
                  <br>
                  <label>Mobile: </label>
                 
                  <?php echo "<label>".$phuMobile."</label>";
                  ?>
                  <br>
                  <label>Address: </label>
                 
                  <?php echo "<label>".$phuAdd."</label>";
                  ?>
                  <br>
                  <label>Region: </label>
			
                  <?php echo "<label>".$puRegion."</label>";
                  ?>
                  <br>
			  </div>
                <br>
<!--                <a href="pharmaupdate.php" style="background: #5CB85C;color: white;padding: 10px;">Update Info</a>-->
                <a href="changepass.php">Change Password</a>
                
			  
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