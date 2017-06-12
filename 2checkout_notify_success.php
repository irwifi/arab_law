<?php 
$mysql_host='localhost'; //Leave at localhost 
$mysql_user='jam05pgs_arablaw'; //DB User 
$mysql_pass='26x@$R/[|]BTb1K'; //DB Pass 
$mysql_db='jam05pgs_arablaws'; //DB Name 

$db = mysql_connect($mysql_host, $mysql_user, $mysql_pass); 
mysql_select_db($mysql_db, $db); 

	  $dt = date('Y-m-d H:i:s');
      $item_name = "Downloadable Law Files";
      $item_number = "ALWDOWN001";
      $cart_id = $_REQUEST['merchant_order_id'];
	  $ufname = $_REQUEST['card_holder_name'];
	  $ulname = $_REQUEST['card_holder_name'];  
	  $uaddress = $_REQUEST['street_address'];
	  $ucity = $_REQUEST['city']; 
	  $ustate = $_REQUEST['state'];
	  $uzip = $_REQUEST['zip'];  
	  $ucountry = $_REQUEST['country'];
	  $ucountrycode = ""; 
	  $urescountrycode = ""; 
	  $uemail = $_REQUEST['email'];
	  $utxnid = $_REQUEST['order_number']; 
	  $ucurrency = "USD";
	  $ustatus = $_REQUEST['credit_card_processed'];  
	  $udate = $dt;
	  $uamount = $_REQUEST['total'];
	  $ufee = "0.45";
	  $upayid = $_REQUEST['order_number'];  
	  $upaystatus = $_REQUEST['credit_card_processed'];
	  

$qry = "UPDATE en_orders SET u_fname='$ufname', u_lname='$ulname', u_address='$uaddress', u_city='$ucity', u_state='$ustate', u_zip='$uzip', u_country='$ucountry', u_country_code='$ucountrycode', u_res_country_code='$urescountrycode', u_email='$uemail', u_payment_txn_id='$utxnid', u_payment_currency='$ucurrency', u_payment_status='$ustatus', u_payment_date='$udate', u_payment_amount=$uamount, u_payment_fee=$ufee, u_payer_id='$upayid', u_payer_status='$upaystatus', order_status='C', order_update='$udate', order_update_action='New Order Added', order_total=$uamount, order_type='2Checkout'  WHERE cart_id = '$cart_id'"; 
$result = mysql_query($qry); 

$qry = "UPDATE en_cart SET cart_status = 'C' WHERE cart_id = '$cart_id'";
$result = mysql_query($qry);

$qry="select * FROM en_cart WHERE cart_id = '$cart_id' AND cart_status = 'C' ";
$result=mysql_query($qry) or die("There is an error in database");

while($row=mysql_fetch_array($result)){
$id=$row["id"];
$iid=$row["cart_id"];
$cart_file=$row["cart_product_name"];
$to = $uemail;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headers .= 'To: $ufname  $ulname <$uemail>' . "\r\n";
$headers .= 'From: Arab Laws Online <info@arablawsworld.com>' . "\r\n";
$headers .= 'Bcc: info@arablawsworld.com' . "\r\n";
$email_subject = $cart_file." - Download Link";
$email_body = "<b>Hi $ufname  </b> ,<br>".
			  "<br>Thank you for buying Arab Laws Online, Please find below your download link(s)<br>".
			  "<br><b> $cart_file </b>".
			  "<br><a href = 'http://www.arablawsworld.com/download.php?file=&id=$id&iid=$iid'>http://www.arablawsworld.com/download.php?file=&id=$id&iid=$iid</a>".
			  "<br><br>".
			  "<br>These links will remain valid for 48 Hours and you can download maximum 3 times".
			  "<br><br><br><br><b>Regards</b>".
			  "<br>--".
			  "<br>Arab Laws Online".
			  "<br>G101 Nadd Al Hamar Road".
			  "<br>Rashidiya".
			  "<br>Dubai".
			  "<br>UAE".
			  "<br>info@arablawsworld.com".
			  "<br>http://www.arablawsworld.com";
			  mail($to, $email_subject, $email_body, $headers);
}
			  
// Notification Email Message To Administrator			
$too = "info@arablawsworld.com";  
$headerss  = 'MIME-Version: 1.0' . "\r\n";
$headerss .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headerss .= 'To: Jamal Ahmed Malik <jam05pgs@yahoo.com>' . "\r\n";
$headerss .= 'From: Arab Laws Online <info@arablawsworld.com>' . "\r\n";
$headerss .= 'Bcc: jam05pgs@yahoo.com' . "\r\n";			  
$notify_subject = "Product Sale Notification from Arab Laws World Website";
$notify_body =  "<b>Dear Mr. Jamal Ahmed</b><br>".
				"<br>This mail is to notify you about the sale was made on Arab Laws Website<br>".
				"<br>The sale was made to  <b>$ufname  $ulname</b>".
				"<br>email address <b>$uemail</b>".
				"<br>Payment was done through 2Checkout <b>USD $uamount</b>".
				"<br><br><br>Regards".
				"<br>Arab Laws World";	  	  
                 mail($too, $notify_subject, $notify_body, $headerss);

mysql_close($db); 
function Redirect($URL)
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					location.href = '$URL';
					</Script>
				");	
		
		}
Redirect("cart_thankyou.php");
?> 
