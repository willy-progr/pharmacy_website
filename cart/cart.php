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
	<title>Customer Cart</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../style.css" media="all" />
	<link rel="shortcut icon" href="../img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<script type="text/javascript" src="../js/modernizr.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>

<body class="cushome">
<?php

	if(isset($_POST['submit'])){
		
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0) {
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		
	}

?>

<h1>View cart</h1>
<a href="../cushome.php">Go back to products page</a> <br> <br>
<form method="post" action="index.php?page=cart">
    
	<table>
	    
		<tr>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Items Price</th>
		</tr>
		
		
		
		
		
		
		<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.9;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Customer Name:</label>
				<input type="text" class="form-control" id="user" name="uname" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" pattern="[0-1]{2}[0-9]{9}" name="umobile" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="uaddress" style="width:50%;margin-left: 24%;margin-top:-35px;" required>
			  </div>
			  <div class="form-group center">
				    <label>Region:</label>
                    
                    <select name="region">
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Malibag">Malibag</option>
                    </select>
			  </div>
			  
			  
		
		
		
		
		
		<?php
		
			$sql="SELECT * FROM medicine WHERE medId IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql.=$id.",";
					}
					
					$sql=substr($sql, 0, -1).") ORDER BY medName ASC";
					$query=mysqli_query($con,$sql);
					$totalprice=0;

					
					
					while($row=mysqli_fetch_array($query)){
						$subtotal=$_SESSION['cart'][$row['medId']]['quantity']*$row['price'];
						$totalprice+=$subtotal;
					?>
						<tr>
						    <td><?php echo $row['medName'] ?></td>
						    <td><input type="text" name="quantity[<?php echo $row['medId'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['medId']]['quantity'] ?>" /></td>
						    <td><?php echo $row['price'] ?>$</td>
						    <td><?php echo $_SESSION['cart'][$row['medId']]['quantity']*$row['price'] ?>$</td>
						</tr>
						
					<?php	
					$conn=mysqli_connect("localhost","root","","medicineguide");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
				  
				  //$sql="insert into customerlogin(cuUserName,cuPassword) values('".$cuName."', '".$cuPassword."')";
				  
	
			//$sql2="insert into medicineorder(medicinename) values('".$row['medName']."')";
               //$sql2="insert into medicineorder(medicinename,medquantity,medprice) values('".$_SESSION['cart'][$row['medName']."', '".$_SESSION['cart'][$row['medId']]['quantity']."','".$_SESSION['cart'][$row['price']."')";
              /* $result2= mysqli_query($conn,$sql2)or die(mysqli_error($conn));
	                   if($result2){
		                  
                           $message = "Successfully registered!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           //header("Location:index.php");
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
							
	                   }*/
					   
					   
					   
					   
					   
					   if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $cuName=$_POST["uname"];
	            $cuMobile=$_POST["umobile"];
	            $cuAddress=$_POST["uaddress"];
	            $conn=mysqli_connect("localhost","root","","medicineguide");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
		              //echo "Connected successfully <br>";
	
	      
               $sql1="insert into medicineorder(ordercusname,orderphone,orderaddress,medicinename,medprice,medquantity,orderregion) values('".$cuName."', '".$cuMobile."','".$cuAddress."','".$row['medName']."','".$row['price']."','".$_SESSION['cart'][$row['medId']]['quantity']."', '".$_POST['region']."')";
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	                   if($result1){
		                  
                           //$message = "Successfully registered! hehe";
                            //echo "<script type='text/javascript'>alert('$message');</script>";
                           //header("Location:index.php");
	                   }
	                   else
	                   {
                          
                           $message = "Registration Unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
          
					   
					   }   
					   

					
					?>
					

						
						
					<?php
						
					}
		?>
		
		
					<tr>
					    <td>Total Price: <?php echo $totalprice ?></td>
					</tr>
		
	</table>
	
	
	<br>
	
	
	
	
	
		<button type="submit" onclick="myFunction()" class="btn btn-default">Confirm Order</button>

		<script>
		function myFunction() {
			alert("Congratulations !! Your order has been placed. We will deliver your medice very soon. ");
		}
		</script>
		
                <br>
                
			</form> 
	
			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</form>
<br />


<body>