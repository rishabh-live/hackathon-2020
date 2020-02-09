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

</head>
<body>
<form action="editing.php" method="get">
      <h1>Enter the title of the paragraph</h1>
      <label id="Title">
        <input type="text" name="title" id="formFeild" placeholder="Title" value="<?php echo $characters[$index]["title"]; ?>">
      </label>
      <h1>Enter the text of the paragraph</h1>
      <label id="body">
        <textarea name="body" id="formFeild" placeholder="Content" ><?php echo $characters[$index]["body"]; ?></textarea>
      </label>
      <h1>Enter the categories of the paragraph</h1>
      <label id="cat">
        <input type="text" name="cat" id="formFeild" value="<?php echo $characters[$index]["cat"]; ?>" placeholder="Categorie">
      </label>
      <h1>Enter the tags  of the paragraph</h1>
      <label id="tag">
        <input type="text" name="tag" id="formFeild" value="<?php echo $characters[$index]["tag"]; ?>" placeholder="Tags">
      </label>
      <input type="hidden" value="<?php echo $characters[$index]['id']; ?>" name="id">
      <input type="hidden" value="<?php echo $_REQUEST['index']; ?>" name="index">




      <h1>Choose the image that you wnat to upload</h1>

      Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submit" name="submit">
      </form>

</body>
