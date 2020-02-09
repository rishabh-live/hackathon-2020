<!DOCTYPE html>
<head>
  <h1>This the head</h2>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>WELCOME SIR</h1>
    <form action="making.php" method="get">


      <h1>Enter the title of the paragraph</h1>
      <label id="Title">
        <input type="text" name="title" id="formFeild" placeholder="Title" value="<?php echo "jhfkjh"; ?>">
      </label>
      <h1>Enter the text of the paragraph</h1>
      <label id="body">
        <textarea name="body" id="formFeild" placeholder="Content">Write here </textarea>
      </label>
      <h1>Enter the categories of the paragraph</h1>
      <label id="cat">
        <input type="text" name="cat" id="formFeild" placeholder="Categories">
      </label>
      <h1>Enter the tags  of the paragraph</h1>
      <label id="tag">
        <input type="text" name="tag" id="formFeild" placeholder="Tags">
      </label>
      <input type="submit">

      <h1>Choose the image that you wnat to upload</h1>

      Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submit" name="submit">
      </form>




</body>
