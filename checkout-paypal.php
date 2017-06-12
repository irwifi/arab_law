<?
include("common.inc");
$mycartid = cleanQuery($cartid);
$mytot = cleanQuery($tot);
$hand  = $mytot*5/100;
$query = "INSERT INTO en_orders(cart_id, order_total, order_type)VALUES('$mycartid', $mytot, 'PayPal')";
$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");

$query = "SELECT * FROM en_cart WHERE cart_id = '$mycartid'";
$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name = "myform">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="orders@arablawsworld.com">
<!-- <input type="hidden" name="business" value="arablawsworld@gmail.com"> -->
           		<?
				while($row=mysql_fetch_array($result)){
				$i=$i+1;
				$tots=$tots+$row["cart_subtotal"];
			   ?>
<input type="hidden" name="item_name_<?php print($i); ?>" value="<? print("$row[cart_product_name]"); ?>">
<input type="hidden" name="item_number_<?php print($i); ?>" value="<? print("$row[cart_product_id]"); ?>">
<input type="hidden" name="amount_<?php print($i); ?>" value="<? print("$row[cart_subtotal]"); ?>">
              <?
              }
			  ?>
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="handling_cart" value="<? print($hand); ?>">
<input type="hidden" name="custom" value="<? print($mycartid); ?>">
<input type="hidden" name="return" value="http://www.arablawsworld.com/cart_thankyou.php?cartid=<? print($mycartid); ?>">
<input type="hidden" name="cancel_return" value="http://www.arablawsworld.com/cart_cancel.php">
<input type="hidden" name="notify_url" value="http://www.arablawsworld.com/ppnotifysuccess.php">
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
