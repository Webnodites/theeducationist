<?php


if(isset($_POST["submit"]))
{
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$country=$_POST["country"];
	$email=$_POST["txtEmail"];
	$phone=$_POST["txtMobile"];
	$profile=$_POST["profile"];
	$company=$_POST["company"];
	$industry=$_POST["industry"];
	$interest=$_POST["interest"];
	$msg=$_POST["message"];
	$type=$_POST["radiobtn"];

	// echo($fname);
	// echo($lname);
	// echo($country);
	// echo($email);
	// echo($phone);
	// echo($profile);
	// echo($company);
	// echo($industry);
	// echo($interest);
	// echo($msg);
	// echo($type);
	
	$from = "Volunteer Contact";
	$to="webnodites@gmail.com";
	$webmaster = "info@webnodites.com";
	$sub = "";

	$header = "From:".$from."<".$webmaster.">\n";
	$message = "FirstName :".$fname."\n";
	$message .= "LastName :".$lname."\n";
	$message .= "Country :".$country."\n";
	$message .= "Email :".$email."\n";
	$message .= "Mobile No. :".$phone."\n";
	$message .= "Profile :".$profile."\n";
	$message .= "Company :".$company."\n";
	$message .= "Industry :".$industry."\n";
	$message .= "Area Of Interest :".$interest."\n";
	$message .= "Message :".$msg."\n";
	$message .= "Type :".$type."\n";
   
    

	$sendmail = mail($to,$sub,$message,$header);
	if($sendmail){
		echo "<script>alert('Message Sent Successfully!');
			   </script>";
	}
	else{
	
		echo "<script>
			alert('Something Went Wrong!');  
			</script>";

		}

}


?>