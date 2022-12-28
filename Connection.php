<?php 
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Email = $_POST['Email'];

	// $conn = new mysqli('localhost:3307','root','','connection');
	// if ($conn->connect_error) {
	// 	die('connection failed' : $conn->connect_error);
	// }else{
	// 	$stmt = $conn->prepare("insert into registration(Username,Email,Password) values(?,?,?)");
	// 	$stmt->bind_param("sss",$Username,$Email,$Password);
	// 	$stmt->execute();
	// 	echo "registration Successfully";
	// 	$stmt->close();
	// 	$conn->close();
	// }

	$conn = mysqli_connect('localhost','root','','connetion');
	if (!$conn) {
		die('connection failed' : $conn->connect_error);
	}else{
		$sql = "INSERT INTO registration (Username,Password,Email) VALUES ($Username,$Password,$Email)";
		$result = mysql_query($conn,$sql);
		echo "registration Successfully";
		
	}
?>