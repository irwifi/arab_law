<?
session_start();
$cartid = session_id();
include("common.inc");
$query = "INSERT INTO en_orders(cart_id, order_total, order_type)VALUES('$cartid', $tot, 'PayPal')";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name = "myform">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="info@arablawsworld.com">
<input type="hidden" name="item_name" value="Downloadable Law Files">
<input type="hidden" name="item_number" value="ALWDOWN001">
<input type="hidden" name="amount" value="<? print($tot); ?>">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="custom" value="<? print($cartid); ?>"> 
<input type="hidden" name="return" value="http://www.arablawsworld.com/cart_thankyou.php?cartid=<? print($cartid); ?>">
<input type="hidden" name="cancel_return" value="http://www.arablawsworld.com/cart_cancel.php">
<input type="hidden" name="notify_url" value="http://www.arablawsworld.com/paypalipn.php">  
</form>
<?
function SubmitPayPalForm()
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					document.myform.submit();
					</Script>
				");	
		
		}
SubmitPayPalForm();
?>
