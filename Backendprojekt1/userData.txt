<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css3.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
    <title>Website</title>


</head>

<style>

div {
    border-radius: 5px;
    padding: 20px;
}
.container {

    width: 0px;
    padding: 0px;
 margin-right:170px;
}
</style>
<body>

<?php include "navbar.php" ?>

<article>
<section>
<h3>Some random data!</h3>
<?php
echo "<br>User: ";
echo $_SERVER["REMOTE_USER"];
echo "<br>Server IP: ";
echo $_SERVER["REMOTE_ADDR"];
echo  "<br>Server Namn: ";
echo $_SERVER["SERVER_NAME"];
echo "<br>APACHE: ";
echo $_SERVER["SERVER_SOFTWARE"];
echo '<br>PHP version: ' . phpversion();


?>
</h4>

</section>
</article>





</body>
</html>