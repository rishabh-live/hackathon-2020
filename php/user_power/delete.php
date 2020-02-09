<?php
$characters=json_decode(file_get_contents("art.json"),true);
$size=sizeof($characters);
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



    <link href="css/style.css" rel="stylesheet">
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
<div class="container">
  <h1>Select the page that you want to delete</h1>
  <table class="table">
    <thead>
    <tr>
        <th>Serial Number</th>
        <th>Id</th>
        <th>Title Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

  <?php for($i=0;$i<$size;$i++){ ?>
  <tr>
    <td> <?php echo $i+1;?> </td>
    <td><?php echo $characters[$i]["id"];?></td>
    <td><?php echo $characters[$i]["title"];?> </td>
    <td><a href="deleting.php?id=<?php echo $characters[$i]["id"]; ?>">Delete</a></td>
</tr>
    <?php }?>
  </tbody>
</table>
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
</html>
