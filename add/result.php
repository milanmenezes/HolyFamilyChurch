<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Kannada Christian songs, Holy Family Church, Songs, Kannada Songs, Christian Songs, Milan, Milan Menezes, Kannada Choir, Catholic Songs, Free Songs, Song lyrics, Kannada Christian song lyrics">
    <meta name="description" content="Free Kannada Christian Song Lyrics">
    <meta name="author" content="Milan Menezes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HFC(KC)</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <!-- Latest compiled and minified JavaScript -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

  </head>
  <body>
    <div class="container">
  <h2 class="well">Holy Family Church <small>Kannada Choir</small></h2>
  <div class="row">
  <?php

$servername = "HOSTNAME";
$username = "USER_NAME";
$password = "PASSWORD";
$dbname = "DB_NAME";
$snum = $_POST['snum'];
$sname = $_POST["sname"];
$cat = $_POST["cat"];
$temp = $_POST["temp"];
$scale = $_POST["scale"];
$song = $_POST["song"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "INSERT INTO fulls (snum, sname, cat, temp, scale, song)
VALUES ('$snum', '$sname', '$cat', '$temp', '$scale', '$song')"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
</div>

  </body>
</html>