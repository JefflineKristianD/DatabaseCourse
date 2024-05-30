<h2>Reserves Report</h2><br>

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

$sql = "SELECT * FROM reserves";
$result = $conn->query($sql);
?>
<table border="1" cellspacing="1" cellpadding="1">
    <tr>
        <th>Boat ID</th>
        <th>Sailor ID</th>
        <th>Days</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>       
                <td><?php echo $row['bid']; ?> </td>
                <td><?php echo $row['sid']; ?> </td>
                <td><?php echo $row['days']; ?> </td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</table>
<a href="MenuReserves.html">Back</a>

<?php
$conn->close();
?>
