<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$Username = $_POST['Username'];
	$Password = $_POST['pwd'];
	$Email = $_POST['Email'];

	$conn = mysqli_connect('localhost', 'root', '', 'connection');
	if (!$conn) {
		die('connection failed :' . $conn->connect_error);
	}
	$sql = "INSERT INTO `registration` (`Username`, `Email`, `pwd`) VALUES ('$Username', '$Password', '$Email');";
	$result = mysqli_query($conn, $sql);
	echo '<script type = "text/JavaScript">';
	echo 'alert ("Register Success")';
	echo '</script>';

	mysqli_close($conn);
} 
?>
