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

// Collect data from the form
$sid = $_POST['sid'];
$bid = $_POST['bid'];
$days = $_POST['days'];
$new_sid = $_POST['new_sid'];
$new_bid = $_POST['new_bid'];
$new_days = $_POST['new_days'];

// Update query
$sql = "UPDATE reserves SET sid = '$new_sid', bid = '$new_bid', days = '$new_days' WHERE sid = '$sid' AND bid = '$bid' AND days = '$days'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="MenuReserves.html">Back</a>

</body>
</html>
