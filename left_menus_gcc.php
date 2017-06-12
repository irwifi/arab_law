<br>
<?
include("common.inc");
$query = "SELECT jos_vm_category.category_name, jos_vm_category_xref.category_child_id FROM jos_vm_category, jos_vm_category_xref WHERE jos_vm_category.category_id = jos_vm_category_xref.category_child_id AND jos_vm_category.category_publish = 'Y' AND jos_vm_category_xref.category_parent_id =37";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>

<? while($row = mysql_fetch_array($result)){ ?>
<li><a href="./uae_gcc_gulf_laws.php?catid=37&amp;subcatid=<? print("$row[category_child_id]"); ?>&amp;cat=GCC Laws&amp;subcat=<? print("$row[category_name]"); ?>"><? print("$row[category_name]"); ?></a></li>
<?
}
?>