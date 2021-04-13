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
	<title>Browse Medicine</title>
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
                
                <a href="cupanel.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a> <br>
                <label class="text-center" style="margin-left:51%;"></label> 
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="cushome.php">Home</a></li>
						<li><a href="cart/index.php">Cart</a></li>
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
					<h2>Patient's Panel - Browse Medicine</h2>
				</div>
			</div>
            
			
                </div>
                
            
            
            <br>
 
		<div class="result_table" style="margin-left: 2%;text-align: center">
            <form  method="post" action="browsemdcn.php">
                    <input class="search" style="width:250px;height:35px;background:transparent;border:1px solid black;" type="text" name="search" placeholder="Search..">
                    <input type="submit" style="background:#56CDF0;border:1px solid #56CDF0;padding:6px 20px;border-radius:5px;" value="Search">
                </form>
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

                    // Selecting the database to use
                    mysqli_select_db($con,'medicineguide.sql');
                    
                     $result = mysqli_query($con,"SELECT * FROM medicine;") or die("Failed to fetch".mysql_error());
                         
                         if( mysqli_num_rows( $result)==0 ){
                         $result1 = mysqli_query($con,"SELECT * FROM medicine where price='".$str1."';") or die("Failed to fetch".mysql_error()); 
                            if( mysqli_num_rows( $result1)==0 ){
                                echo '<tr><td colspan="5">No Rows Returned</td></tr>';
                            }
                            
                            else{
                                while( $row = mysqli_fetch_assoc( $result1) ){
                                    echo "<tr><td>{$row['price']}</td><td>{$row['medId']}</td><td>{$row['medName']}</td><td>{$row['scientificName']}</td><td>{$row['diseaseCategory']}</td></tr>\n";
                            }
                            }
                         }
                    else{
                    while( $row = mysqli_fetch_assoc( $result) ){
                        echo "<tr><td>{$row['price']}</td><td>{$row['medId']}</td><td>{$row['medName']}</td><td>{$row['scientificName']}</td><td>{$row['diseaseCategory']}</td></tr>\n";
                            }
                        }
                     } 
        ?>
                
                </tbody>
            </table>
		
		<br>
		

            <a href="cart.php" style="background: #5CB85C;padding: 10px;">Checkout</a>
		
		</div>
		</div>
			
			
		
    
		

		
		
		
		
		
		
		
		
		
		
		
	
	
	
</body>
</html>