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
</br>
  <div>
  <?php

$servername = "mysql.hostinger.in";
$username = "u120839926_milan";
$password = "nightfury";
$dbname = "u120839926_churc";
$indexno = $_GET['indexno'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT snum, sname, cat, scale, temp, song FROM fulls WHERE indexno= '$indexno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo '<div class="row alert alert-success"><strong><center>
                  <div class="col-md-4">Name: ' .$row["sname"] .'</div>
                  <div class="col-md-4"> Scale: '.$row["scale"].'</div>
                  <div class="col-md-4"> Tempo: '.$row["temp"].'</div></center></strong>
                  </div>';
        echo '<div class="alert alert-info"><pre style="background:none; border:0px"><h4><center><strong>'.$row["song"].'</strong><center></center></center></h4></pre></div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>

  </body>
</html>