<?
include("common.inc");
$query = "SELECT cat, catid FROM cats WHERE catstatus = 'Y' ORDER BY catid ASC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>
<div id="firstpane" class="menu_list">
<? while($row = mysql_fetch_array($result)){ ?>
<p class="menu_head"><? print("$row[cat]"); ?></p>
<?
$query1 = "SELECT subcat, subcatid FROM subcats WHERE catid = $row[catid] AND subcatstatus = 'Y' ORDER BY subcatid ASC";
$result1 = mysql_query($query1) or die("There is an error in database please contact support@wonderd.ae");
?>
<div class="menu_body">
<?
while($row1 = mysql_fetch_array($result1)){ 
?>		
<a href="./uae_gcc_gulf_laws.php?catid=<? print("$row[catid]") ?>&amp;subcatid=<? print("$row1[subcatid]"); ?>&amp;cat=<? print("$row[cat]"); ?>&amp;subcat=<? print("$row1[subcat]"); ?>"><? print("$row1[subcat]"); ?></a>
<?
}
?>
</div>
<?
}
?>
</div>