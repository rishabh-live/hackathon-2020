<?php 
if(isset($_REQUEST['submit']))
  {
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
$mail->addAddress('noreply.smtnwa@gmail.com', 'SMITSONIAN Administrator'); // Set the recipient of the message.
$mail->Subject = 'RE:'.$_REQUEST['subject'].'(Token No. - '.$id.')'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */
 
// Choose to send either a simple text email...
//$mail->Body = 'This is a plain-text message body'; // Set a plain text body.

// ... or send an email with HTML.
$mail->msgHTML("Name :-".$_REQUEST['name']."<br>Email :- ".$_REQUEST['email']."<br> Message :- ".$_REQUEST['message']."<br>");
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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
     <link rel="icon" href="smit.jpg" type="image/gif">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="contact.css">
  </head>
  <body>
    <form action="./" method="get">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\final_files\index.php">SMITSONIAN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
            <li><a href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\about.html">About</a></li>
              <li><a href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\gallery.html">Gallery</a></li>
              <li><a href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\final_files\php\index.php">Login</a></li>
              <li><a href="pirvacy\privacy.html">Privacy Policy</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container" id=con1>
    <div class="jumbotron">
       <h1> Contact Us</h1>
     </div>
    <!-- form starting -->
   <section class="mb-4">


       <h2 class="h1-responsive font-weight-bold text-center my-4" id="heading">Got Questions?</h2>
       <!--Section description-->
       <p id="p1" class="text-center w-responsive mx-auto mb-5">Please do not hesitate to contact us directly. Our team will come back to you within
           a matter of hours to help you.</p>

       <div class="row">

           <!--Grid column-->
           <div class="col-md-9 mb-md-0 mb-5">
               <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                   <!--Grid row-->
                   <div class="row">

                       <!--Grid column-->
                       <div class="col-md-6">
                           <div class="md-form mb-0">
                             <label for="name" class="">Your name</label>
                               <input type="text" id="name" name="name" placeholder="Enter your name here"class="form-control">
                           </div>
                       </div>
                       <!--Grid column-->

                       <!--Grid column-->
                       <div class="col-md-6">
                           <div class="md-form mb-0">
                             <label for="email" class="">Your email</label>
                               <input type="text" id="email" name="email" placeholder="Enter your Email Id here"class="form-control">
                           </div>
                       </div>
                       <!--Grid column-->

                   </div>
                   <!--Grid row-->

                   <!--Grid row-->
                   <div class="row">
                       <div class="col-md-12">
                           <div class="md-form mb-0">
                             <label for="subject" class="">Subject</label>
                               <input type="text" id="subject" name="subject" class="form-control">
                           </div>
                       </div>
                   </div>
                   <!--Grid row-->

                   <!--Grid row-->
                   <div class="row">

                       <!--Grid column-->
                       <div class="col-md-12">

                           <div class="md-form">
                             <label for="message">Your message</label>
                               <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                           </div>

                       </div>
                   </div>
                   <!--Grid row-->

               </form>

               <div class="text-center text-md-left">
                   <button type="submit" class="btn btn-primary" name="submit">Send</a>
               </div>
               <div class="status"></div>
           </div>
       </div>
       </div>

   </section>
   <!--Section: Contact v.2-->
  <!-- <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label> -->

  </form>
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>

            <p class="text">We  are  SMITSONIAN  from  SIKKIM  MANIPAL  INSTITUTE  OF  TECHNOLOGY (SMIT).We keep you updated with all the latest news about topics ranging from events to academics and everything in between.
  Read one and explore more about our glorious institution.
  </p>
        </div>

          <div class="col-xs-6 col-md-3">
            <!-- <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">C</a></li>
              <li><a href="#">UI Design</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Java</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">Templates</a></li>
            </ul> -->
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\about.html">About Us</a></li>
              <li><a href="http://localhost\D-CoderS_Hackathon_Template\Application%20Code\contact.html">Contact Us</a></li>

              <li><a href="#">Privacy Policy</a></li>

            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
         <a href="http://localhost/Hackathon/Homepage/index.php">SMITSONIAN</a>.
            </p>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/SMIT.SMU/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/smitmanipal?lang=en"><i class="fa fa-twitter"></i></a></li>
              <li><a class="youtube" href="https://www.youtube.com/channel/UCJt2l2_s6hfKE6tzEPPbuCw"><i class="fa fa-youtube"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/school/sikkim-manipal-institute-of-technology-smit-/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
  </footer>
</form>
  </body>
</html>
