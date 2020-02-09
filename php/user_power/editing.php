<?php
$characters=json_decode(file_get_contents("art.json"),true);
$identity=$_REQUEST['id'];
$size=sizeof($characters);
$index = $_REQUEST['index'];

if (isset($_REQUEST['submit'])) {
  // to updatae code
  $title =$_REQUEST['title'];
  $body = $_REQUEST['body'];

  $index = $_REQUEST['index'];
  $cat = $_REQUEST['cat'];
  $tag = $_REQUEST['tag'];




  //push new contents to the file

  $title=$_REQUEST['title'];
  $body=$_REQUEST['body'];
  $tag=$_REQUEST['tag'];
  $category=$_REQUEST['cat'];
  $id = $_REQUEST['id'];
  $index = $_REQUEST['index'];
 $image=$_REQUEST['fileToUpload'];


  date_default_timezone_set('Asia/Kolkata');

  $date=date("d-M-Y");
  $time=  date("h:i:s");

  $characters=json_decode(file_get_contents("art.json"),true);
  //$id = uniqid();

//$answer=array("id"=>$id,"title"=>$title,"body"=>$body,"tag"=>$tag,"cat"=>$category,"date"=>$date,"time"=>$time,"author"=>"ADMIN","picture"=>$image);

//array_splice($characters,$index,0,$answer);
//    $answer.=$date;
//  $answer.=$time;

//  $characters[]=$answer;

$characters[$index]["title"] = $title;
$characters[$index]["id"] = $id;
$characters[$index]["body"] = $body;
$characters[$index]["tag"] = $tag;
$characters[$index]["cat"] = $category;
$characters[$index]["date"] = $date;
$characters[$index]["time"] = $time;
$characters[$index]["author"] = "ADMIN";
$characters[$index]["picture"] = $image;







  $nano=json_encode($characters);


  file_put_contents("art.json",$nano);

 }


?>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Smitsonian</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



  <link href="editing/style.css" rel="stylesheet">
  <style>
      .box{
      width: 100%;
      height: 250px;
      /* padding-top: 50px; */
      }
      img{
      width: 100%;
      height: 100%;
      }
    </style>


</head>
<body>

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
        <a class="navbar-brand" href="http://localhost/Hackathon/Homepage/index.php">SMITSONIAN</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
          <li><a href="http://localhost/Hackathon/about.html">About</a></li>
          <li><a href="http://localhost/Hackathon/contact.html">Contact</a></li>
          <li><a href="http://localhost/Hackathon/gallery.html">Gallery</a></li>
          <li><a href="php\index.php">Login</a></li>
          <li><a href="pirvacy\privacy.html">Privacy Policy</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<div class="box">
  <img src="images.png" alt="">

</div>

<div class="container">
  <center>
<form action="editing.php" method="get">
      <h3>Edit the title of the paragraph</h3>
      <label id="Title">
        <input type="text" name="title" id="formFeild" placeholder="Title" value="<?php echo $characters[$index]["title"]; ?>">
      </label>
      <h3>Edit the text of the paragraph</h3>
      <label id="body">
        <textarea name="body" id="formFeild" placeholder="Content" style="height:300px; width:400px;" ><?php echo $characters[$index]["body"]; ?></textarea>
      </label>
      <h3>Edit the categories of the paragraph</h3>
      <label id="cat">
        <input type="text" name="cat" id="formFeild" value="<?php echo $characters[$index]["cat"]; ?>" placeholder="Categorie" style="width:300px;" >
      </label>
      <h3>Edit the tags  of the paragraph</h3>
      <label id="tag">
        <input type="text" name="tag" id="formFeild" value="<?php echo $characters[$index]["tag"]; ?>" placeholder="Tags" style="width:300px;">
      </label>
      <input type="hidden" value="<?php echo $characters[$index]['id']; ?>" name="id">
      <input type="hidden" value="<?php echo $_REQUEST['index']; ?>" name="index">

      <center>
    <input type="submit" value="SUBMIT" name="submit" style="width:200px;">
  </center>
      </form>
    </div>
</center>
<br><br>

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
                <h6>Categories</h6>
                <ul class="footer-links">
                  <li><a href="#">C</a></li>
                  <li><a href="#">UI Design</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">Java</a></li>
                  <li><a href="#">Android</a></li>
                  <li><a href="#">Templates</a></li>
                </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Contribute</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </div>
            </div>
            <hr>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
             <a href="#">SMITSONIAN</a>.
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




        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
