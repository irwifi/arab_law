<?php
include("common.inc");

if(!$_POST) exit;

$email = cleanQuery($_POST['email']);
$ip = $_SERVER['REMOTE_ADDR'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$name.'<'.$email.'>'."\r\n";
$headers .= 'Bcc: ' . "\r\n";


//$error[] = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email )){
	$error.="Invalid email address entered";
	$errors=1;
}
if($errors==1) echo $error;
else{
	$values = array ('name','email','phone','subject','message');
	$required = array('name','email','phone','subject','message');
	 
	$your_email = "orders@arablawsworld.com";
	$email_subject = "Law Enquiry: ".cleanQuery($_POST['subject']);
	$email_content = "<strong>Enquiry Details:</strong><br>";
	$email_content .= "<b>IP Address</b>:".$ip."<br>";
	
	foreach($values as $key => $value){
	  if(in_array($value,$required)){
		if ($key != 'subject' && $key != 'phone') {
		  if( empty($_POST[$value]) ) { echo 'PLEASE FILL IN REQUIRED FIELDS'; exit; }
		}
		$email_content .= '<b>'.$value.'</b>: '.cleanQuery($_POST[$value])."<br>";
	  }
	}	
	 
	if(@mail($your_email,$email_subject,$email_content,$headers)) {
		echo 'Message sent!'; 
	} else {
		echo 'ERROR!';
	}
} 
?>