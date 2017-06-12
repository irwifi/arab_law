<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Arab Laws Index</title>
    
    
<!-- META TAGS -->

	<meta name="description" content="Translated laws from different countries of the Arab and members of the Gulf Cooperation Council or GCC" />
	<meta name="keywords" content="middle east laws, arab laws, translated laws, uae laws, dubai laws, gcc laws, abu dhabi laws" />
	

<!--  FAVOURITE ICON -->
	
	
<!-- CSS -->
	
	<link href="./styles/styles.css" rel="stylesheet" type="text/css" media="all" />
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8663116-8', 'auto');
  ga('send', 'pageview');
</script>	

</head>
<body id="home">
<!-- START -->

<div id="wrap">

	<!-- CHANGE COUNTRY -->


	<div id="inner">
    
    	<!-- HEADER -->
    	
    	
    	
        <!-- MAIN CONTENT -->
        
        <div id="section">        

            
            <div class="article content">
             <div class="article banner_bottom">                
                    <div class="article banner_top experience">  
            
           
<?
include("common.inc");
$query = "SELECT DISTINCT law_title, law_desc, law_id FROM en_laws WHERE law_publish = 'Y' ORDER BY law_id DESC";
$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
?> 
 
<? while($row = mysql_fetch_array($result)){ ?> 
<strong><a href = "./law_info.php?law_id=<? print("$row[law_id]"); ?>"><? print("$row[law_title]"); ?></a></strong><br><? print("$row[law_desc]"); ?><br>
<a href = "http://www.arablawsworld.com/law_info.php?law_id=<? print("$row[law_id]"); ?>">http://www.arablawsworld.com/law_info.php?law_id=<? print("$row[law_id]"); ?></a>
<br><br>
<? } ?>
</div>
</div>
          </div>    
                </div>        
    </div>    
    
</div>
<!-- END -->
   
</body>
</html>
