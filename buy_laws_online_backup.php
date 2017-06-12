<?
session_start();
$cartid = session_id();
include("common.inc");
$law_id = cleanQuery($law_id);
$query = "SELECT law_price, law_file FROM en_laws WHERE law_id = $law_id";
$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
$row=mysql_fetch_array($result);
$lawprice = $row["law_price"];
$lawfile = $row["law_file"];
$dt = date('Y-m-d H:i:s');

$query1 = "INSERT INTO en_cart(cart_id, cart_product_id, cart_product_name, cart_qty, cart_subtotal, cart_status, cart_date, cart_downloads, cart_download)VALUES('$cartid', $law_id, '$law', 1, $lawprice, 'P', '$dt', 0, '$lawfile')";
$result1 = mysql_query($query1) or die("There is an error in database please contact support@arablawsworld.com");
function Redirect($URL)
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					location.href = '$URL';
					</Script>
				");	
		
		}
Redirect("shopping_cart.php");
?>