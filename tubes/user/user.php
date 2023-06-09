<?php

require('../functions.php');
if(empty($_SESSION)) {
  header('Location: ../'); exit;
}
if($_SESSION['level'] != 'user'){
  header("Location: ../admin/admin.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tribun Unpas</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          <p>
            Dasboard
        </div>
      </section>
    </div>

    
    <!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    </body>
</html>
<style>
    body{
	
    font-family: 'Quicksand', sans-serif;
}

.wrapper{
	width: 100%;
	height: 100%;
}
.navbar{
	margin-bottom: 0;
}
.sidebar{
	width: 100%;
	height: 100%;
	background: #293949;
	position: absolute;
	z-index: 100;
}
ul{
	padding: 0;
	margin-left: -40px;
}
ul li{
	list-style: none;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5); 
}
ul li a{
	text-decoration: none;
	color: #aeb2b7;
	display: block;
	padding: 19px 0px 18px 25px;
	transition: all 200ms ease-in;
}
ul li a:hover{
	text-decoration: none;
	color: #1abc9c;
}
ul li a:visited{
	text-decoration: none;
	color: #fff;
}
li li a span{
	display: inline-block;
}
ul ul{
	display: none;
	margin:0px;
}
ul li a .fa-angle-down{
	margin-right: 10px;
}
/*apabila lebar min 768px*/
@media(min-width: 768px) {
	.sidebar{
		width: 240px;
	}
	.content{
		margin-left: 250px;
	}
	.inner{
		padding: 15px;
	}
}
</style>