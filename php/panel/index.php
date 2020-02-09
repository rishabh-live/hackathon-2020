<?php
if (isset($_SESSION["username"])) {
		# code...
		//echo $_SESSION["username"];
		header("Location: http://localhost/final_files/php");

	}
	echo "HEllo ADmin! welcome Back!";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Smitsonian</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



  <link href="css/style.css" rel="stylesheet">



</head>
<body>
	<div class="container">
	<form method="get" action="http://localhost/hackathon-2020/php/user_power/make.php">
    <button type="submit">Make</button>
</form>

<form method="get" action="http://localhost/hackathon-2020/php/user_power/edit.php">
	<button type="submit">Edit</button>
</form>

<form method="get" action="http://localhost/hackathon-2020/php/user_power/delete.php">
	<button type="submit">Delete</button>
</form>


<br>
	<a href="./signout">Sign Out!!</a>

</body>
</html>
