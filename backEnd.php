<?php

$servername = "localhost";
$username   = "root";
$password   = "raspberry";
$dbname     = "injection";
$user	= $_POST['user'];
$pwd	= $_POST['password'];

 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: Database Unknown" . $conn->connect_error);
 }

 $sql = "SELECT * FROM Clients WHERE username ='".$user."'  AND password = '".$pwd."'";
 $result= $conn->query($sql);

if($result->num_rows>0){
	if($row = $result->fetch_assoc()){

		$dbusername = $row["username"];
		$dbpassword = $row["password"];
		$dbfirstname = $row["firstname"];

	session_start();

		$_SESSION['sess_user']= $dbusername;
		$_SESSION['firstname']= $dbfirstname;
		$_SESSION['lastname']= $row["lastname"];
		$_SESSION['balance'] = $row["balance"];
		$_SESSION['id'] = $row["id"];
		$_SESSION['ssn'] = $row["ssn"];

//		echo $_SESSION['lastname'];
		//setting header page
		header ("Location: member.php");
}
   }
else{
	echo "Wrong Password or Username. Please Try again";
}
	$conn->close();
?>
