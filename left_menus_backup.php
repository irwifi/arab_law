<?
include("common.inc");
$query = "SELECT catid, cat FROM en_cats WHERE cat_publish = 'Y' ORDER by cat ASC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>

<? while($row = mysql_fetch_array($result)){ ?>
<li><a href="./middleeast-laws.php?catid=<? print("$row[catid]"); ?>&amp;cat=<? print("$row[cat]"); ?>"><? print("$row[cat]"); ?></a></li>
<?
}
?>