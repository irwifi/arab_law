<?
include("../common.inc");
$query = "SELECT * FROM en_orders WHERE id =$id";
$result = mysql_query($query) or die("There is an error. Please contact support@riodubai.com");
$row = mysql_fetch_array($result);
$ordstatus = $row["order_status"];
if($ordstatus=="P"){
$ordstatus = "Pending";
}
elseif($ordstatus=="C"){
$ordstatus = "Confirmed";
}
else
{
$ordstatus = "Shipped";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Control Panel | Order Details</title>
    
    
<!-- META TAGS -->

	
	
<!--  FAVOURITE ICON -->
	
	<link rel="icon" type="image/png" href="../fav.png" />
	
<!-- CSS -->
	
	<link href="../styles/styles.css" rel="stylesheet" type="text/css" media="all" />
		
	<!--[if gte IE 6]>
	<link href="./styles/ie.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->
	
	<!--[if lt IE 7]>
	<link href="./styles/ie6.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->   
	
<!-- JAVASCRIPT -->
	<script type="text/javascript" src="../scripts/jquery-1.2.4.min.js"></script>
	<script type="text/javascript" src="../scripts/cufon-yui.js"></script>	
	<script type="text/javascript" src="../scripts/competa.font.js"></script>	
	<script type="text/javascript" src="../scripts/jquery.pngFix.js"></script>
	
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
    <script type="text/javascript" src="../scripts/jquery.cycle.mod.js"></script>
	<script type="text/javascript" src="../scripts/slideshow.js"></script>
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
		
		
		
		
		<!-- end search form -->
		<? include("navigation.php"); ?>
	</div>
</div>
    	
        <!-- MAIN CONTENT -->
        
        <div id="section">            
            
            <div class="acontentadmin">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;Control Panel</a></li>
                
                <li>/</li>
                
                <li><a href="./order_management.php">Order Management</a></li>
            
            </ul>
            
            <h1>&nbsp;&nbsp;Order Details</h1>    
            <p>&nbsp;</p>       
            <div align="center">
              <center>
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="97%" id="AutoNumber1">
                <tr>
                  <td width="46%"><font color="#0096DB" style="font-size: 75%">
                  <b>CUSTOMER INFORMATION</b></font></td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#D8DCDF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%"><font color="#0096DB">
                  <span style="font-size: 75%"><b>PAYMENT</b></span></font><font color="#0096DB" style="font-size: 75%"><b> 
                  INFORMATION</b></font></td>
                </tr>
                <tr>
                  <td width="46%">
                  <hr>&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#D8DCDF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%"><hr>&nbsp;</td>
                </tr>
                <tr>
                  <td width="46%" style="vertical-align: top">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" height="25">
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Name:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_fname]"); ?>&nbsp;<? print("$row[u_lname]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Address:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_address]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">City:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_city]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">State:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_state]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Zip / 
                      P.O.Box:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[uzip]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Country:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_country]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Phone:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_phone]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Fax:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_fax]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Mobile:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_phone]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Email:</span></td>
                      <td width="77%" height="25">
                      <a href="mailto:<? print("$row[u_email]"); ?>">
                      <span style="font-size: 80%"><? print("$row[u_email]"); ?></span></a><span style="font-size: 80%">
                      </span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">&nbsp;</td>
                      <td width="77%" height="25">&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#D8DCDF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%" style="vertical-align: top">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" height="25">
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Payment 
                      Method</span><span style="font-size: 75%; font-weight: 700">:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[order_type]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-size: 75%; font-weight: 700">Amount 
                      Paid:</span></td>
                      <td width="77%" height="25">
                      <span style="font-size: 80%; font-weight: 700"><? print("$row[u_payment_currency]"); ?>&nbsp;<? print("$row[u_payment_amount]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Payment 
                      Status</span><span style="font-size: 75%; font-weight: 700">:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_payment_status]"); ?> [ <u><b><? print("$row[u_payment_txn_id]"); ?></b></u> ]</span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Payment 
                      Date</span><span style="font-size: 75%; font-weight: 700">:</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_payment_date]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="100%" height="25" colspan="2">&nbsp;
                      </td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Order Total</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[order_total]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Order Date</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[u_payment_date]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Order 
                      Status</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <strong><? print($ordstatus); ?></strong></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Order 
                      Updated</span></td>
                      <td width="77%" height="25"><span style="font-size: 80%">
                      <? print("$row[order_update]"); ?></span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">
                      <span style="font-weight: 700; font-size: 75%">Updated 
                      Action</span></td>
                      <td width="77%" height="25">
                      <span style="font-size: 80%"><? print("$row[order_update_action]"); ?></span><span style="font-size: 80%">
                      </span></td>
                    </tr>
                    <tr>
                      <td width="23%" height="25">&nbsp;</td>
                      <td width="77%" height="25">&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="46%">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%">&nbsp;</td>
                </tr>
                <tr>
                  <td width="104%" colspan="5"><font color="#0096DB">
                  <span style="font-size: 75%"><b>PRODUCT INFORMATION</b></span></font></td>
                </tr>
                <tr>
                  <td width="104%" colspan="5"><hr></td>
                </tr>
                <tr>
                  <td width="104%" colspan="5">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 1" width="100%" id="AutoNumber3" height="57" bordercolordark="#FFFFFF" bordercolorlight="#FFFFFF">
                    <tr>
                      <td width="3%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">No.</span></font></td>
                      <td width="12%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">Product 
                      Code</span></font></td>
                      <td width="48%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">Product 
                      Name</span></font></td>
                      <td width="12%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">Quantity</span></font></td>
                      <td width="12%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">Price</span></font></td>
                      <td width="13%" height="30" bgcolor="#FFFFFF" style="text-align: center">
                      <font color="#23343E">
                      <span style="font-size: 80%; font-weight: 700">Downloads</span></font></td>
                    </tr>
<?
$query1 = "SELECT * FROM en_cart WHERE cart_id = '$cart_id'";
$result1 = mysql_query($query1) or die("There is an error. Please contact support@wonderworlddubai.com");
while($row1=mysql_fetch_array($result1)){
$i=$i+1;
?>
                    <tr>
                      <td width="3%" height="23" style="text-align: center">
                      <font color="#0096DB">
                      <span style="font-size: 90%; font-weight: 700"><? print($i); ?></span></font></td>
                      <td width="12%" height="23" style="text-align: center">
                      <span style="font-size: 90%"><? print("$row1[cart_product_id]"); ?></span></td>
                      <td width="48%" height="23" style="text-align: center">
                      <span style="font-size: 90%"><? print("$row1[cart_product_name]"); ?></span></td>
                      <td width="12%" height="23" style="text-align: center">
                      <span style="font-size: 90%"><? print("$row1[cart_qty]"); ?></span></td>
                      <td width="12%" height="23" style="text-align: center">
                      <span style="font-size: 90%; font-weight: 700">USD <? print("$row1[cart_subtotal]"); ?></span></td>
                      <td width="13%" height="23" style="text-align: center">
                      <span style="font-size: 90%"><? print("$row1[cart_downloads]"); ?></span></td>
                    </tr>
                    <?
                    }
                    ?>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="46%">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%">&nbsp;</td>
                </tr>
                <tr>
                  <td width="46%">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="52%">&nbsp;</td>
                </tr>
              </table>
              </center>
            </div>
           <p>&nbsp;</p>
                      
                
           
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