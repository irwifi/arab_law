<?
$mysql_host='localhost'; //Leave at localhost 
$mysql_user='jam05pgs_arablaw'; //DB User 
$mysql_pass='26x@$R/[|]BTb1K'; //DB Pass 
$mysql_db='jam05pgs_arablaws'; //DB Name 
$db = mysql_connect($mysql_host, $mysql_user, $mysql_pass); 
mysql_select_db($mysql_db, $db); 
$myip = $_SERVER['REMOTE_ADDR'];
$query = "SELECT id, u_fname, u_lname, u_email FROM en_orders WHERE msgsent = 'N' LIMIT 0,50";
$result = mysql_query($query) or die("There is an error, please contact support@arablawsworld.com");
while($row=mysql_fetch_array($result)){ 
$too = $row[3];
$tid = $row[0];
$headerss  = 'MIME-Version: 1.0' . "\r\n";
$headerss .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headerss .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headerss .= 'To:'.$row[1].' '.$row[2].'<'.$row[3].'>'."\r\n";
$headerss .= 'From: Arab Laws Online <sales@arablawsworld.com>' . "\r\n";			  
$notify_subject = "Abu Dhabi Real Estate Law 2015 - English Version Available";
$notify_body =  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Newsletter</title>
	<style type="text/css">
        * {padding: 0;}
        a {color: #40B2D3;}
            a:hover {color: #012B3A;}
        tr, td, th {padding: 0; margin: 0;}
        p {padding: 0; margin: 0;}
        body {background: #C3C3C3; width: 100%; margin: 0 auto;}
        .body {width: 650px; background: #C3C3C3; margin: 0 auto;}
        .ReadMsgBody {width: 100%;} .ExternalClass{width: 100%;} /* Centres the newsletter within Hotmail */
    </style>
</head>
<body style="background: #C3C3C3;">
    <table style="margin:0 auto; background: #C3C3C3; width: 100%">
        <tr>
            <td></td>
            <td width="650">
                <table width="650" border="0" cellspacing="0" cellpadding="0" align="center" class="wl-b-newsletter" style="margin: 10px auto; background: #fff;">
                    <tr style="line-height: 0em; font-size: 0px;">
                        <td></td>
                    </tr>
                    <tr style="line-height: 0em;">
                        <td style="background: #FAFAFA; border-bottom: 1px solid #9CE8F3; height: 60px; padding-left: 125px;" valign="top">
                            <a href="http://www.arablawsworld.com" title="Visit the website"><img src="http://www.arablawsworld.com/images/backgrounds/logo.png" alt="Arab Laws Online" border="0" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: #0088CC;">
                            <table style="color: #333333; font-family: Arial, Helvetica, sans-serif; font-weight: 400; font-size: 18px; padding: 5px 0;">
                                <tr>
                                    <td width="650" style="text-align: center; padding-left: 15px;">
                                        <a href="http://www.arablawsworld.com/law_info.php?law_id=10470" title="How it works" style="color: #fff; text-decoration: none;">Abu Dhabi Real Estate Law 2015 - English Version</a>&nbsp;&nbsp;&nbsp;                                    </td>
                              </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width="15"></td>
                                    <td width="620">
                                        <table style="background: #0088CC; border: 1px solid #B4E0F5; font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #FFFFFF;" width="620">
                                            <tr>
                                                <td style="padding: 20px;">
                                                    <p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align:justify;">
                                                    On the Regulation of Real Estate Sector in the Emirate of Abu Dhabi. -	We, Khalifa Bin Zayed Al Nahyan, the Ruler of Abu Dhabi.
Having Considered the Law No. (1) of 1974 on the Reorganization of the Governmental Body in the Emirate of Abu Dhabi and the amending laws thereof:  <a href="http://www.arablawsworld.com/law_info.php?law_id=10470">Read more...</a></p> 
                                                    <p>&nbsp;</p>
                                                    
                                                    <p>This Law shall be published in the Official Gazette and shall come into force after six months from the date of
such publication.</p>
                                                </td>
                                            </tr>
                                        </table><br />
                                        <table>
                                           
                                        </table><br />
                                    </td>
                                    <td width="15"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width="20" align="center" style="text-align: center;"></td>
                                    <td valign="top" style="padding-right: 15px;">                                  
                                   
                                        
               <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #666; margin:0; padding: 0; line-height: 1.6em;">
                                            <span style="font-size: 24px; letter-spacing: -1px; font-weight: 700; color: #0088CC; line-height: 1em;">90 Articles</span><br /><br />Whether you are a student, a historian, a teacher, a banker, a lawyer, a public servant, a researcher, an advertisement expert, a news writer or reporter, a nationalistic Arab, or anyone who simply wants a translated copy of this law, then you have found the right place. <br /><br />Translated by a team of professional legal translators, download your copy of english version now from our website.<br />
                                          
                                           <br />
                                           
                                                     
                                            
                                            
                                             <p align="center"><a href="http://www.arablawsworld.com/law_info.php?law_id=10470"><img src="http://www.arablawsworld.com/images/buttons/download-button.png" border="0"></a></p>
                                            
                                    </td>
                                </tr>
                            </table>                       
                        </td>
                    </tr>
                    <tr>
                        <td align= "center" style="background: #0088CC; font-family: Arial, Helvetica, sans-serif; color: #fff; font-size: 10px; padding: 15px;">Copyright &copy; 2016 Arab Laws Online. All rights reserved. <br> G-101 Captain Building Nadd Al Hamar Road Rashidiya, Dubai-UAE <br> If you do not wish to receive this email please <a href="http://www.arablawsworld.com/unsub.php">Unsubscribe</a></td>
                    </tr>
                </table>
            </td>
            <td></td> 
        </tr>
    </table>  
</body>
</html>
';
mail($too, $notify_subject, $notify_body, $headerss);
$query1 = "UPDATE en_orders SET msgsent = 'Y' WHERE id = $tid";
$result1 = mysql_query($query1) or die("There is an error, please contact support@arablawsworld.com");
}
mysql_close();	
?>