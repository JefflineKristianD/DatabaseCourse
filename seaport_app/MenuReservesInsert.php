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
    $bid = $_POST['bid'];
    $sid = $_POST['sid'];
    $days = $_POST['days'];

    $sql = "INSERT INTO reserves (bid, sid, days) VALUES ('$bid', '$sid', '$days')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<br><br>
<a href="MenuReserves.html">Back</a>

</body>
</html>
