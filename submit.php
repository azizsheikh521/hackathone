<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO markerinfo(panorma_id,pov_head,pov_pitch,latlong)
VALUES('$_POST[id]','$_POST[head]','$_POST[pitch]','$_POST[position]')
";
$sql1 = "INSERT INTO info (title, info)
VALUES ('$_POST[title]','$_POST[info]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.html");

?>
