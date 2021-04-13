<?php
session_start();
$con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'medicineguide.sql');

                        $result = mysqli_query($con,"SELECT deRegion FROM delivery where deName='".$_SESSION["uname"]."' and dePass='".$_SESSION["upass"]."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        $_SESSION["Region"]=$row["deRegion"];
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
	<title>Order Details</title>
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


<body class="login">
    
	<div class="header-area"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center">
            <h2>Delivery Panel - Order Details</h2>
			  <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Order ID</th>
                        <th style="border:1px solid black">Medicine Name</th>
                        <th style="border:1px solid black">Medicine Quantity</th>
                        <th style="border:1px solid black">Medicine Price</th>
                        <th style="border:1px solid black">Total Price</th>
                        <th style="border:1px solid black">Customer Name</th>
                        <th style="border:1px solid black">Customer Mobile</th>
                        <th style="border:1px solid black">Customer Address</th>
                        <th style="border:1px solid black">Customer Region</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }
                    mysqli_select_db($con,'medicineguide.sql');

                        $resul = mysqli_query($con,"SELECT * FROM medicineorder where orderregion='".$_SESSION["Region"]."';") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['orderId']}</td><td>{$row['medicinename']}</td><td>{$row['medquantity']}</td><td>{$row['medprice']}</td><td>{$row['totalprice']}</td><td>{$row['ordercusname']}</td><td>{$row['orderphone']}</td><td>{$row['orderaddress']}</td><td>{$row['orderregion']}</td></tr>\n";
                                        }
                    ?>
                  </tbody>
                </table>
			</form> 
			<br>
			
		
		<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
		-->
		
        </div>
		
        </div>	
		
		
		
		
		
		
	
	
	
</body>
</html>