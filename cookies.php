<?php
$user_name = "port";
$user_value = $_SERVER["REMOTE_USER"];
setcookie($user_name, $user_value, time() + (86400 * 30), "/"); 

$visited_name = "lastvisit";
$visited_time = time();
setcookie($visited_name, $visited_time, time() + (86400 * 30), "/");

$first_name="firstvisit";
setcookie($first_name,  time() + (86400 * 30), "/");
?>
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
    <section>
      <article>
        <?php
        if(isset($_COOKIE["port"])) 
        {
            print("Welcome back ".$_COOKIE["port"]."!</p>"); 

            print("Last time you visited: ".date("G.i.s d-m-Y",$_COOKIE["lastvisit"]));

            print("</br></br>Your first visit on this site was: ".date("G.i.s d-m-Y",$_COOKIE["firstvisit"]));

            print("</br></br>Time now: " .date("G.i.s d-m-Y",$visited_time));
        }  
        else {
          print("Cookies where made for you, refresh your browser!");
        }
        ?>
      </article>
    </section>
</body>
</html>