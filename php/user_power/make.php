<!DOCTYPE html>
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



  <link href="delete/style.css" rel="stylesheet">
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
        <a class="navbar-brand" href="http://localhost/hackathon-2020/index.php">SMITSONIAN</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
          <li><a href="http://localhost/hackathon-2020/about.php">About</a></li>
          <li><a href="http://localhost/hackathon-2020/contactUs/index.php">Contact</a></li>
          <li><a href="http://localhost/hackathon-2020/gallery.html">Gallery</a></li>
          <li><a href="http://localhost/hackathon-2020/php/index.php">Login</a></li>
          <li><a href="http://localhost/hackathon-2020/privacy/privacy.html">Privacy Policy</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<div class="box">
  <img src="images.png" alt="">

</div>

<div class="container">
    <form action="making.php" method="get">

      <h3>Enter the title of the paragraph</h3>
      <label id="Title">
        <input type="text" name="title" id="formFeild" placeholder="Title" style="width:350px;">
      </label>
      <h3>Enter the text of the paragraph(word limit:2000)</h3>
      <label id="body">
        <textarea name="body" id="formFeild" placeholder="Content" style="width:350px; height:350px"> </textarea>
      </label>
      <h3>Enter the categories of the paragraph</h3>
      <label id="cat">
        <input type="text" name="cat" id="formFeild" placeholder="Categories" style="width:350px;">
      </label>
      <h3>Enter the tags  of the paragraph</h3>
      <label id="tag">
        <input type="text" name="tag" id="formFeild" placeholder="Tags" style="width:350px;">
      </label>


      <h3>Choose the image that you wnat to upload</h3>

    <h3>  Select image to upload: </h3>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <center>
    <input type="submit" value="SUBMIT" name="submit" style="width:200px">
    <br><br>
    <center>
      </form>
</div>
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
                  <li><a href="#">Ran</a></li>
                  <li><a href="#">out</a></li>
                  <li><a href="#">of</a></li>
                  <li><a href="#">time</a></li>
                  <li><a href="#">timed</a></li>
                  <li><a href="#">out</a></li>
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
