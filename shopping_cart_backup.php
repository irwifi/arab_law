<?
session_start();
//session_regenerate_id();
$cartid = session_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Shopping Cart</title>
    
    
<!-- META TAGS -->

	<meta name="description" content="Online Enquiry" />
	<meta name="keywords" content="uae jobs, dubai law jobs, legal jobs" />
	
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8663116-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-
analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

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
				<input name="search" type="image" src="./images/buttons/search.gif" class="btn" width="30" height="25"/>
				<input name="query_string" class="searchfield" type="text" value="Search Laws..." size="20" />
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
			<img src="./images/pics_ah/terms.jpg" width="980" height="218" alt="Shopping Cart" />                
            </div>
            <div class="aside"> 	
			<strong>&nbsp;&nbsp;&nbsp;Arab Laws</strong> 
            <ul class="leftnav">            		
                <? include("left_menus.php"); ?>	
			</ul>      		            
			</div> 
            
            
            <div class="article content">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">Home</a></li>
                
                <li>/</li>
                
                <li><a href="#">Shopping Cart</a></li>
            
            </ul>
            
            <h1>Shopping Cart</h1>           

           <?
           	    $query = "SELECT * FROM en_cart WHERE cart_id = '$cartid'";
				$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
				$num_rec = mysql_num_rows($result);
		   ?>
                      
                
           <? if($num_rec>0){ ?>
            <p align="center">You have currently <font color="#0096DB"><b><? print($num_rec); ?></b></font> 
            item(s) in your shopping cart.</p>           

           
                      
                
           
            <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1" height="190">
              <tr>
                <td width="4%" height="44" bgcolor="#D8DCDF">
                <p style="text-align: center"><font color="#0096DB">
                <span style="font-size: 80%; font-weight: 700">No</span></font></td>
                <td width="54%" height="44" bgcolor="#D8DCDF">
                <p style="text-align: center"><font color="#0096DB">
                <span style="font-size: 80%; font-weight: 700">Product</span></font></td>
                <td width="12%" height="44" bgcolor="#D8DCDF">
                <p style="text-align: center"><font color="#0096DB">
                <span style="font-size: 80%; font-weight: 700">Price</span></font></td>
                <td width="7%" style="text-align: center" height="44" bgcolor="#D8DCDF">&nbsp;</td>
              </tr>
              <tr>
                <td width="100%" height="14" colspan="4"></td>
              </tr>
              <?
				while($row=mysql_fetch_array($result)){
				$i=$i+1;
				$tot=$tot+$row["cart_subtotal"];
			  ?>
              <tr>
                <td width="4%" height="14">
                <p style="text-align: center"><font color="#0096DB"><? print($i); ?></font></td>
                <td width="54%" height="14">
                <p style="text-align: center"><span style="font-weight: 700">
                <? print("$row[cart_product_name]"); ?></span></td>
                <td width="12%" height="14">
                <p style="text-align: center"><b>$<? print round(("$row[cart_subtotal]"), 2); ?>.00</b></td>
                <td width="7%" height="14">
                <div style="float: left">
                  <p style="text-align: right">
                  <a href = "goremovecartitem.php?id=<? print("$row[id]"); ?>" onclick = "return confirm('Are you sure you want to remove <? print("$row[cart_product_name]"); ?> from your cart?');"><img border="0" src="images/buttons/btn_remove.gif" style="float: left" width="30" height="28"></a></div>
                </td>
              </tr>
              <?
              }
			  ?>
              <tr>
                <td width="77%" height="14" style="text-align: center" colspan="4">
                <hr color="#187BC0" size="1"></td>
              </tr>
              <tr>
                <td width="4%" height="14"></td>
                <td width="54%" height="14"></td>
                <td width="12%" height="14"></td>
                <td width="7%" height="14"></td>
              </tr>
              <tr>
                <td width="4%" height="14"></td>
                <td width="54%" height="14">
                <p style="text-align: right"><font color="#000000"><b>SUB TOTAL</b></font></td>
                <td width="12%" height="14">
                <p style="text-align: center">&nbsp;<font color="#0096DB"><b>$<? print($tot); ?>.00</b></font></td>
                <td width="7%" height="14"></td>
              </tr>
              <tr>
                <td width="4%" height="14"></td>
                <td width="54%" height="14"></td>
                <td width="12%" height="14"></td>
                <td width="7%" height="14"></td>
              </tr>
              <tr>
                <td width="77%" height="14" colspan="4">
                <div align="center">
                  <center>
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="80%" id="AutoNumber2">
                    <tr>
                      <td width="50%">&nbsp;</td>
                      <td width="50%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="50%">&nbsp;</td>
                      <td width="50%">
                      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3">
                        <tr>
                          <td width="25%">&nbsp;</td>
                          <td width="75%"> 
<img src="./images/buttons/paypal_group_02-White.gif" border="0" width="253" height="80" alt="Make payments with PayPal - it’s fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</td>
                        </tr>
                        <tr>
                          <td width="25%">&nbsp;</td>
                          <td width="75%">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="25%">&nbsp;</td>
                          <td width="75%"><form name = "frmpaypal" method = "post" action = "checkout_paypal.php"><input type = "image" border="0" src="images/buttons/btn_checkout.png" alt = "Checkout" width="203" height="30" /><input type = "hidden" name = "tot" value = "<? print($tot); ?>"></form></td>
                        </tr>
                        <tr>
                          <td width="25%">&nbsp;</td>
                          <td width="75%">&nbsp;</td>
                        </tr>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </center>
                </div>
                </td>
              </tr>
              <tr>
                <td width="4%" height="14"></td>
                <td width="54%" height="14"></td>
                <td width="12%" height="14"></td>
                <td width="7%" height="14"></td>
              </tr>
              <tr>
                <td width="4%" height="14"></td>
                <td width="54%" height="14"></td>
                <td width="12%" height="14"></td>
                <td width="7%" height="14"></td>
              </tr>
            </table>
            <? 
			}
			else
			{ 
			?>
            <p align="center"><b>Your shopping cart is empty</b></font></p>
            <? } ?>
            <p align="left">&nbsp;</p>           

           
                      
                
           
            <p align="left">&nbsp;</p>           

           
                      
                
           
            <p align="left">&nbsp;</div>    
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