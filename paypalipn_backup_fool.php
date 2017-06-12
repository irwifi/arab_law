<?php 
$mysql_host='localhost'; //Leave at localhost 
$mysql_user='arablaws_jam05pg'; //DB User 
$mysql_pass='epPo[q#KW}T)'; //DB Pass 
$mysql_db='arablaws_jam05pgs'; //DB Name 

$db = mysql_connect($mysql_host, $mysql_user, $mysql_pass); 
mysql_select_db($mysql_db, $db); 

      $item_name = $_POST['item_name'];
      $item_number = $_POST['item_number'];
      $cart_id = $_POST['custom'];
	  $ufname = $_POST['first_name'];
	  $ulname = $_POST['last_name'];  
	  $uaddress = $_POST['address_street'];
	  $ucity = $_POST['address_city']; 
	  $ustate = $_POST['address_state'];
	  $uzip = $_POST['address_zip'];  
	  $ucountry = $_POST['address_country'];
	  $ucountrycode = $_POST['address_country_code']; 
	  $urescountrycode = $_POST['residence_country']; 
	  $uemail = $_POST['payer_email'];
	  $utxnid = $_POST['txn_id']; 
	  $ucurrency = $_POST['mc_currency'];
	  $ustatus = $_POST['payment_status'];  
	  $udate = $_POST['payment_date'];
	  $uamount = $_POST['mc_gross'];
	  $ufee = $_POST['payment_fee'];
	  $upayid = $_POST['payer_id'];  
	  $upaystatus = $_POST['payer_status'];

$qry = "UPDATE en_orders SET u_fname='$ufname', u_lname='$ulname', u_address='$uaddress', u_city='$ucity', u_state='$ustate', u_zip='$uzip', u_country='$ucountry', u_country_code='$ucountrycode', u_res_country_code='$urescountrycode', u_email='$uemail', u_payment_txn_id='$utxnid', u_payment_currency='$ucurrency', u_payment_status='$ustatus', u_payment_date='$udate', u_payment_amount=$uamount, u_payment_fee=$ufee, u_payer_id='$upayid', u_payer_status='$upaystatus', order_status='C', order_update='$udate', order_update_action='New Order Added', order_total=$uamount, order_type='PayPal'  WHERE cart_id = '$cart_id'"; 
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
$email_subject = "Thank you for buying Arab Laws";
$email_body = "<b>Hi $ufname  $ulname</b> ,<br>".
			  "<br>Thank you for buying Arab Laws Online, Please find below your download link(s)<br>".
			  "<br><b> $cart_file </b>".
			  "<br><a href = 'http://www.arablawsworld.com/download.php?file=&id=$id&iid=$iid'>http://www.arablawsworld.com/download.php?file=&id=$id&iid=$iid</a>".
			  "<br><br>".
			  "<br>These links will remain valid for 48 Hours and you can download maximum 3 times".
			  "<br><br><br><br><b>Regards</b>".
			  "<br>---".
			  "<br>Arab Laws World Online".
			  "<br>email - info@arablawsworld.com".
			  "<br>http://www.arablawsworld.com";
			  mail($to, $email_subject, $email_body, $headers);
}
			  
// Notification Email Message To Administrator			
$too = "info@arablawsworld.com";  
$headerss  = 'MIME-Version: 1.0' . "\r\n";
$headerss .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headerss .= 'To: Jamal Ahmed Malik <info@exploremyblog.com>' . "\r\n";
$headerss .= 'From: Arab Laws Online <info@arablawsworld.com>' . "\r\n";
$headerss .= 'Bcc: info@exploremyblog.com' . "\r\n";			  
$notify_subject = "Product Sale Notification from Arab Laws World Website";
$notify_body =  "<b>Dear Mr. Jamal Ahmed</b><br>".
				"<br>This mail is to notify you about the sale was made on Arab Laws Website<br>".
				"<br>The sale was made to  <b>$ufname  $ulname</b>".
				"<br>email address <b>$uemail</b>".
				"<br>Payment was done through PayPal <b>USD $uamount</b>".
				"<br><br><br>Regards".
				"<br>Arab Laws World";	  	  
                 mail($too, $notify_subject, $notify_body, $headerss);

mysql_close($db); 

?> 
