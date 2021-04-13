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
    <title>Admin Ambulance List</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

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
                        <li><a href="adminhome.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>

                    </ul>
                </div>

            </div>
        </div>


    </div>

    <div class="main-area">




        <div class="login">
            <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
                <h2>Admin Panel - Ambulance List</h2>

                <br>
                <br>
                <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr style="padding-left: 10px;">
                        <th style="border:1px solid black">Ambulance ID</th>
                        <th style="border:1px solid black">Hospital Name</th>
                        <th style="border:1px solid black">Hospital Address</th>
                        <th style="border:1px solid black">Region</th>
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

                        $resul = mysqli_query($con,"SELECT * FROM ambulance;") or die("Failed to fetch".mysql_error());
                    
                    while( $row = mysqli_fetch_assoc( $resul) ){
                                    echo "<tr><td>{$row['id']}</td><td>{$row['hospitalName']}</td><td>{$row['hospitalAddress']}</td><td>{$row['amRegion']}</td></tr>\n";
                                        }
                    ?>
                  </tbody>
                </table>
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
