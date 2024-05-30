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
    $_bid = $_POST['_bid'];
    $_bname = $_POST['_bname'];
    $_color = $_POST['_color'];

    $sql = "UPDATE Boats SET bname = '$_bname', color = '$_color' WHERE bid = '$_bid'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<br><br>
<a href="MenuBoats.html">Back</a>

</body>
</html>
