<?php

$identity=$_REQUEST['id'];

$flag=false;
$characters=json_decode(file_get_contents("art.json"),true);
$size=sizeof($characters);

$arr_index=array();
$key = "id";
foreach($characters as $key=>$values){
  if($values['id']==$identity){
      $arr_index[]=$key;
}
}
foreach($arr_index as $i){
  unset($characters[$i]);
}

//echo sizeof($characters);

$characters=array_values($characters);
file_put_contents('art.json',json_encode($characters));


?>
<html>
<head>deleting</head>
<body>


   <h1>SUCCESS</h1> <?php
      header("Location: http://localhost/hackathon-2020/php/panel");
    ?>

</body>
</html>
