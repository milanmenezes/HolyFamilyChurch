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
    <table class="table table-striped table-bordered table-hover"><thead><tr><th>Song Number</th><th>Song Name</th><th>Category</th></tr></thead>
  <?php

$servername = "sql6.freesqldatabase.com";
$username = "sql6126749";
$password = "QRQv9JZwSJ";
$dbname = "sql6126749";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT indexno, snum, sname, cat FROM fulls";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $indexno=$row["indexno"];
        echo '<tr><td>'.$row["snum"].'</td><td><a href="song.php?indexno='.$indexno.'">'.$row["sname"].'</a>'.'</td><td>'.$row["cat"].'</td></tr>';   
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>

  </body>
</html>