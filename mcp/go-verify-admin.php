<?
function Redirect($URL)
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					location.href = '$URL';
					</Script>
				");	
		
		}	
include("../common.inc");
$query = "SELECT * FROM etrustmeadmin WHERE txtuser = '$txtusername' AND txtpass = '$txtpassword' AND status = 'Y'";
$result = mysql_query($query) or die("There is an error, please contact support@riodubai.com");
$num_rec = mysql_num_rows($result);
	if($num_rec > 0)
		{
		$query = "select * from cp";
		$result = mysql_query($query) or die("There is an error. Please contact support@riodubai.com");
		$row = mysql_fetch_array($result);
		$newip = $_SERVER['REMOTE_ADDR'];
		$newdate=date('l dS \of F Y h:i:s A');
		$oldip = $row["cip"];
		$olddate = $row["cdate"];
		$olduser = $row["cloginuser"];
		$query = "update cp set cip = '$newip', cdate = '$newdate', ccount=ccount+1, ccip = '$oldip', ccdate = '$olddate', cloginuser = '$txtusername', ccloginuser = '$olduser'";
		$result = mysql_query($query) or die("There is an error. Please contact support@riodubai.com");		
		setcookie("cadminid", "$txtusername", time() + 14400);	
		Redirect("cp.php");
		}	
		else
		{
		Redirect("index.php?msg=wrong username or password, please verify and enter correct information");	
		}		
?>