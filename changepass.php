<?php
session_start();
?>

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
    <title>Change Password</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    
</head>


<body class="cusfindphar">

    <div class="header-area">
        <div class="header-top">
            <div class="container">
                <a href="pharprofile.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
                <label class="text-center" style="margin-left:51%;"><?php echo $_SESSION["uname"];?></label> 
                <div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="pharprofile.php">Home</a></li>
<!--                        <li><a href="cart/index.php">Cart</a></li>-->
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </div>

            </div>
        </div>


    </div>

    <div class="main-area">




        <div class="">
            <h2 class="text-center">Change Password</h2>
                <br>
<!--                <label style="margin-left:40px;">User Name<br><?php echo $_SESSION["uname"];?></label>-->

                <br>
            <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                
                <input type="password" name="ups"><br>
                <button type="submit">Change Password</button>
            </form>
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST"){
                 $ups=$_POST["ups"];
                 $conn=mysqli_connect("localhost","root","","medicineguide.sql");
	           if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	           }
	           else
		          //echo "Connected successfully <br>";

	               $sql="UPDATE pharmacylogin SET phPassword='".$ups."' where phUserName='".$_SESSION["uname"]."';";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
	           if($result){
		                  //header("Location:index.php");
                           $message = "Successfully updated!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
	                   }
	                   else
	                   {
                          
                           $message = "Update unsuccessful!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
	                   }
             }
                ?>
                
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
