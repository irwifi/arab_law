<?php 
if(strstr($_SERVER['HTTP_REFERER'], 'arablawsworld.com/checkout.php') !== false) {
session_start();
$cartid = session_id();

$mysql_host='localhost'; //Leave at localhost 
$mysql_user='jam05pgs_arablaw'; //DB User 
$mysql_pass='26x@$R/[|]BTb1K'; //DB Pass 
$mysql_db='jam05pgs_arablaws'; //DB Name 

$db = mysql_connect($mysql_host, $mysql_user, $mysql_pass); 
mysql_select_db($mysql_db, $db); 


$dt = date('Y-m-d H:i:s');
$u_email = mysql_real_escape_string($_POST["email"]);
$u_name = mysql_real_escape_string($_POST["card_holder_name"]);
$u_address = mysql_real_escape_string($_POST["street_address"]);
$u_city = mysql_real_escape_string($_POST["city"]);
$u_state = mysql_real_escape_string($_POST["state"]);
$u_zip = mysql_real_escape_string($_POST["zip"]);
$u_country = mysql_real_escape_string($_POST["country"]);
$u_phone = mysql_real_escape_string($_POST["phone"]);
$tot = $_POST["tot"];

$query = "SELECT * FROM en_orders WHERE cart_id = '$cartid'";
$result = mysql_query($query) or die("There is an error in database please contact info@arablawsworld.com");
$num_rec = mysql_num_rows($result);

if($num_rec > 0){
$_SESSION["email"] = $_POST["email"];
$_SESSION["card_holder_name"] = $_POST["card_holder_name"];
$_SESSION["street_address"] = $_POST["street_address"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["state"] = $_POST["state"];
$_SESSION["zip"] = $_POST["zip"];
$_SESSION["country"] = $_POST["country"];
$_SESSION["phone"] = $_POST["phone"];
$query = "UPDATE en_orders SET order_total = $tot, order_type = '2Checkout', u_fname = '$u_name', u_lname = '$u_name', u_address = '$u_address', u_city = '$u_city', u_state = '$u_state', u_zip = '$u_zip', u_country='$u_country', u_phone='$u_phone', u_email='$u_email', order_status='P', order_update='$dt' WHERE cart_id = '$cartid'";
$result = mysql_query($query) or die("There is an error in database please contact info@arablawsworld.com");
}else{
$_SESSION["email"] = $_POST["email"];
$_SESSION["card_holder_name"] = $_POST["card_holder_name"];
$_SESSION["street_address"] = $_POST["street_address"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["state"] = $_POST["state"];
$_SESSION["zip"] = $_POST["zip"];
$_SESSION["country"] = $_POST["country"];
$_SESSION["phone"] = $_POST["phone"];
$query = "INSERT INTO en_orders(cart_id, order_total, order_type, u_fname, u_lname, u_address, u_city, u_state, u_zip, u_country, u_phone, u_email, order_status, order_update)VALUES('$cartid', $tot, '2Checkout', '$u_name', '$u_name', '$u_address', '$u_city', '$u_state', '$u_zip',  '$u_country', '$u_phone', '$u_email', 'P', '$dt')";
$result = mysql_query($query) or die("There is an error in database please contact info@arablawsworld.com");

$too = "info@arablawsworld.com";  
$headerss  = 'MIME-Version: 1.0' . "\r\n";
$headerss .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headerss .= 'To: Jamal Ahmed Malik <jam05pgs@yahoo.com>' . "\r\n";
$headerss .= 'From: Arab Laws Online <info@arablawsworld.com>' . "\r\n";
$headerss .= 'Bcc: jam05pgs@yahoo.com' . "\r\n";			  
$notify_subject = "ORDER RECEIVED - $cartid";
$notify_body =  "<b>Dear Mr. Jamal Ahmed</b><br>".
				"<br>This mail is to notify you that order has been placed on Arab Laws Website<br>".
				"<br>Order Placed By:  <b>$u_name</b>".
				"<br>Order E-mail: <b>$u_email</b>".
				"<br>Order Number: <b>$cartid</b>".
				"<br>Order Amount: <b>US DOLLARS $tot</b>".
				"<br><br><br>Regards".
				"<br>Arab Laws World";	  	  
                 mail($too, $notify_subject, $notify_body, $headerss);

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Checkout - Payment</title>
    
    
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
    	
</div>

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
                
                <li><a href="./shopping_cart.php">Shopping Cart</a></li>
                           <li>/</li>
                
                <li><a href="./checkout.php">Checkout</a></li>
                                           <li>/</li>
                
                <li><a href="#">Payment</a></li>
            
            </ul>
            
            <h1>Payment</h1>    

			<?
				$query = "SELECT * FROM en_cart WHERE cart_id = '$cartid'";
				$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
		   ?>         
           <p>
            <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1">

              <?
				$tot =0;
				while($row=mysql_fetch_array($result)){
				$i=$i+1;
				$tot=$tot+$row["cart_subtotal"];
			  ?>
              <tr>
                <td width="10%" height="14"><p style="text-align: center"><font color="#0096DB"><? print($i); ?></font></td>
                <td width="70%" height="14"><p style="text-align: left"><span style="font-weight: 700"><a href = "#"><? print("$row[cart_product_id]"); ?></a> - <? print("$row[cart_product_name]"); ?></span></td>
                <td width="20%" height="14"><p style="text-align: center"><b>US$ <? print round(("$row[cart_subtotal]"), 2); ?>.00</b></td>
              </tr>
              <?
              }
			  ?>
              <tr>
                <td width="100%" height="14" style="text-align: center" colspan="4">
                <hr color="#187BC0" size="0.5"></td>
              </tr>    
            </table>
			</p>  
			<p style="text-align: right">Amount Due: <font color="#0096DB"><b>US$ <? print($tot); ?>.00 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b></font>	

            <div id= "form" class = "form">							
			           
       		<fieldset>
            
            <h3 style="display:block; width:400px;">Final Step - Payment</h3>
            
            <p align="left"><a href = "./checkout.php">Modify Billing Information</a> | <a href = "./shopping_cart.php">Modify Shopping Cart</a><br />
			<?php print($_SESSION["email"]); ?><br />
					
					<?php print($_SESSION["card_holder_name"]); ?><br />
					
					<?php print($_SESSION["street_address"]); ?><br />
					
					<?php print($_SESSION["city"]); ?><br />
					
					<?php print($_SESSION["state"]); ?><br />
					
					<?php print($_SESSION["zip"]); ?><br />
					
					<?php print($_SESSION["country"]); ?><br />
					
					<?php print($_SESSION["phone"]); ?><br /><br />
                    
					Click on the "MAKE PAYMENT" button below to make secure payment, please allow few seconds to load payment window after pressing button. You may pay by credit cards, debit cards and paypal. Download link and invoice will be sent to your email address within few seconds of your purchase.<br />
                    
                   
				
<div class="form_foot">
</div>           
            </fieldset>
			</div>
<p align = "left">
<form action='https://www.2checkout.com/checkout/purchase' method='post'>
    <input type='hidden' name='sid' value='1521630' />
    <input type='hidden' name='mode' value='2CO' />
    <input type='hidden' name='li_0_name' value='<?php print($cartid);  ?>' />
    <input type='hidden' name='li_0_price' value='<?php print($tot);  ?>' />
    <input type='hidden' name='card_holder_name' value='<?php print($u_name);  ?>' />
    <input type='hidden' name='street_address' value='<?php print($u_address);  ?>' />
    <input type='hidden' name='street_address2' value='<?php print($u_address);  ?>' />
    <input type='hidden' name='city' value='<?php print($u_city);  ?>' />
    <input type='hidden' name='state' value='<?php print($u_state);  ?>' />
    <input type='hidden' name='zip' value='<?php print($u_zip);  ?>' />
    <input type='hidden' name='country' value='<?php print($u_country);  ?>' />
    <input type='hidden' name='email' value='<?php print($u_email);  ?>' />
    <input type='hidden' name='phone' value='<?php print($u_phone);  ?>' />
	<input type='hidden' name='merchant_order_id' value='<?php print($cartid); ?>'>
	<input type="hidden" name="x_receipt_link_url" value="http://www.arablawsworld.com/2checkout_notify_success.php"/>
    <input type='image' src = "./images/buttons/btn_payment.gif" width = "187" height = "32" />
</form>
</p>
			
			<p align = "center"><br /><img src = "./images/icons/payment_methods.png" alt = "Secure Payment Methods" title = "Secure Payment Methods"></p>

                
                
           
            <p align="left">&nbsp;</div>    
                </div>        
    </div>    
    <div id="bottom"></div>
    
    <!-- FOOTER -->
    <? include("footer.php"); ?>
<!-- END FOOTER  -->
</div>
<!-- END -->
   <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
</body>
</html>
<?
mysql_close();
}else{
print("There was an issue,please try again.");
}
?>
