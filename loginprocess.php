<?php 

	include_once 'connect.php'; 

	if (isset($_POST['login'])) {

		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		$query = mysql_query("SELECT * FROM acctn WHERE 'uid' = '$uid' AND 'pws' = '$pwd'");
		$count = mysql_num_rows($query);

		if ($count == 1) {
			
			session_start();

			$row = mysql_fetch_array($query);
			$session_id = $row['id'];

			$_SESSION['user_id'] = $session_id;
			$_SESSION['user_name'] = $session_name;

			echo "OK";

		}


	}

	else{

		echo "error mo";
	}

	

?>