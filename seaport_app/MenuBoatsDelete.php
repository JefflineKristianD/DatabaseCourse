<!DOCTYPE html>
<html>
<body>

<h2>Delete Boat</h2><br>

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
    $_bid = $_POST['_bid'];

    $sql = "DELETE FROM Boats WHERE bid = '$_bid'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="">
    <label for="_bid">Boat ID to Delete:</label><br>
	
    <input type="text" id="_bid" name="_bid" required><br><br>
    <input type="submit" value="Delete">
</form>
<br><br>
<a href="MenuBoats.html">Back</a>
</body>
</html>
