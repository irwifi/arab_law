<!-- Begin Volusion Live Chat -->
<div align="center" id="VolusionLiveChat"><a href="http://www.volusion.com">Ecommerce</a></div>
<script defer type="text/javascript" src="https://livechat.volusion.com/script.aspx?id=1172636"></script>
<!-- End Volusion Live Chat -->
<br>
<br>
<?
include("common.inc");
$query = "SELECT catid, cat FROM en_cats WHERE cat_publish = 'Y' AND catid != 74 ORDER by cat ASC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>

<? while($row = mysql_fetch_array($result)){ ?>
<? if($row["cat"]=="UAE Laws"){ ?>
<li><a href="./uae-laws.php">UAE Laws</a></li>
<? }elseif($row["cat"]=="Bahrain Laws"){ ?>
<li><a href="./bahrain-laws.php">Bahrain Laws</a></li>
<? }else{ ?>
<li><a href="./middleeast-laws.php?catid=<? print("$row[catid]"); ?>&amp;cat=<? print("$row[cat]"); ?>"><? print("$row[cat]"); ?></a></li>
<?
}
}
?>