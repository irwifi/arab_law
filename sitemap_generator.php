<?
include("common.inc");
$query = "SELECT DISTINCT law_title, law_desc, law_id FROM en_laws WHERE law_publish = 'Y' ORDER BY law_id DESC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>

<? while($row = mysql_fetch_array($result)){ ?>
<url>
  <loc>http://www.arablawsworld.com/law_info.php?law_id=<? print("$row[law_id]"); ?></loc>
  <priority>0.5</priority>
  <changefreq>weekly</changefreq>
</url>

<?
}
?>