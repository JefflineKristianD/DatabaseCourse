<!DOCTYPE html>
<html>

<head>
    <title>Jumlah Boats Report</title>
</head>

<body>

    <h2>Jumlah Boats Report</h2>

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

// Query to get the total number of boats
$sql = "SELECT COUNT(*) as totalBoats FROM boats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalBoats = $row['totalBoats'];
    echo "Total Boats: " . $totalBoats;
} else {
    echo "No boats found.";
}

$conn->close();
?>


    <br><br>
    <a href="FormAwalMenu.html">Back to Report</a>

</body>

</html>
