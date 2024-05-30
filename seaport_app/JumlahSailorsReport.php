<!DOCTYPE html>
<html>

<head>
    <title>Jumlah Sailors Report</title>
</head>

<body>

    <h2>Jumlah Sailors Report</h2>

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

// Query to get the total number of sailors
$sql = "SELECT COUNT(*) as totalSailors FROM sailors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalSailors = $row['totalSailors'];
    echo "Total Sailors: " . $totalSailors;
} else {
    echo "No sailors found.";
}

$conn->close();
?>


    <br><br>
    <a href="FormAwalMenu.html">Back to Report</a>

</body>

</html>
