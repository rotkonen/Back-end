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
<h3>Shows both time and date!</h3>
 <?php
  date_default_timezone_set("Europe/Helsinki");
  setlocale(LC_TIME, 'Swedish_Finland');  

  echo strftime(" Time: %H.%M<br>");
  echo strftime(" Today is: %d. %B %Y<br>");
  echo strftime(" Day of the week on Swedish: %A <br>");
  echo strftime(" Current week number: %V <br><br>");
  
 ?>
<h3>Date calculator!</h3>
    <form action="dateCounter.php" method="get">
    Second: <input type="text" name="second" placeholder="Value between 00-59"><br>
    Minute: <input type="text" name="minute" placeholder="Value between 00-59"><br>
    Hour: <input type="text" name="hour" placeholder="Value between 00-24"><br>
    Day: <input type="text" name="day" placeholder="Value between 01-31"><br>
    Month: <input type="text" name="month" placeholder="Value between 01-12"><br>
    Year: <input type="text" name="year" placeholder="Value between 1000-2500"><br><br>
    <input type="submit" name="send" value="Count" >
    </form> 
</article>
</section>








</body>
</html>