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
<h3>Answear:</h3>
<?php
  date_default_timezone_set("Europe/Helsinki");
  setlocale(LC_TIME, 'Swedish_Finland');

  $second = $_GET["second"];
  $minute = $_GET["minute"];
  $hour = $_GET["hour"];
  $day = $_GET["day"];
  $month = $_GET["month"];
  $year = $_GET["year"];

  $valid = true;

  $timenow=time();
  $giventime=mktime($hour,$minute,$second,$month,$day,$year);
  

  $date = " $day."."$month."."$year";
  $unixTimestamp = strtotime($date);
  $dayOfWeek = strftime("%A", $unixTimestamp);
  echo strftime(" Time: %H.%M<br>");
  echo strftime(" Today is: %d. %B %Y<br>");
  echo strftime(" Day of the week on Swedish: %A <br>");
  echo strftime(" Current week number: %V <br><br>");
  
  
  
  if (($second >=00)&&( $second <=59)&&($minute >=00)&&( $minute <=59)&&($hour >=00)&&( $hour <=24)&&($day >=01)&&( $day <=31)&&($month >=01)&&( $month <=12)&&( $year >=1000)&&( $year <=2500)&&($giventime>$timenow)) 
  {   
    echo("<p>Time that was inserted:  " .$hour.".".$minute.".".$second."   </p>");
    echo("<p>Date that was inserted:  " .$day.".".$month.".".$year."</p>");
    echo $date. " the day of the week of that date on Swedish is: " . $dayOfWeek. "<p></p>";
    $skillnad=$giventime-$timenow;    
    $dygn=$skillnad/(24*60*60);
    $timmar=$skillnad/3600;
    $minuter=$skillnad/60;
    $sekunder=$skillnad;
    echo("<p>How far from now is the inserted date: ".floor($dygn)." days,  ".floor($timmar)." hours, ".floor($minuter)." minutes, ".floor($sekunder)." seconds.</p>");
    echo("<p>This date is in the future</p>");
  }
  elseif (($second >=00)&&( $second <=59)&&($minute >=00)&&( $minute <=59)&&($hour >=00)&&( $hour <=24)&&($day >=01)&&( $day <=31)&&($month >=01)&&( $month <=12)&&( $year >=1000)&&( $year <=2500)&&($giventime<$timenow))
  { 
    echo("<p>Time that was inserted:  " .$hour.".".$minute.".".$second."   </p>");
    echo("<p>Date that was inserted:  " .$day.".".$month.".".$year."</p>");
    echo $date. " the day of the week of that date on Swedish is: " . $dayOfWeek. "<p></p>";
    echo("This date is in the past</p>");
  }
  else
  {   
      echo("<p>You inserted a wrong input you moron read/check inside the input for the values!!!!!</p>");
      echo '<a href="timeAndDate.php">Go back!</a>';
  }

?>
</section>


</body>
</html>