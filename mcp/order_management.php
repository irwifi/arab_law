<?
include("../common.inc");
$query="select * FROM en_orders WHERE u_email !='' ORDER BY id DESC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
$num_rec = mysql_num_rows($result);
$rec_per_page = 25;
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
$query = "select * FROM en_orders WHERE u_email !='' ORDER BY id DESC";
}
else
{
$query = "select * FROM en_orders WHERE u_email !='' ORDER BY id DESC LIMIT $offset, $rec_per_page";
}
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Control Panel | Orders Management</title>
    
    
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
                
                <li><a href="#">Orders Management</a></li>
            
            </ul>
            
            <h1>&nbsp;&nbsp;Orders Management</h1>           
            <div align="center">
              <center>
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="98%" id="AutoNumber1">
                <tr>
                  <td width="100%">
                  <p style="text-align: center"><b>You have total
                  <font color="#0096DB"><? print($num_rec); ?></font> orders</b></td>
                </tr>
                <tr>
                  <td width="100%">
                  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 1" width="100%" id="AutoNumber2" bordercolordark="#D8DCDF" bordercolorlight="#D8DCDF">
                    <tr>
                      <td width="3%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">ID</font></b></td>
                      <td width="22%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">Name</font></b></td>
                      <td width="26%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">
                      Email</font></b></td>
                      <td width="13%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">
                      Amount</font></b></td>
                      <td width="14%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">Type</font></b></td>
                      <td width="8%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">
                      Status</font></b></td>
                      <td width="14%" style="text-align: center"><b>
                      <font size="2" color="#0096DB" style="font-size: 75%">Date</font></b></td>
                    </tr>
                    <tr>
                      <td width="100%" colspan="7"><hr></td>
                    </tr>
                    <?
                    	while($row=mysql_fetch_array($result)){
                    	$i=$i+1;
                    ?>
                    <tr>
                      <td width="3%" style="text-align: center">
                      <font color="#0096DB">
                      <span style="font-size: 90%; font-weight: 700"><a href = "order_details.php?id=<? print("$row[id]"); ?>&cart_id=<? print("$row[cart_id]"); ?>"><? print($i); ?></a></span></font>&nbsp;</td>
                      <td width="22%" style="text-align: left">
                      <font color="#3C4F5A"><span style="font-size: 90%"><? print("$row[u_lname]"); ?></span></font></td>
                      <td width="26%" style="text-align: left">
                      <a href="mailto:<? print("$row[u_email]"); ?>">
                      <span style="font-size: 90%"><font color="#3C4F5A">
                      <? print("$row[u_email]"); ?></font></span></a><font color="#3C4F5A"><span style="font-size: 90%">
                      </span></font></td>
                      <td width="13%" style="text-align: left">
                      <font color="#3C4F5A"><span style="font-size: 90%"><? print("$row[u_payment_currency]"); ?> 
                      <b><? print("$row[u_payment_amount]"); ?></b></span></font>&nbsp;</td>
                      <td width="14%" style="text-align: center">
                      <font color="#3C4F5A"><span style="font-size: 90%"><? print("$row[order_type]"); ?></span></font>&nbsp;</td>
                      <td width="8%" style="text-align: center">
                      <font color="#3C4F5A"><span style="font-size: 90%">
                      <? if($row["order_status"]=='P'){ ?>
                      Pending
                      <? }elseif($row["order_status"]=='C'){ ?>
                      Confirmed
                      <? }else{ ?>
                      Shipped
                      <? } ?>
                      </span></font></td>
                      <td width="14%" style="text-align: left">
                      <font color="#3C4F5A"><span style="font-size: 90%">
                      <? print("$row[u_payment_date]"); ?></span></font></td>
                    </tr>					
                    <?
                    }
                    ?>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
              </table>
              </center>
            </div>
           <p>&nbsp;</p>                          
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
			  print "&nbsp; <a href='order_management.php?&page_number=$i'>$i</a>&nbsp; | "; 
		 }
	 }
?>
           </p>
           
                      
                
           
           <p>&nbsp;
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