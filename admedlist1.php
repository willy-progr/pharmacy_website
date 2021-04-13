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
	<title>List of Medicines</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>


<body class="brwsmdcn">
    
<div class="header-area"> 
		<div class="header-top"> 
			<div class="container">
                
                <a href="#"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a> <br>
                <label class="text-center" style="margin-left:51%;"></label> 
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="adminhome.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		
		<div class=""> 
		<div class="br"> 
			<div class="br-top text-center"> 
				<div class="container"> 
					<h2>Admin's Panel - Browse Medicine</h2>
				</div>
			</div>
            
			
                </div>
                
            
            
            <br>
 

            <?php
            
                        
    ?>
    
		
		<div class="result_table" style="margin-left: 2%;text-align: center">
            <br>
            <br>
            
            
            
           
            
            
            
            
            
            
            <br>
            <br>
            <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Name</th>
                        <th style="border:1px solid black">Scientefic Name</th>
                        <th style="border:1px solid black">Disease Category</th>
                        <th style="border:1px solid black">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","");
                        
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }
                    mysqli_select_db($con,'medicineguide.sql');

                        $resul = mysqli_query($con,"SELECT * FROM medicine;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['medName']}</td><td>{$row['scienteficName']}</td><td>{$row['diseaseCategory']}</td><td>{$row['price']}</td></tr>\n";
                                        }
            
                        
                           
                        
                        
                ?>
                
                </tbody>
            </table>
		
		<br>
		
<!--		<button type="submit" class="btn btn-success">Checkout</button>-->
		
		</div>
		</div>
			
			
		
    
		
<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
-->
		
		
		
		
		
		
		
		
		
		
		
	
	
	
</body>
</html>