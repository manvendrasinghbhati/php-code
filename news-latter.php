<?php
$email1= $_REQUEST['email'];
//echo $email1;
		
if(isset($email1) && $email1=='') {
	
	echo "<b class='red' style='color:red'>Plase Enter Your Email id</b>";
}else {
	$msg_box='';
	/* To send HTML mail, you can set the Content-type header. */
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= 'Cc: man9024@mgail.com' . "\r\n";
	/* additional headers */
	$headers .= 'Customer Newa Latter Email id' . "\r\n";
	$msg=$email1;
	$to="manvendrasinghbhati@gmail.com";
	
	$subject="Add Email id in News Latter";
	//send mag with condation
	if(mail($to,$subject,$msg,$headers))
	{
		$msg_box.= "Your Requset Send!";
		}
		else
		{
			$msg_box.="Plase Try Again!";
		}
	//msg revart on page	
	echo $msg_box."<br/><b>".$email1."</b>";
}

?>
