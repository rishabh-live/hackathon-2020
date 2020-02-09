<?php
	session_unset();
	if (isset($_SESSION["username"])) {
		# code...
		header("Location: http://localhost/htdocs/");
	}
else{
	header("Location: http://localhost/htdocs/");	
}
?>
