<?php
	if (isset($_POST["name"])) {
		//Get values
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		//Sending queies
		$query = mail(
			"contact@adeleyeayodeji.com", 
			"New Mail From Adeleye Ayodeji", 
			"Name: ".ucfirst($name)."\n
			Email: ".$email."\n
			Message: ".$message) or die("Could not send mail");
		//Checking if mail send
		if ($query) {
			echo "Mail sent";
		}else{
			echo "Error sending mail";
		}
	}
?>