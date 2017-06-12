<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Middle East Laws Online</title>
    
    
<!-- META TAGS -->

	<meta name="description" content="Middle East Laws Online" />
	<meta name="keywords" content="middle east laws, dubai laws, gcc laws" />
	
	<meta http-equiv="Content-Style-Type" content="text/css" />  
	<meta http-equiv="content-language" content="en-gb" /> 
	<meta http-equiv="EXPIRES" content="Thu, 16 Mar 2000 11:00:00 GMT" />
	<meta http-equiv="PRAGMA" content="NO-CACHE" />
	<meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
	<meta name="Language" content="English" />
	<meta name="Distribution" content="Global" />
	<meta name="Robots" content="all" />
	<meta name="Creator" content="WonderWorld Designs" />	
	<meta name="Company" content="WonderWorld Designs" />
	<meta name="Author" content="WonderWorld Designs" />
	<meta name="Publisher" content="WonderWorld Designs" />
	
<!--  FAVOURITE ICON -->
	
	<link rel="icon" type="image/png" href="./fav.png" />
	
<!-- CSS -->
	
	<link href="./styles/styles.css" rel="stylesheet" type="text/css" media="all" />
		
	<!--[if gte IE 6]>
	<link href="./styles/ie.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->
	
	<!--[if lt IE 7]>
	<link href="./styles/ie6.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->   
	
<!-- JAVASCRIPT -->
	<script type="text/javascript" src="./scripts/jquery-1.2.4.min.js"></script>
	<script type="text/javascript" src="./scripts/cufon-yui.js"></script>	
	<script type="text/javascript" src="./scripts/competa.font.js"></script>	
	<script type="text/javascript" src="./scripts/jquery.pngFix.js"></script>
	
	<!-- START TEST FOR IE -->
	
	<script type="text/javascript">var isIE = 0;</script>
	
	<!--[if IE]>
	<script type="text/javascript">isIE = 1;</script>
	<![endif]-->
	
	<!-- END TEST FOR IE -->
	
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	
	<script type="text/javascript">
		Cufon.replace('h1,h2,.hub_insert p, p.statement');		
	</script>
	
	<script type="text/javascript">
		/* <![CDATA[ */
		$(document).ready(function(){
			if (!document.getElementsByTagName) return false;
			var links = document.getElementsByTagName("a");
			if (links.length == 0) return false;
			for (var i = 0; i < links.length; i++) {
				var relation = links[i].getAttribute("rel");
				if (relation == "external") {
					links[i].onclick = function() {
						return !window.open(this.href);
					}
				}		 
			}
		});
		/* ]]> */
	</script>    
    <script type="text/javascript" src="./scripts/jquery.cycle.mod.js"></script>
	<script type="text/javascript" src="./scripts/slideshow.js"></script>
    <script type="text/javascript">
$(document).ready(function()
{
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({Image:"url(./images/down.gif)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({Image:"url(./images/left.gif)"});
	});
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({Image:"url(./images/down.gif)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({Image:"url(./images/left.gif)"});
	});
});
</script>
<meta charset="UTF-8">
<style type="text/css">
<!--
.style1 {color: #187BC0}
-->
</style>
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

	<div id="top">
    	
</div>

	<div id="inner">
    
    	<!-- HEADER -->
    	
    	
<div id="header">
    <div class="header_inner">
		<a href="./index.php" title="Back to home" class="logo">Arab Laws World</a>
		
		<!-- begin search form -->
		
		<form action="searchresults.php" id="search_form" method="post">
			<div>
				<input name="search" type="image" src="./images/buttons/search.gif" class="btn"/>
				<input name="query_string" class="searchfield" type="text" value="Search Laws..." />
			</div>
		</form>
		
		<script type="text/javascript">
			var sinput = $('input[name="query_string"]').get(0);

			var sblur = function()
			{
				if (sinput.value == '')
				{
					sinput.value = 'Search Laws...';
					$(sinput).css({ color:'#B8B8B8' });
				}
			}
			
			var sfocus = function()
			{
				if (sinput.value == 'Search Laws...')
				{
					sinput.value = '';
					$(sinput).css({ color:'#666' });
				}
			}

			sinput.onfocus = sfocus;
			sinput.onblur = sblur;
		</script>
		
		<!-- end search form -->
		<? include("navigation.php"); ?>
	</div>
</div>
    	
        <!-- MAIN CONTENT -->
        
        <div id="section">        
            <div class="article banner">
			<img src="./images/pics_ah/banner_about.jpg" width="980" height="218" alt="ABOUT US: Bridging the gap between business and technology" />
            </div>        
            
            
            <div class="aside"> 
			<strong>&nbsp;&nbsp;&nbsp;MiddleEast Laws</strong> 
            <ul class="leftnav">            		
                <? include("left_menus.php"); ?>	
			</ul>	      		            
			</div> 
            
            
            <div class="article content">
            
            <ul class="breadcrumb">
            
            	<li></li>
                
                <li></li>
                
                <li></li>
            
            </ul>
            
            <h1>Middle East Laws Index</h1>
           
<?
//include("common.inc");
$query = "SELECT en_laws.law_id, en_laws.law_title, en_laws.law_desc, en_laws.law_price, en_laws.law_cat, en_cats.cat FROM en_laws, en_cats WHERE en_laws.law_cat = en_cats.catid AND en_laws.law_publish = 'Y' ORDER BY en_laws.law_id DESC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");

$num_rec = mysql_num_rows($result);
$rec_per_page = 10;
if(isset($_GET['page_number'])) 
{ 
$page_number = $_GET['page_number']; 
} 
else 
{ 
$page_number = 1; 
} 
$total_pages = ceil($num_rec / $rec_per_page);
$offset = ($page_number - 1) * $rec_per_page;
if($page_number == 0)
{
$query = "SELECT en_laws.law_id, en_laws.law_title, en_laws.law_desc, en_laws.law_price, en_laws.law_cat, en_cats.cat FROM en_laws, en_cats WHERE en_laws.law_cat = en_cats.catid AND en_laws.law_publish = 'Y' ORDER BY en_laws.law_id DESC";
}
else
{
$query = "SELECT en_laws.law_id, en_laws.law_title, en_laws.law_desc, en_laws.law_price, en_laws.law_cat, en_cats.cat FROM en_laws, en_cats WHERE en_laws.law_cat = en_cats.catid AND en_laws.law_publish = 'Y' ORDER BY en_laws.law_id DESC LIMIT $offset, $rec_per_page";
}
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");

?>            
            <? while($row = mysql_fetch_array($result)){

?>
            <div class="article banner_bottom">                
                    <div class="article banner_top experience">                        
                        <h2><a href = "./law_info.php?law_id=<? print("$row[law_id]"); ?>"><? print("$row[law_title]"); ?></a></h2>               
                        <p><? print("$row[law_desc]"); ?><br><span class="heading style1"><strong>US$ <? print round(("$row[law_price]"), 2); ?>.00</strong></span></p>                                                
			             <a href="./buy_laws_online.php?cat=<? print("$row[cat]") ?>&catid=<? print("$row[law_cat]"); ?>&law_id=<? print("$row[law_id]"); ?>&law=<? print("$row[law_title]"); ?>" class="contactus">Contact us</a>                    
                    </div>                
                </div>
                <? } ?>
                <p align = "center">
                 <?                                                   
    for($i = 1; $i <= $total_pages; $i++) 
	{ 
		if($i == $page_number) 
			{
				print "$i &nbsp; | "; 
			} 
		else
		 {
			  print "&nbsp; <a href='middle-east-laws.php?page_number=$i'>$i</a>&nbsp; | "; 
		 }
	 }
?>
                </p>
                </div>    
                </div>        
    </div>    
    <div id="bottom"></div>
    
    <!-- FOOTER -->
    <? include("footer.php"); ?>
<!-- END FOOTER  -->
</div>
<!-- END -->
   
</body>
</html>
