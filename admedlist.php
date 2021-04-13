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
    <title>Medicine List</title>
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


<body>

    <div class="header-area">
        <div class="header-top">
            <div class="container">
                <a href="adminprofile.html"><img src="img/admin.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
                <div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="index.html">Logout</a></li>

                    </ul>
                </div>

            </div>
        </div>


    </div>

    <div class="main-area">




        <div class="login">
            <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
                <h2>Admin Panel - Medicine List</h2>

                <br>
                <br>
                <label>User Name</label>

                <br>
                <br>
                <div class="form-group center">
                    <label>Search by First Letter:</label>
                    <br>
                    <select name="sbfl">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>
                </div>
                <br>
                <div class="form-group center">
                    <label>Search by Scientific Name:</label>
                    <br>
                    <select name="sbsn">
                        <option value="Idk">I don't know</option>
                        <option value="abultabul">Abul Tabul</option>
                    </select>
                </div>
                <br>
                <div class="form-group center">
                    <label>Search by Disease:</label>
                    <br>
                    <select name="sbd">
                        <option value="idk">I don't know</option>
                        <option value="cough">Cough</option>
                        <option value="jaudice">Jaundice</option>
                        <option value="aids">AIDS</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-default">Search</button>

                <br>
                <hr>
                <div class="form-group center">
                    <input type="text" placeholder="Search Medicine" class="form-control" id="user" style="width:50%;margin-left: 24%">

                    <button type="submit" class="btn btn-default">Search</button>
                    <br>
                    <label>Table: </label>
                </div>
            </form>

            <br>


        </div>
      










    </div>


</body>

</html>
