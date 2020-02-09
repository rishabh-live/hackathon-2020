<?php

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];





	if ($username == "admin") {
		# code...
		if ($password == "corona") {
			# code...
			echo "Hello Admin";
			session_start();
			$_SESSION["username"] = $username;
			header("Location: http://localhost/final_files/php/panel");


		}

		else{
			 echo "Wrong Auth.";
			header("Location: http://localhost/final_files/php");
		}
	}

	else if ($username == "darkweb") {
		# code...
		echo "YOU WERE NOT SUPPOSED TO TYPE THIS HERE";
	}
	else
	{
		echo "USr Wrong Auth.";
		header("Location: http://localhost/final_files/php");

	}





?>
