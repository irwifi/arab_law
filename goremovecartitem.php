<?
include("common.inc");
$id = cleanQuery($id);
$query = "DELETE FROM en_cart WHERE id = $id";
$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
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