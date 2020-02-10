<?php
error_reporting(0);
    $characters=json_decode(file_get_contents("./php/user_power/art.json"),true);
    $size=sizeof($characters);
  ?>

<!DOCTYPE html>
<html lang="en">

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




<div class="container" id="bookworm">

    <div class="row">
      <div class="col-sm-8">
        <img class="container">
          <img src="https://images.pexels.com/photos/3635300/pexels-photo-3635300.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Homecoming" style="width:100%;" >
          <div class="bottom-left">
          <h2 >The road not taken? </h2>
        </div>
        <div class="bottom-centered" >
            <h4>We have always been saddled with doubts about the paths that we..</h3>
        </div>
      </div>

      <div class="col-sm-4">
          <a class="twitter-timeline" data-width="330" data-height="500" href="https://twitter.com/smitmanipal?ref_src=twsrc%5Etfw">
            Tweets by smitmanipal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

    </div>




<div class="row">

  <?php
  for ($i=$size-1; $i >=$size - 3 ; $i--) {
    # code...

  ?>

  <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="cartle" style="font-size:26px; color:#444; font-weight:bold;"><?php echo $characters[$i]["title"];?></h6>
            <i><p class="cardxt" style="font-size:20px; color:grey;"><?php $in = $characters[$i]["body"];$out =  substr($in,0,50)."..."; echo $out;?></p>
          </i></div>
          <div class="card-footer">
            <a href="./php/user_power/blog.php?id=<?php echo $characters[$i]["id"];?>" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
  </div>


  <?php }?>
</div>


  <div class="row">
    <div class="col-sm-8">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
    <img src="https://images.pexels.com/photos/1407346/pexels-photo-1407346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Chania">
    <div class="carousel-caption">
      <h3>Los Angeles</h3>
      <p>LA is always so much fun!</p>
    </div>
  </div>

  <div class="item">
    <img src="https://images.pexels.com/photos/1407346/pexels-photo-1407346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Chicago">
    <div class="carousel-caption">
      <h3>Chicago</h3>
      <p>Thank you, Chicago!</p>
    </div>
  </div>

  <div class="item">
    <img src="https://images.pexels.com/photos/1407346/pexels-photo-1407346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="New York">
    <div class="carousel-caption">
      <h3>New York</h3>
      <p>We love the Big Apple!</p>
    </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
<div class="col-sm-12 col-lg-4 col-md-12">
  <ul class="list-group" id="list_grp">
    <!-- weather widget start --><div id="m-booked-weather-bl250-63713"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:320px;" id="width2"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="www booked net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>3</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>3&deg;</div> <div class="booked-wzs-day-n">L: 0&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Gangtok </div> <div class="booked-wzs-250-175-date">Saturday, 08 February</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/gangtok-15243"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> <td>Thu</td> <td>Fri</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> </tr> <tr> <td class="week-day-val">-1&deg;</td> <td class="week-day-val"><span class="plus">+</span>1&deg;</td> <td class="week-day-val"><span class="plus">+</span>2&deg;</td> <td class="week-day-val"><span class="plus">+</span>2&deg;</td> <td class="week-day-val"><span class="plus">+</span>4&deg;</td> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-63713'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=15243&type=3&scode=124&ltid=3458&domid=w209&anc_id=63377&cmetric=1&wlangID=1&color=0f1d2b&wwidth=320&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
        </ul>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d731759.1607295158!2d88.38432161102804!3d27.163547666694278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a03ff8b4dd27%3A0xd6341ddd1a7004c7!2sMajitar%2C%20Sikkim!5e0!3m2!1sen!2sin!4v1581172999090!5m2!1sen!2sin" width="335" height="320" frameborder="2" style="border:2;" allowfullscreen=""></iframe>
      </div>
</div>


<div class="row">
    <h1 id="very_special"><center><u><b>LifeStyle</u></b></center></h1>
    <div class="col-sm=4">
      <div class="container">
        <div class="row">

          <?php
          $lifestyle = array();
          $j=0;
            while ($j<=$size) {
              # code...
              for ($i=0; $i <=$size ; $i++) {
                # code...

                if ($characters[$i]["cat"] == "lifestyle") {
                  # code...

                 array_push($lifestyle, $characters[$i]);
              }
              }

              $j++;
            }


            for ($i=sizeof($lifestyle)-1; $i >= sizeof($lifestyle)-3 ; $i--) {
              # code...
              //print_r($lifestyle);


          ?>
              <div class="col-md-4 mb-5">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="cardttke" style="font-size:26px; color:#444; font-weight:bold"><?php echo $lifestyle[$i]["title"]; ?></h6>
                  <i>  <p class="cardtet" style="font-size:20px; color:grey"><?php $in = $lifestyle[$i]["body"];$out =  substr($in,0,50)."..."; echo $out;?></p>
                </i>  </div>
                  <div class="card-footer">
                    <a href="./php/user_power/blog.php?id=<?php echo $lifestyle[$i]["id"];?>" class="btn btn-primary btn-sm">Read More</a>
                  </div>
                </div>
              </div>

           <?php } ?>

            </div>

      </div>
    </div>



    <div class="row">
      <h1 id="very_special">&nbsp;<center><u><b>Sports</u></b></center></h1>
      <div class="col-sm=4">
        <div class="container">
<?php
          $lifestyle = array();
          $j=0;
            while ($j<=$size) {
              # code...
              for ($i=0; $i <=$size ; $i++) {
                # code...

                if ($characters[$i]["cat"] == "sports") {
                  # code...

                 array_push($lifestyle, $characters[$i]);
              }
              }

              $j++;
            }


            for ($i=sizeof($lifestyle)-1; $i >= sizeof($lifestyle)-3 ; $i--) {
              # code...
              //print_r($lifestyle);


          ?>
              <div class="col-md-4 mb-5">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="cardtitlsdf" style="font-size:26px; color:#444; font-weight:bold;"><?php echo $lifestyle[$i]["title"]; ?></h6>
                  <i> <p class="cardtxt" style="font-size:20px; color:grey;"><?php $in = $lifestyle[$i]["body"];$out =  substr($in,0,50)."..."; echo $out;?></p>
              </i>    </div>
                  <div class="card-footer">
                    <a href="./php/user_power/blog.php?id=<?php echo $lifestyle[$i]["id"];?>" class="btn btn-primary btn-sm">Read More</a>
                  </div>
                </div>
              </div>

           <?php } ?>
              </div>

        </div>
      </div>

      <h1 id="very_special">  <center><u><b>Picture of the ....</u></b></center></h1>
          <div class="row">
            <div class="col-sm-3">
              <div class="container">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p><i><h3> Day </h3> </i></p>
            <img src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p><i> <h3>Month </h3></i> </p>
            <img src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
          </div>

        </div>
      </div>





      <div class="row">
        <h1 id="very_special">&nbsp;&nbsp;<center><u><b>Opinion</u></b></center></h1>

          <div class="container">
            <div class="row">
<?php
          $lifestyle = array();
          $j=0;
            while ($j<=$size) {
              # code...
              for ($i=0; $i <=$size ; $i++) {
                # code...

                if ($characters[$i]["cat"] == "opinion") {
                  # code...

                 array_push($lifestyle, $characters[$i]);
              }
              }

              $j++;
            }


            for ($i=sizeof($lifestyle)-1; $i >= sizeof($lifestyle)-3 ; $i--) {
              # code...
              //print_r($lifestyle);


          ?>
              <div class="col-md-4 mb-5">
                <div class="card h-100">
                  <div class="card-body">
                    <h4 class="cacrdTitle" style="font-size:26px; color:#444; font-weight:bold;"><?php echo $lifestyle[$i]["title"]; ?></h4>
                    <i><p class="cardText" style="font-size:20px; color:grey;"><?php $in = $lifestyle[$i]["body"];$out =  substr($in,0,50)."..."; echo $out;?></p>
    </i>              </div>
                  <div class="card-footer">
                    <a href="./php/user_power/blog.php?id=<?php echo $lifestyle[$i]["id"];?>" class="btn btn-primary btn-sm">Read More</a>
                  </div>
                </div>
              </div>

           <?php } ?>

                </div>

          </div>
      </div>





</div>



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
            <li><a href="#">These</a></li>
            <li><a href="#">Arent</a></li>
            <li><a href="#">Working</a></li>
            <li><a href="#">Yet</a></li>
            <li><a href="#">Need</a></li>
            <li><a href="#">Time</a></li>
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
