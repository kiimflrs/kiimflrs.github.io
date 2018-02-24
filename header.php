<!--<?php include_once 'connect.php'; 

	if(isset($_POST['sign-up']))
		{
			$fname = $_POST['fname'];
			$lanme = $_POST['lname'];
			$username = $_POST['uid'];
			$password = $_POST['pwd'];
		}

		mysql_query("INSERT INTO 'user' ('username', 'password', 'fname', 'lname') VALUES('$username', '$password', '$fname', '$fname')");

?>-->
<!-- 
<?php 
	
	include_once 'includes/dbh.php';

	if (isset($_POST['login'])) {
		$username = $_POST['uid'];
		$password = $_POST['pwd'];

		if (empty($username) || empty($username)) 
		{
			header("Location: ../header.php?header=fields require");
		}


		else
		{
			$sql = mysqli_query("SELECT * FROM user WHERE 'username' = '$username' AND 'password' = '$password'");
			$count = mysqli_num_rows($sql);

			if ($count == 1) {
				
				session_start();

				$row = mysqli_fetch_array($sql);

			}
		}
	}

 ?> -->



<!DOCTYPE html>
<html>

<head>

	<title>Skimify</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	

</head>

<body>

	<nav class="navbar navbar-inverse">
		
		<div class="container-fluid">
			
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="index.php"><span class="navbar-brand">Skimify</span></a>
				
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				
				<ul class="nav navbar-nav">
					<!-- <li><a href="index">HOME</a></li> -->
					<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre<span class="caret"></span></a>

						<ul class="dropdown-menu">
							<li><a href="pop.php">Pop</a></li>
							<li><a href="rock.php">Rock</a></li>
							<li><a href="rnb.php">R & B</a></li>
							<li><a href="edm.php">EDM</a></li>
						</ul>						
						
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#modal-sign-up"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        			<li><a href="#" data-toggle="modal" data-target="#modal-login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>							
				</ul>

			</div>

		</div>

	</nav>

	<div class="modal fade" id="modal-login">

		<div class="modal-dialog modal-sm">
			
			<div class="modal-content">
				
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Log In</h4>

				</div>

				<div class="modal-body">

					<form id="login-form" class="form-group" action="includes/login.inc.php" method="post">
						
						<input name="uid" class="form-control" type="text" placeholder="Username" autofocus=""></input> </br>
						<input name="pwd" class="form-control" type="password" placeholder="Password"></input>

					
					
				</div>

				 <div class="modal-footer">
				 	
				 	<button type="submit" class="btn btn-default" name="login">Log In</button>

				 	</form>

				 </div>

			</div>

		</div>

	</div>

	<div class="modal fade" id="modal-sign-up">

		<div class="modal-dialog">
			
			<div class="modal-content">

				<div class="modal-header">
					
					<button type="button" onclick="clear()" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sign Up</h4>

				</div>

				<div class="modal-body">

					<form id="sign-up-form" class="form-group" action="includes/signup.inc.php" method="POST">

						<input name="fname" type="text" class="form-control" placeholder="First Name" autofocus=""></input> </br>
						<input name="lname" type="text" class="form-control" placeholder="Last Name"></input> </br>
						<input name="email" type="text" class="form-control" placeholder="Email"></input> </br>
						<input name="uid" type="text" class="form-control" placeholder="Username"></input> </br>
						<input name="pwd" type="password" class="form-control" placeholder="Password"></input> </br>
						<!-- <input name="confirm-pwd" type="password" class="form-control" placeholder="Confirm Password"></input> 
 -->
						<!-- <button onclick="clear()" >Reset</button> -->
						
					
					
				</div>

				<div class="modal-footer">

					<button type="submit" class="btn btn-default" name="submit">Sign Up</button>

					</form>

					
				</div>
				

			</div>

		</div>
		
	</div>

