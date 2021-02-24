<?php
session_start();

if ( isset( $_SESSION['adminr'] ) ) {
  // Grab user data from the database using the user_id
  // Let them access the "logged in only" pages
} else {
  // Redirect them to the login page
  header("Location: session.php");
}
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


<article>

<section>
<form action="session2.php" method="post">
<h3>Guestbook</h3> 
Username: <input type="text" name="user" size="20"/> <br/><br/>
<label>Write here: <br><textarea cols="34" rows="5" name="msg"></textarea></label><br>
<input type="submit" name="send" value="Post" />
</form>
<?php
if($_POST["send"]) {
  print("Your comment was added to the list!");
  $user = $_POST["user"];
  $text  = $_POST["msg"];
  $old = fopen("guestbook.txt","r+t");
  $old_comments = fread($old, 1024);
  $timestamp = time();

  $write = fopen("guestbook.txt","w+");
  $string = "<b>-".$user."</br>".$text." ".date("G.i.s d-m-Y",$timestamp)."<br><br>".$old_comments."<br>";
  fwrite($write, $string);
  fclose($write);
  fclose($old);

}


$read = fopen("guestbook.txt","r+t ");
echo "<br><br>Comments:<hr>".fread($read, 1024);
fclose($read);

?>

</section>
</article>




</body>
</html>
