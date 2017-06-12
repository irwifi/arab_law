<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>About Middle East</title>
    
    
<!-- META TAGS -->

	<meta name="description" content="middle east" />
	<meta name="keywords" content="middleeast, middle east" />
	
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

	<div id="top"></div>
    	

	<div id="inner">
    
    	<!-- HEADER -->
    	
    	
<div id="header">
    <div class="header_inner">
		<a href="./index.php" title="Back to home" class="logo">CLT</a>
		
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
			<img src="./images/pics_ah/banner_about.jpg" width="980" height="218" alt="ABOUT US: Communication Legal Translation - Dubai UAE" />
            </div>
            <div class="aside"> 
			<strong>&nbsp;&nbsp;&nbsp;MiddleEast Laws</strong> 
            <ul class="leftnav">            		
                <? include("left_menus.php"); ?>	
			</ul>	      		            
			</div> 
            
            
            <div class="article content">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">Home</a></li>
                
                <li>/</li>
                
                <li><a href="#">About Us</a></li>
            
            </ul>
            
            <h1>About Middle East</h1>
            <h2>The Arab World</h2>
           
           <p>The term &quot;Middle East&quot; may have originated in the 1850s in the British India Office. However, it became more widely known when American naval strategist Alfred Thayer Mahan used the term in 1902 to 'designate the area between Arabia and India'. During this time the British and Russian Empires were vying for influence in Central Asia, a rivalry which would become known as The Great Game. Mahan realized not only the strategic importance of the region, but also of its center, the Persian Gulf. He labeled the area surrounding the Persian Gulf as the Middle East, and said that after the Suez Canal, it was the most important passage for Britain to control in order to keep the Russians from advancing towards British India. Mahan first used the term in his article &quot;The Persian Gulf and International Relations,&quot; published in September 1902 in the National Review, a British journal.</p>
           <p>The Middle East, if I may adopt a term which I have not seen, will some day need its Malta, as well as its Gibraltar; it does not follow that either will be in the Persian Gulf. Naval force has the quality of mobility which carries with it the privilege of temporary absences; but it needs to find on every scene of operation established bases of refit, of supply, and in case of disaster, of security. The British Navy should have the facility to concentrate in force if occasion arise, about Aden, India, and the Persian Gulf.</p>
           <p>Mahan's article was reprinted in The Times and followed in October by a 20 article series entitled &quot;The Middle Eastern Question,&quot; written by Sir Ignatius Valentine Chirol. During this series, Sir Ignatius expanded the definition of Middle East to include &quot;those regions of Asia which extend to the borders of India or command the approaches to India.&quot; After the series ended in 1903, The Times removed quotation marks from subsequent uses of the term.</p>
           <p>Until World War II, it was customary to refer to areas centered around Turkey and the eastern shore of the Mediterranean as the &quot;Near East&quot;, while the &quot;Far East&quot; centered on China, and the Middle East then meant the area from Mesopotamia to Burma, namely the area between the Near East and the Far East.[citation needed] In the late 1930s, the British established the Middle East Command, which was based in Cairo, for its military forces in the region. After that time, the term &quot;Middle East&quot; gained broader usage in Europe and the United States, with the Middle East Institute founded in Washington, D.C. in 1946, among other usage.</p>
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
