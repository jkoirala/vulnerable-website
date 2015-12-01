<?php
 session_start();
 if(!isset($_SESSION["sess_user"])){
	header("location:index.html");
} else {
	$servername = "localhost";
	$username =   "root";
	$password =   "raspberry";
	$dbname =     "injection";
	$com =	      $_GET['comment'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO comments(message) VALUES ('".$com."')";
//	echo "Hello";

	if ($conn->query($sql) === TRUE) {
    		echo "Congratulation! New Comment created successfully!"."<br>";
		echo "Click here to see all the comments"." "."<button>"."<a style = text-decoration : none href = savedComments.php>"."View"."</a>"."</button>"."<br>";
		echo "<button>"."<a href = member.php>"."GO BACK"."</a>"."</button>";
	} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<button>"."<a href = member.php>"."GO BACK"."</a>"."</button>";

	}

   $conn->close();
}

?>
