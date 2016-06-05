<?php
#######################################################################
#	PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
session_start();
include 'include/web_link.php';
if(isset($_REQUEST["captcha"])&&$_REQUEST["captcha"]!=""&&$_SESSION["code"]==$_REQUEST["captcha"])
{

$clint_name=$_REQUEST['dtfrm_contact_clint_name'];
$Product_message_enquiry=$_REQUEST['dtfrm_contact_Product_enquiry'];
$add_street_1=$_REQUEST['dtfrm_contact_add_street_1'];
$add_street_2=$_REQUEST['dtfrm_contact_add_street_2'];
$town=$_REQUEST['dtfrm_contact_town'];
$state=$_REQUEST['dtfrm_contact_state'];
$post_code=$_REQUEST['dtfrm_contact_post_code'];
$country=$_REQUEST['dtfrm_contact_country'];
$phone_no=$_REQUEST['dtfrm_contact_phone_no'];
$email_id=$_REQUEST['dtfrm_contact_email_id'];
$message_enquiry=$_REQUEST['dtfrm_contact_message'];
$send_data=$_REQUEST['send_data'];
//$PageLocation =  $_SERVER['HTTP_HOST'].$_POST['_linkfrom'];
//echo "send data";
?>

<?php
if(isset($send_data) && $send_data!='' )
{
	
	if(isset($clint_name) && $clint_name!='' ){
		//echo "$clint_name";
		$SitePath = site_url;
		$Subject   = "Product Enquiry From";
		$TO         = "man9024@gmail.com";
		$Headers    =  "From: ".$clint_name."<".$email_id.">\r\n";
		$Headers   .=  "MIME-Version: 1.0\n" ;
		$Headers   .= "Content-type: text/html; charset=iso-8859-1";
		$Message   = "<table align='center' width='60%' cellpadding='2' cellspacing='2' style='border:1px solid #000000;'>";
		$Message   .= "<tr><td colspan='2'>";
		$Message   .= "<table width='1000' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width='424' height='131' align='left' valign='middle' background='".$SitePath."/images/top_head_bg.gif'><a href='".$SitePath."'><img src='".$SitePath."/images/dilling-logo.jpg' alt='Rotary Drilling Rigs, DTH Hammers, DTH Drilling Rigs' width='386' height='104'   border='0'/></a></td>
        <td width='152' align='left' valign='top' background='".$SitePath."/images/top_head_bg.gif'><img src='".$SitePath."/images/dillingbook.jpg' /></td>
        <td align='right' valign='bottom' background='".$SitePath."/images/top_head_bg.gif' class='top_links'>&nbsp; </td>
      </tr>
    </table>";
		$Message   .= "</td></tr>";
		$Message  .= "<tr><td colspan='2'  align='left' bgcolor='#6DBFE5'>Enquiry form dirlling today</td></tr>";
		$Message  .= "<tr><td bgcolor='#FFCC99'>Name</td><td bgcolor='#FFCC99'>".$clint_name."</td></tr>";
		$Message  .= "<tr><td>Product Information</td><td>".$Product_message_enquiry."</td></tr>";
		$Message  .= "<tr><td bgcolor='#FFCC99'>Address</td><td bgcolor='#FFCC99'>".$add_street_1." ".$add_street_2."</td></tr>";
		$Message  .= "<tr><td>town</td><td>".$town."</td></tr>";
		$Message  .= "<tr><td bgcolor='#FFCC99'>state</td><td bgcolor='#FFCC99'>".$state."</td></tr>";
		$Message  .= "<tr><td bgcolor='#FFCC99'>Country</td><td >".$country."</td></tr>";
		$Message  .= "<tr><td bgcolor='#FFCC99'>phone_noephone</td><td bgcolor='#FFCC99'>".$phone_no."</td></tr>";
		$Message  .= "<tr><td>email_id</td><td>".$email_id."</td></tr>";
		$Message  .= "<tr><td valign='top' bgcolor='#FFCC99'>message_enquiry</td><td  bgcolor='#FFCC99'>".$message_enquiry."</td></tr>";
		$Message  .= "</table>";
	//echo $Message ; 
		if( mail( $TO ,$Subject,$Message,$Headers )){
			//$To1 = "man9024@gmail.com";
			// mail( $TO1 ,$Subject,$Message,$Headers );
			$ErrorMessage = "<b>Thank You for Contact With us!</b>";
			// create welcome.html page so that page can move after successful email_id sent
		
			}else{
			$ErrorMessage = "Problem While Sending Mail";
		
		}
		}else{
		$ErrorMessage = "<b>Please Enter Required Field!</b>";
		
	}
	echo $ErrorMessage;
	
	
}
}
else
{
	die("<b class='red' style='color:red'>Wrong Code Entered Enter Image Text</b>");
}
?>
