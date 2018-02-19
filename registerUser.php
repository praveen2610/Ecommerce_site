<?php 

include("dbconnect.php"); 



	if(isset($_POST["Name"]))
	{
		$firstname=$_POST["Name"];
		echo "welcome $firstname";
        
		
	}

	if(isset($_POST["LastName"]))
	{	
		$lastname=$_POST["LastName"];
	}
	
	if(isset($_POST["Email"]))
	{
		$email=$_POST["Email"];
	}

	

	if(isset($_POST["Password"]))
	{
		$password=md5($_POST["Password"]);
		
	}
	if(isset($_POST["cpassword"]))
	{
		
		$confirmpassword=md5($_POST["cpassword"]);
		
	}
	
	if (isset($_POST["radiobutton"]))
	{
		$gender=$_POST["radiobutton"];
	}
	if(isset($_POST["street"]))
	{
		$street=$_POST["street"];
		
		
	}
	if(isset($_POST["streetnumber"]))
	{
		$streetnumber=$_POST["streetnumber"];
		
	}
	
	if(isset($_POST["city"]))
	{
		$city=$_POST["city"];
	}
	
	if(isset($_POST["state"]))
	{
		$state=$_POST["state"];
	}
	
	if(isset($_POST["postcode"]))
	{
		$postcode=$_POST["postcode"];
	}
	if(isset($_POST["creditcardnumber"]))
	{
		$creditcardnumber=$_POST["creditcardnumber"];
	}


  $personcon=$conn;
  

  $rows=oci_parse($personcon,"select * FROM USERS where EMAIL='$email'");
	
  oci_execute($rows);
	
  $numrows = oci_fetch_all($rows, $res);
  
  oci_free_statement($rows);
 if($numrows>0)
	{
		echo "email exist";
		
	}
	
	else
	{
	$bbsSQL = "INSERT INTO USERS (FIRSTNAME, LASTNAME, GENDER,EMAIL, PASSWORD, CONFIRMPASSWORD,STREETNAME,STREETNUMBER,CITY,STATE,POSCODE,creditcardnumber) VALUES ('$firstname', '$lastname', '$gender','$email','$password','$confirmpassword','$street','$streetnumber','$city','$state','$postcode','$creditcardnumber')"; 
	$personinfo=oci_parse($personcon,$bbsSQL); 
	oci_execute($personinfo); 
	if($bbsSQL)
{
  
   $to = $email;
   $subject = "Confirmation from macquarie";
   $headers = "From:praveen.mohan@students.mq.edu.au" . "\r\n" .
   $message = "registeration confirmed ";
  
   

   if(@mail($to,$subject,$message,$headers))
   {
		echo "Your Confirmation link Has Been Sent To Your Email Address.";
		/*header("Location:login.html");*/
   }
		else  
         {
			echo "Cannot send Confirmation link to your e-mail address";
		 }
	
	
	oci_free_statement($personinfo);
} 
else
{
	echo"fail insert";
}

    
	}
 
  oci_close($personcon);
  

  
?>






