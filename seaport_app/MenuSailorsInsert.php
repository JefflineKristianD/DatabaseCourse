<h2>Sailors Input Form</h2><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_sid = $_POST['_sid'];
$_sname = $_POST['_sname'];
$_rating = $_POST['_rating'];
$_age = $_POST['_age'];

$sql = "INSERT INTO sailors SET sid='$_sid', sname='$_sname', rating='$_rating', age='$_age'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="MenuSailors.html">Back</a>
