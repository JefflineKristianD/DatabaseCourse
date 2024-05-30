<h2>Boats Input Form</h2><br>

<?php
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

$_bid = $_POST['_bid'];
$_bname = $_POST['_bname'];
$_color = $_POST['_color'];
$sql = "INSERT INTO Boats SET bid='$_bid', bname='$_bname', color='$_color'";

if($conn-> query($sql) === TRUE){
	echo "New record created successfully";
} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br><br>
<a href="MenuBoats.html">Back</a>