<!DOCTYPE html>
<html>

<head>
    <title>Rata-rata Age Sailors Report</title>
</head>

<body>

    <h2>Rata-rata Age Sailors Report</h2>

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

// Query to calculate the average age of sailors
$sql = "SELECT AVG(age) as averageAge FROM sailors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $averageAge = $row['averageAge'];
    echo "Average Age: " . $averageAge;
} else {
    echo "No sailors found.";
}

$conn->close();
?>


    <br><br>
    <a href="FormAwalMenu.html">Back to Report</a>

</body>

</html>
