<?php
$characters=json_decode(file_get_contents("art.json"),true);
$size=sizeof($characters);
?>

<html>
<head>
</head>
<body>
  <h1>Select the page that you want to delete</h1>

  <?php
    for($i=0;$i<$size;$i++){ ?>
      <h1> The <?php echo $i+1; ?> array has the title <?php echo $characters[$i]["id"];?> and the title <?php echo $characters[$i]["title"];?> <a href="deleting.php?id=<?php echo $characters[$i]["id"]; ?>">Delete</a>
    <?php }?>







</body>
</html>
