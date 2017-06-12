<?
session_start();
$cartid = session_id();
include("common.inc");
$query = "INSERT INTO en_orders(cart_id, order_total, order_type)VALUES('$cartid', $tot, '2Checkout')";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
$query1 = "SELECT * FROM en_cart WHERE cart_id = '$cartid'";
$result1 = mysql_query($query1) or die("There is an error in database please contact support@wonderd.ae");
?>
<form action="https://www.2checkout.com/checkout/spurchase" method="post" name = "myform">
<input type="hidden" name="sid" value="1521630">
<input type="hidden" name="total" value="<? print($tot); ?>">
<input type="hidden" name="cart_order_id" value="<? print($cartid); ?>">
<input type="hidden" name="id_type" value="1"/>
<input type="hidden" name="skip_landing" value="1"/>
<input type="hidden" name="fixed" value="1"/>
<?
	while($row=mysql_fetch_array($result1)){
	$i=$i+1;
?>
<input type="hidden" name="c_prod_<? print($i); ?>" value="ALW-<? print("$row[cart_product_id]"); ?>,1"/>
<input type="hidden" name="c_name_<? print($i); ?>" value="<? print("$row[cart_product_name]"); ?>"/>
<input type="hidden" name="c_description_<? print($i); ?>" value="<? print("$row[cart_product_name]"); ?>"/>
<input type="hidden" name="c_price_<? print($i); ?>" value="<? print("$row[cart_subtotal]"); ?>"/>
<? } ?>
</form>
<?
function Submit2CheckoutForm()
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					document.myform.submit();
					</Script>
				");	
		
		}
Submit2CheckoutForm();
?>
