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
$target = "/home/jam05pgs/lawbook/";
$target = $target.basename( $_FILES['law_file']['name']);
$query = "INSERT INTO en_laws(law_cat, law_sku, law_desc, law_title, law_publish, law_price, law_file, law_path, law_clicks, law_orders)VALUES($law_cat, '$law_sku', '$law_desc', '$law_title', 'Y', $law_price, '$target', '$target', 2012, 0)";
$result = mysql_query($query) or die("There is an error in database please contact support@riodubai.com");
move_uploaded_file($_FILES['law_file']['tmp_name'], $target);
Redirect("law_upload_en.php?txtmsg=Law saved successfully.");
?>