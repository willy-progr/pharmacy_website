<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Pharmacy Signup</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body class="brwsmdcn">
<div class="header-area" style="background: rgba(58, 186, 201, 0.66);"> 
		<div class="header-top"> 

			<div class="container"> 
			<div class="logo col-md-4"> 
					<h1 style="font-size:24px; color: white; text-decoration: underline white;">HEALTHY LIFE PHARMACY</H1>
				</div>
				<div class="menu col-md-6"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cussignup.php" style="color:white;">Customer SignUp</a></li>

						<li><a href="login.php" style="color:white;">Login</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Pharmacy Name:</label>
				<input type="text" class="form-control" id="user" name="phuname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Email:</label>
				<input type="email" class="form-control" id="email" name="phemail" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="phpass" style="width:50%;margin-left: 24%" required>
                </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" pattern="[0-1]{2}[0-9]{9}" name="phmobile" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="phaddress" style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label for="region" style="font-weight: bold;color: #000000;">Region:</label>
				    <select name="region">
                        <option value="Nairobi">Nairobi</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Machakos">Machakos</option>
                    </select>
			  </div>
                
			  
			  <button type="submit" class="btn btn-default">Sign Up!</button>
                <br>
                <br>
                <a href="index.php">Go back to Login!</a>
			</form> 
			<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $phName=$_POST["phuname"];
	            $phPassword=$_POST["phpass"];
	            $phEmail=$_POST["phemail"];
	            $phMobile=$_POST["phmobile"];
	            $phAddress=$_POST["phaddress"];
                $selected_val = $_POST['region'];  // Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","medicineguide.sql");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	           $sql="insert into pharmacylogin(phUserName,phPassword) values('".$phName."', '".$phPassword."')";
               $sql1="insert into pharmacy(pRegion,phMobile,phAddress,pName,pId) values('".$selected_val."', '".$phMobile."','".$phAddress."', '".$phName."', LAST_INSERT_ID())";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result && $result1){
		                  //header("Location:index.php");
                           $message = "Successfully registered!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>
			
		</div>
		
		<div class="signup col-sm-offset-8 col-md-8"> 
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>