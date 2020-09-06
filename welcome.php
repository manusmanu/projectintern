<?php
session_start();
include'dbconnection.php';

if(isset($_POST['save']))
{
    $sql = "INSERT INTO userdata(data) VALUES ('".$_POST["data"]."')";

    $result = mysqli_query($con, $sql);
}
	
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    



<div id="div1" class="container" 
style="position: absolute;
  top: 100px;
  left: 30%;
  text-align: center;
  display: block;
  width: 820px;
  height: 220px;
  outline: none;
  border: none;
  background: none;
  border: 2px solid white;">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>
                <div class="info">
                    <form action="" method="post"> 
                    <h2 class="">Hello <?php echo $_SESSION['name'];?>, Insert into DB</h2>
                    <input 
                          style="width: 500px; padding: 12px 20px;
                          margin: 8px 0;
                          display: inline-block;
                          border: 1px solid #ccc;
                          border-radius: 4px;
                          box-sizing: border-box;" type="text" name="data" placeholder="Enter Here"><br/>
                    <button type="submit" class="btn btn-success btn-lg" name="save">Insert</button></form>
                </div>
            </div>
        </div>


</body>
</html>
<?php 



