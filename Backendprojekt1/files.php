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


.container {

    width: 0px;
    padding: 0px;
    margin-right:170px;
}
a {
	color: black;
  }
.piccontainer{
    padding: 10px;
}
</style>
<body>

<?php include "navbar.php" ?>

<section>
<article>
<h3>Upload a picture</h3>
<form action="files.php" method="post" enctype="multipart/form-data">
    <p>Choose a picture to upload</p>
    <input type="text" name="newName" placeholder="Rename the picture">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
    <p>The file has to e smaller than 2MB</p>
    
         
</form>

<?php
if(isset($_FILES['fileToUpload'])){
    
$newname = $_POST["newName"];

$target_dir = "uploads/";


$content = scandir($target_dir);

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$filename= $newname.".".$imageFileType;





// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br><br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br><br>";
        $uploadOk = 0;
    }

 // Check if file already exists
 if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br><br>";
    $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.<br><br>";
    $uploadOk = 0;
 }
 // Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br><br>";
    $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br><br>";
 // if everything is ok, try to upload file
 } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $filename )) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br><br>";

    } else {
        echo "Sorry, there was an error uploading your file.<br><br>";
    }
 }
 //($_FILES["fileToUpload"]["tmp_name"], $newname.".".$imageFileType);
}
//($_FILES["fileToUpload"]["tmp_name"], $target_file)
}


?>
<?php
$target_dir = "uploads/";
if(is_dir($target_dir))
{
	$opendirectory = opendir($target_dir);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png') || ($imgFileType == 'gif') || ($imgFileType == 'jpeg'))
		{   
            echo '<div class="piccontainer">';
            echo "<img src='uploads/".$image."' width='200'>";
            echo "<br>".$image;
            echo '</div>';
		}
    }
	
    closedir($opendirectory);
 
}

?>


</article>
</section>



</body>
</html>
