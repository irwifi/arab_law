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
if(isset($law_file)){
$target = "/home/jam05pgs/lawbook/";
$target = $target.basename( $_FILES['law_file']['name']);
move_uploaded_file($_FILES['law_file']['tmp_name'], $target);
$query = "UPDATE en_laws SET law_cat=$law_cat, law_sku='$law_sku', law_desc='$law_desc', law_title='$law_title', law_publish='$law_publish', law_price=$law_price, law_file='$target', law_path='$target' WHERE law_id = $law_id";
}
else
{
$query = "UPDATE en_laws SET law_cat=$law_cat, law_sku='$law_sku', law_desc='$law_desc', law_title='$law_title', law_publish='$law_publish', law_price=$law_price WHERE law_id = $law_id";
}
$result = mysql_query($query) or die("There is an error in database please contact support@riodubai.com");
Redirect("edit_law_en.php?law_id=$law_id&txtmsg=Law updated successfully.");
?>