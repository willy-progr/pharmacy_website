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
	<title>HEALTHY LIFE PHARMACY</title>
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


<body class="cus">
	<div class="header-area" style="background: rgba(58, 186, 201, 0.66);"> 
		<div class="header-top"> 
<!--            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Medicine Guide</h1>-->
			<div class="container"> 
            <div class="logo col-md-4"> 
					<h1 style="font-size:24px; color: white; text-decoration: underline white;">HEALTHY LIFE PHARMACY</H1>
				</div>
				<div class="menu col-md-6"> 
					<ul class="list-unstyled list-inline pull-right">
						
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		
		<div class="login"> 
    <!--             <img src="img/drug-icon-2316244_640.png"  height="160" width="160"> <br>-->
            <br>
            <br>
            <br>
            <br>
            <br>
            
			<form class="col-md-4 col-sm-offset-4 text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin: 2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div class="form-group center" >
				<label for="uname" style="font-weight: bold;color: #000000;">Username:</label>
				<input type="text" class="form-control" id="email" name="uname" style="width:50%;margin-left: 24%;" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="upass" style="width:50%;margin-left: 24%" required>
			  </div>
			  
			  
			  
			  <button type="submit" class="btn btn-default" style="font-weight: bold;color: #000000;">Login</button>
			  <br>
			  <br>
			  <label style="font-weight: bold;color: #000000;">Don't have an account?</label>
			  <br>
			  <a href="cussignup.php" style="font-weight: bold;color: blue;">Sign Up !</a>
			  <br>
			</form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {   
                    $_SESSION["uname"]= $_POST["uname"];
                    $_SESSION["upass"]= $_POST["upass"];
                    $username = $_POST["uname"];
                    $password = $_POST["upass"];
                    // Connection to the database

                        $con=mysqli_connect("localhost","root","");
                
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'medicineguide.sql');

                        $result = mysqli_query($con,"SELECT * FROM customerlogin where cuUserName='".$username."' and cuPassword='".$password."';") or die("Failed to Login".mysql_error());
                   
                        $row = mysqli_fetch_array($result);
                        echo(mysqli_num_rows($result));
                        if($row["cuUserName"]==$username && $row["cuPassword"]==$password)
                        {
                            header("Location:cushome.php");
                        }

                        else
                        {
                            
                            $result = mysqli_query($con,"SELECT * FROM pharmacylogin where phUserName='".$username."' and phPassword='".$password."';") or die("Failed to Login".mysql_error());
                            $row = mysqli_fetch_array($result);
                            if($row["phUserName"]==$username && $row["phPassword"]==$password)
                            {
                                  header("Location:pharprofile.php");  
                            }
                            else
                            {
                               $result = mysqli_query($con,"SELECT * FROM admin where aUserName='".$username."' and aPassword='".$password."';") or die("Failed to Login".mysql_error());
                                $row = mysqli_fetch_array($result);
                                if($row["aUserName"]==$username && $row["aPassword"]==$password)
                                {
                                      header("Location:adminhome.php");  
                                }
                                else
                                {
                                    $result = mysqli_query($con,"SELECT * FROM delivery where deName='".$username."' and dePass='".$password."';") or die("Failed to Login".mysql_error());
                                    $row = mysqli_fetch_array($result);
                                    if($row["deName"]==$username && $row["dePass"]==$password)
                                    {
                                        header("Location:deliveryhome.php");  
                                    }
                                     //header("Location:index.php");
                                    $message = "Incorrect username or password! Or no such account exists!";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                }     
                            }
                        }
                }
            ?>
			<br>
			
             
		</div>
		

		
		
		
		
		
		
		
		
		
		
		
	
	
	
</body>
</html>