<?php
	if (isset($_POST["token"]) && !empty($_POST["token"])) {
		//Get values
		$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		$message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
		
		//Check if mail title valid
		if (strpos($name, 'http') !== false) {
		    //If mail is spam
            echo 'Spam Mail Detected';
        }else{
            //If mail is valid
            // multiple recipients (note the commas)
        $to = "contact@adeleyeayodeji.com, ";
       // $to .= "biodunhi@gmail.com, ";
       // $to .= "adeleyeayodeji12345@gmail.com";
        
        // subject
        $subject = "Adeleye Ayodeji - New Message";
        
        // compose message
        $message = "
        <html>
          <head>
            <title>Adeleye Ayodeji - New Message</title>
          </head>
          <body>
            <h2 style='text-align:center;'>You got a new mail from</h2>
            <h3 style='text-align:center;'>".$name."</h3>
            <p>
                Message: ".$message."
            </p>
            <p>
                Email: ".$email."
            </p>
          </body>
        </html>
        ";
        
            // To send HTML mail, the Content-type header must be set
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            
            // send email
            $query = mail($to, $subject, $message, $headers);
            if ($query) {
    			echo "Mail sent";
    		}else{
    			echo "Error sending mail";
    		}
        	
        }
        //If mail valid ends here
        
	}else{
	    echo "Token is required";
	}
	

?>