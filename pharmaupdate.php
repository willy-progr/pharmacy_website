<?php
session_start();
?>
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
                <a href="pharprofile.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="pharprofile.php">Home</a></li>
						<li><a href="#">Cart</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
    
	
	<div class="main-area"> 
		
		
		
		
		<div class=""> 
			<form class="col-md-4 col-sm-offset-4 text-center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                    <label>Update Mobile no.</label><br>
                    <input type="text" name="upmob">
                    <label>Update Address</label><br>
                    <input type="text" name="upadd">
                    <br>
                    <button type="submit">Update</button>
                </form>
			</form> 
			<br>
             <?php
                
                
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $phMobile=$_POST['upmob'];
                    $phAddress=$_POST['upadd'];
                 $conn=mysqli_connect("localhost","root","","medicineguide");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	                   }
	               else
		              //echo "Connected successfully <br>";

	               $sql="UPDATE pharmacy SET phMobile='".$phMobile."', phAddress='".$phAddress."'where pName='".$_SESSION["uname"]."';";
	               $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
	               if($result){
		                  $message = "Updated successfully!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	               }
	               else
	               {
		              $message = "Update not successful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	               }
             }
            ?>
			
		</div>
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>