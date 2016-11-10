<?php 

session_start(); 
require "config.php"; 
session_destroy(); 



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Logout</title>
        <!-- Bootstrap core CSS -->
         <link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">           
    
    
<!--scripts -->    
    <script src="src/js/bootstrap.js"></script>      
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/jquery-1.11.3.min.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">MedEval</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <a href="login.php" class="btn btn-success" role="button">Login</a>
                        <a href="register.php" class="btn btn-info" role="button">Register</a>   
                    </form>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </div>


<div class="container">
    <?php
		echo "<h2>You have successfully logged out. <a href='login.php'> Click here </a> to login!</h2>";
	?>
    <p></p>
        </div> 
    </body>
</html>    