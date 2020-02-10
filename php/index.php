<?php


	$newotp = 1;
	$status = "true";
	if (isset($_GET['email'])) {
		# code...
		$newotp = rand(100000,999999);
		$myfile = fopen("otp.txt", "w+") or die("Unable to open file!");
		$txt = $newotp;
		fwrite($myfile, $txt);


		//send SMS

		 function send_sms($senderid,$number,$message,$route){
      $message = urlencode($message);
      $api_key = "c96c04a500fda4983a8fcab9bcb845";
      $url = 'https://api.paysify.com/send_sms?api_key='.$api_key.'&sender_id='.$senderid.'&number='.$number.'&message='.$message.'&route='.$route.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
      }

      $send = send_sms("SMTNWA",$_REQUEST['phone'],"Hello Admin.! Your Login OTP is SMIT-".$newotp, 4);
      //EMAIL SEND
      require './PHPMailer/PHPMailerAutoload.php';


    $id = uniqid();
// Edit this path if PHPMailer is in a different location.

$mail = new PHPMailer;
$mail->isSMTP();



$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "noreply.smtnwa@gmail.com"; // Your Gmail address.
$mail->Password = "Corona@123"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('noreply.smtnwa@gmail.com', 'SMITSONIAN AUTOMATED Email Service' ); // Set the sender of the message.
$mail->addAddress($_REQUEST['email'], 'SMITSONIAN Administrator'); // Set the recipient of the message.
$mail->Subject = 'RE: OTP Requested(Request ID. - '.$id.')'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */

// Choose to send either a simple text email...
//$mail->Body = 'This is a plain-text message body'; // Set a plain text body.

// ... or send an email with HTML.
$mail->msgHTML("Hello Admin.! Your Login OTP is SMIT-".$newotp."<br><i><b>Note:</b>This is system generated Email. Please don't reply.</i>");
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body';

// Optional: attach a file
//$mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {
    //echo "Your message was sent successfully!";
  echo "<script>alert('Mail Sent')</script>";
} else {
    //echo "Mailer Error: " . $mail->ErrorInfo;
  echo "<script>alert('Mail not Sent')</script>";
}


	}

	if (isset($_REQUEST['verify'])) {
		# code...
		$myfile = fopen("otp.txt", "r") or die("Unable to open file!");
$otp = fread($myfile,filesize("otp.txt"));
fclose($myfile);

if ($otp == $_REQUEST['verify']) {
	# code...
	header("Location: ./panel");
}
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title>SMIT News APP || ADmin Panel</title>
	<meta name="author" content="Siddhant Kumar, Pratham Modi, Amisha Agarwal">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	<link href="https://fonts.googleapis.com/css?family=Zhi+Mang+Xing&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<!-- Nav BAr Starts -->
	<div class="header">
		<div class="logo">
			<center>
			<label id="logo" style="font-family: 'Zhi Mang Xing', cursive; font-size: 43px;">SMIT News APP</label>
			<br>
			<label id="page" style="font-family: 'Righteous', cursive; font-size: 19px;">ADMIN PANEL</label>
		</center>
		</div>
	</div>

	<!-- Nav Bar Ends-->


	<!-- Content Area Starts-->


	<div class="container">
		<div class="form">
			<center>
				<label>PLease Login To Continue...</label>
				<hr>
				<div class="formFeilds">
					<!--<form action="./login" method="GET">
						<label id="username">
							<input type="text" name="username" id="formFeild" placeholder="UserName">
						</label>

						<label id="password">
							<input type="password" name="password" id="formFeild" placeholder="Password">
						</label>

						<label id="submit">
							<input type="submit" name="submit">
						</label>
					</form>-->
<div class="phoneNo">
	<p>
		<form action="./" method="get">
			<input type="number" name="phone" placeholder="Mobile no."><input type="email" name="email" placeholder="E-Mail"><input type="submit" name="sendSubmit" value="Send OTP">
		</form>
	</p>
</div>
					<div class="otp">
						<form action="./" method="get">
						<label>SMIT-

								<input type="text" name="verify" id="otpBox">

						</label>

						<input type="submit" name="submit" >
						</form>
					</div>


				</div>
			</center>
		</div>
	</div>
<center>
	<label id="currentTime">*
		<?php
		date_default_timezone_set('Asia/Kolkata');
		echo date('d-m-Y H:i');

	?>

	</label>

	<center>
		<div style="width: 60%;">
			<p>
				<label><h4>NOTE:</h4></label>
				<p>
					<i>
			Enter your "MObile No." and "Email ID" above, you will get a unique OTP/password there which you have to enter in the box given above. Once you do that you will be able to add, modify, and delete posts.
			Dont worry if the page refreshes and the password and username info is gone.Just type in the code that you recieved on your phone/email and press submit.

					</i>
				</p>
			</p>
		</div>
	</center>
</center>
</body>
</html>
