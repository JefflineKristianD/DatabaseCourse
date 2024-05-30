<!DOCTYPE html>
<html>
<body>

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $rating = $_POST['rating'];
    $age = $_POST['age'];

    $sql = "UPDATE sailors SET sname = '$sname', rating = '$rating', age = '$age' WHERE sid = '$sid'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<br><br>
<a href="MenuSailors.html">Back</a>

</body>
</html>
