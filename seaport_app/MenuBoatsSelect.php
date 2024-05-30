<h2>Boats Report</h2><br>

<?php
//cara menampilkan databases dengan "show databases"
//cara menggunakan databases "uses port"

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn-> connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM boats";
$result = $conn-> query($sql);
?>
<table border="1" cellspacing="1" cellpadding="1">
  <tr>
	<th>Bid</th>
	<th>Boat Name</th>
	<th>Color</th>
  </tr>
<?php
if ($result->num_rows > 0) {
	while($row = $result-> fetch_assoc()) {
	  ?>
	  <tr>
		  <td><?php echo $row['bid']; ?> </td>
		  <td><?php echo $row['bname']; ?> </td>
		  <td><?php echo $row['color']; ?> </td>
	  </tr>
 <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
<a href="MenuBoats.html">Back</a>