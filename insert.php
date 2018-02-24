<?php include 'connect.php'; ?>

<?php 

	if(isset($_POST['submit']))
		{
			$fname = $_POST['fname'];
			$lanme = $_POST['lname'];
			$username = $_POST['uid'];
			$password = $_POST['pwd'];
			$email = $_POST['email'];
		}

		
		mysqli_query($conn, "INSERT INTO user (username, password, email, fname, lname) VALUES ('$username', '$password','$email', '$fname', '$fname')");

 ?>