<?php
 session_start();
 if(!isset($_SESSION["sess_user"])){
	header("location:index.html");
 }
  else {
	 echo "WELCOME ".$_SESSION["firstname"]." ".$_SESSION["lastname"]."<br>";
	 echo "Id: ".$_SESSION["id"]."<br>"."SSN: ".$_SESSION["ssn"]."<br>"."Balance: ".$_SESSION["balance"]."<br>";
       //  echo "Your ID is: ".$row["id"]."<br>"."SSN: ".$row["ssn"]."<br>"."Your Account Balance is: ".$row["balance"]."<br>"."<br>";
	echo "<br>"."<br>";
       //Creating a comment field to put comments
	echo "<form action = yourComments.php method = get>"."Comment: "."<input type = text name = comment>"."<input type = submit>"."</form>";

	echo "<br>"."<br>";

	 echo "<button>"."<a style = text-decoration:none; href = logout.php>"."LOGOUT"."</a>"."</button>";
}
?>
