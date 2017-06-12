<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>UAE GCC Laws Online</title>
    
    
<!-- META TAGS -->

	<meta name="description" content="UAE Laws Online" />
	<meta name="keywords" content="uae laws, dubai laws, gcc laws" />
	
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
<meta charset="UTF-8"></head>
<body id="home">

<!-- START -->

<div id="wrap">

	<!-- CHANGE COUNTRY -->

	<div id="top">
    	
<a href="./ar/index.php"><strong>Arabic</strong></a>    </div>

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
            <div id="slideshow">
      			<div class="article banner">
			    	<img src="./images/pics_ah/banner_about.jpg" width="980" height="218" alt="" />
                    <div class="hub_insert">
                
                	<h1>Translated Laws</h1>
                    
                    <p>providing quality services since 1997</p>
                
               		</div>
                </div> 
      			
                <div class="article banner"> 

              		<div onclick="location.href='#';">
                    
	                    <!-- <img src="images/pics/hero_together.jpg" width="980" height="218" /> -->
			    		<img src="./images/pics_ah/banner_consulting.jpg" width="980" height="218" alt="" />
	
	                    <div class="hub_insert insert_consult">
	                    
	                        <h1>UAE Laws</h1>
	                        
	                        <p>UAE Translated laws in english and arabic</p>
	                    
	                    </div>
                    
                    </div>
    
                </div>
                
                <div class="article banner">
                    
                    <div onclick="location.href='#';">
                    
	                    <!-- <img src="images/pics/hero_careers.jpg" width="980" height="218" /> -->
			    		<img src="./images/pics_ah/banner_development.jpg" width="980" height="218" alt="" />
	                    
	                    <div class="hub_insert insert_dev">
	                    
	                        <h1>Arab Laws</h1>
	                        
	                        <p>Arab Countries Laws in english and arabic</p>
	                    
	                    </div>
                    
                    </div>
    
                </div>
                
                <div class="article banner">
              
              		<div onclick="location.href='#';">

	              		<!-- <img src="images/pics/testbanner.jpg" alt="" /> -->
						<img src="./images/pics_ah/banner_support.jpg" width="980" height="218" alt="" />
	                                        
	                    <div class="hub_insert insert_remote">
	                    
	                        <h1>GCC Laws</h1>
	                        
	                        <p>GCC Country laws in arabic and english</p>
	                    
	                    </div>
                    
                    </div>
    
                </div>
                
                <div class="article banner">
                
                	<div onclick="location.href='#';">
                
	              		<!-- <img src="images/pics/hero_together.jpg" width="980" height="218" /> -->
						<img src="./images/pics_ah/banner_training.jpg" width="980" height="218" alt="" />
			    
	                    <div class="hub_insert insert_train">
	                    
	                        <h1>BUY Online</h1>
	                        
	                        <p>Buy online and get 20% discount</p>
	                   
	                    </div>
                    
                    </div>
    
                </div>
        
            </div>
            
            
            
             <ul id="nav2">
        		
        		<li class="slide_0"><a></a></li> <!-- this is the button for the default homepage image which is never seen -->
        		
                <li class="slide_1"><a href="#">UAE Laws</a></li>
                
                <li class="slide_3"><a href="#">Translated Laws</a></li>
                
                <li class="slide_2"><a href="#">Translation</a></li>
                
                <li class="slide_4"><a href="#">Law Updates</a></li>
            
            </ul>
            

            <div class="aside"> 
            <p class="heading">Laws Online</p>             		
                <? include("left_menu.php"); ?>	
                <br />
                <br />
            <p class="heading">Digital Newsletter</p>  
		            
			</div>
            
            
            <div class="article content">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">Home</a></li>
                
                <li>/</li>
                
                <li><a href="./aboutus.php">About Us</a></li>
            
            </ul>
            
            <h1>Communication Legal Translation</h1>
            <h2>Sharing our knowledge and experience</h2>
            <p>We   Provide Legal, Advertising, Public Relations, Financial and Technical   Translation; Arabic Translation Services and Translations for over 65 Other   Major World Languages. If you are looking for professional   translation services, or need public relation, advertising, financial or   technical translation in Arabic and other major world languages then you have   come to the right place. </p>
            <p> Communication Legal Translation is a Dubai-based firm that provides a   full range of communication services to law firms, advertising agencies, public   relations companies, banks, computer firms, training outfits and a large variety   of organizations and individuals from all sectors of the economy.</p>
            
            
                <h1>Top Downloaded Laws</h1>
			<ul class="list">
                <li><a href = "#">UAE Presidential Decision No. (3) of 2006</a></li>
                <li><a href = "#">United Arab Emirates No. (1) of 2008</a></li>
                <li><a href = "#">UAE, SCA Board Chairman's Decision No. (17/R) of 2010 </a></li>
                <li><a href = "#">Dubai Executive Council Resolution No. (48) of 2007 </a></li>
                <li><a href = "#">Decision Authorizing the Executive Chairman of the Ports </a></li>
            </ul>
                
                
                <div class="article hub_left">
	        <div class="article hub_col1">
                
                	<h2>Directory of Translated Laws</h2>
                    
                    <img src="./images/pics_ah/book1.jpg" alt="Download UAE GCC Laws Directory" title = "Download UAE GCC Laws Directory" />
                    
                    <p>Download Directory of Translated Laws in English, You may order in any other language by phone, fax or buy online from us.</p>
                    
                    <a href="#" class="more">View more details</a>                
                    </div>
                
              <div class="article hub_col2">                
           		  <h2>Monthly Newsletter</h2>                    
                    <img src="./images/pics_ah/law-news.jpg" alt="Download HTML Newsletter" title = "Download HTML Newsletter" />                    
                    <p>Download our monthly newsletter contains lot of useful laws information of uae, gulf and gcc countries and constitutional amendments.</p>                    
                  <a href="#" class="more">View more details</a>
                  </div>                  	
                </div>
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
