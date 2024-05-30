<h2>Sailors Report</h2><br>

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

$sql = "SELECT * FROM sailors";
$result = $conn->query($sql);
?>
<table border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th>Sailor ID</th>
    <th>Sailor Name</th>
    <th>Rating</th>
    <th>Age</th>
  </tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['sid']; ?> </td>
            <td><?php echo $row['sname']; ?> </td>
            <td><?php echo $row['rating']; ?> </td>
            <td><?php echo $row['age']; ?> </td>
        </tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<a href="MenuSailors.html">Back</a>
