<?php
    $title=$_REQUEST['title'];
    $body=$_REQUEST['body'];
    $tag=$_REQUEST['tag'];
    $category=$_REQUEST['cat'];
    $image=$_REQUEST['fileToUpload'];


    date_default_timezone_set('Asia/Kolkata');

    $date=date("d-M-Y");
    $time=  date("h:i:s");

    $characters=json_decode(file_get_contents("art.json"),true);
    $id = uniqid();

  $answer=array("id"=>$id,"title"=>$title,"body"=>$body,"tag"=>$tag,"cat"=>$category,"date"=>$date,"time"=>$time,"author"=>"ADMIN","picture"=>$image);
//    $answer.=$date;
  //  $answer.=$time;

    $characters[]=$answer;

    $nano=json_encode($characters);


    file_put_contents("art.json",$nano);


    ?>
    <html> <body> <h1>SUCCESS</h1>

    <?php

        header("Location: http://localhost/final_files/php/panel");
    ?>
    </body></html>
