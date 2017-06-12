<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- META TAGS -->
    <title>Contact Us | Company Information | Ask A Question</title>
    <meta name="description" content="Please feel free to contact us any time by email, phone or online enquiry form, our support and sales team will be more than happy to assis you about your enquiry." />
	<meta name="keywords" content="contact us, ask a question, law enquiry, online purchase questions" />
    



	
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

<script type="text/javascript">
jQuery(document).ready(function(){
	$('#contactform').submit(function(){				  
		var action = $(this).attr('action');
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			subject: $('#subject').val(),
			message: $('#message').val()
		},
			function(data){
				$('#contactform #submit').attr('disabled','');
				$('.response').remove();
				$('#contactform').before('<p class="response">'+data+'</p>');
				$('.response').slideDown();
				if(data=='Message sent!') $('#contactform').slideUp();
			}
		); 
		return false;
	});
});
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
		<a href="./index.php" title="Back to home" class="logo">Arab Laws Online</a>
		
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
			<img src="./images/pics_ah/contact-us.jpg" width="980" height="218" alt="ABOUT US: Bridging the gap between business and technology" />
            </div>
            <div class="aside"> 
			<strong>&nbsp;&nbsp;&nbsp;Arab Laws</strong> 
            <ul class="leftnav">            		
                <? include("left_menus_contactus.php"); ?>	
			</ul>	      		            
			</div> 
            
            
            <div class="article content">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">Home</a></li>
                
                <li>/</li>
                
                <li><a href="./contact.php">Contact Us</a></li>
            
            </ul>
            
            <h1>Contact Us</h1>           
           <p></p>


           
                      
      <div = "contact_div">    
        <div style="float: right; width: 45%;">
           <h2>Arab Laws Online</h2>
           <p>G101, Captain Villas, Nadd Al Hamar Road<br />Rashidiya <br />
             Dubai <br />United Arab Emirates <br />
             P.O.Box: 25210 <br />
			 http://www.arablawsworld.com</p>
		</div>  
		<div style="float: left; width: 45%;">

<h2>Customer Support</h2>
<p>Please click on "Girl Photo" below to start chat with our online sales person and start asking your questions or queries. We would be more than happy to assist you 24 hours a day and 7 days a week.</p>
<!-- Begin Volusion Live Chat  -->
<div align="left" id="VolusionLiveChat"><a href="http://www.volusion.com">Shopping Cart Software</a></div>
<script defer type="text/javascript" src="https://livechat.volusion.com/script.aspx?id=856435"></script>
<!-- End Volusion Live Chat -->
		</div></div>

<div style="clear:both"></div>	
<div style="clear:both"></div>					 
<br /><br /><br />

<div id= "form" class = "form">		
						
			           
       		<fieldset>
            
            <h3 style="display:block; width:400px;">Enquiry</h3>
            <!-- <p>Please enter your contact details and message. We will get back to you within few minutes.</p> -->    
				<form action = "contacts.php" method = "post" id = "contactform">
				<div class="form_inner">
				
					<label>Name *</label>
					
					<span><input name="name" id = "name" type="text" value="" /></span>
	 
					<label>Email *</label>
					
					<span><input name="email" id = "email" type="text" value="" /></span>
					
					 <label>Phone</label>
					
					<span><input name="phone" id = "phone" type="text" value="" /></span>
					 
					<label>Subject</label>
					
					<span><input name="subject" id = "subject" type="text" value="" /></span>
				</div>
				<div>
					<label>Message *</label>
				
					<span class="textarea"><textarea name="message" id = "message" cols="33" rows="10"></textarea></span>
				</div>
				
				<div class="form_foot"><input type="image" name="btn_submit" id = "btn_submit" class="send" src="images/buttons/btn_send.gif" /></div>

			</form>            
            </fieldset>
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
