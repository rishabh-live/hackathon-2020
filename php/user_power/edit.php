<?php
$characters=json_decode(file_get_contents("art.json"),true);
$size=sizeof($characters);
?>

<html>
<head>
</head>
<body>
  <h1>Select the page that you want to edit</h1>

  <?php
    for($i=0;$i<$size;$i++){ ?>
      <h1> The <?php echo $i; ?> article has the id  <?php echo $characters[$i]["id"]; ?> and the title <?php echo $characters[$i]["title"]; ?><a href="./editing.php?id=<?php echo $characters[$i]["id"];?>&index=<?php echo $i;?>">Edit</a><br>
    <?php }?>

    <form action="editing.php" method="get">
          <h1>Enter the title of the paragraph</h1>
          <label id="id">
        <input type="text" name="id" id="formFeild" placeholder="id">
    </label>
  </form>

</body>
</html>
