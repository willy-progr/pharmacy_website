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
	<title>Add Delivery Guy</title>
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
				<a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="adminhome.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            <h2>Admin Panel - Add Delivery Guy</h2>        
			  <div class="form-group center">
				<label for="text">Name:</label>
				<input type="text" class="form-control" id="hospitalName" name="deName" style="width:50%;margin-left: 24%">
			  </div>
			  <div class="form-group">
				<label for="text">Phone:</label>
				<input type="text" class="form-control" id="ambulencephone" name="dePhone" style="width:50%;margin-left: 24%">
			  </div>
                <div class="form-group center">
				    <label for="text">Password:</label>
				    <input type="password" class="form-control" id="hospitalAddress" name="dePass" style="width:50%;margin-left: 24%">
			  </div>
                <div class="form-group center">
				    <label>Region:</label>
                    <br>
                    <select name="Region">
                        <option value="Nairobi">Nairobi</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Machakos">Machakos</option>
                        <option value="kisumu">Kisumu</option>
                    </select>
			  </div>
			  
			  <hr>
			  <button type="submit" class="btn btn-default" style="width: 37%">Add Delivery Guy</button>
			  <br>
            <br>
			  <a href="addelidetails.php">Check Delivery Guy List</a>
			  
			  <br>
			</form>
            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $deName=$_POST["deName"];
	            $dePhone=$_POST["dePhone"];
	            $dePass=$_POST["dePass"];
                $selected_val = $_POST['Region'];  // Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","medicineguide.sql");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	           $sql="insert into delivery(deName,dePass,deMobile,deRegion) values('".$deName."', '".$dePass."', '".$dePhone."', '".$selected_val."');";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
	                   if($result){
		                  //header("Location:index.php");
                           $message = "Successfully registered a delivery guy!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
            }
            ?>
			<br>
			
		</div>
	
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>