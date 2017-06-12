<?php
if(strstr($_SERVER['HTTP_REFERER'], 'arablawsworld.com/shopping_cart.php') !== false || strstr($_SERVER['HTTP_REFERER'], 'arablawsworld.com/checkout_payment.php') !== false) {
session_start();
$cartid = session_id();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Checkout</title>
    
    
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

<SCRIPT LANGUAGE = "JavaScript">
function submitenquiry(form) {
	   
	    if(document.contactform.email.value=="" || document.contactform.email.value.length < 10 || document.contactform.email.value.length > 99){
		document.contactform.email.focus();
		document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML="Your email should contain at least 10 characters and not maore than 100 characters.";
		return;
	}else{
		document.getElementById('diserror').innerHTML="";
		document.getElementById('hideseek').style.display = "none";
	}
	
var str=document.contactform.email.value;
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
if (filter.test(str))
testresults=true
else{
document.contactform.email.focus();
document.contactform.email.select();
document.getElementById('hideseek').style.display = "block";
document.getElementById('diserror').innerHTML="Please enter your correct email address";
return;
}

	   if(document.contactform.card_holder_name.value=="" || document.contactform.card_holder_name.value.length > 50 || document.contactform.card_holder_name.value.length < 3){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter your complete name minimum 3 and maximum 50 characters long. ";
       document.contactform.card_holder_name.focus();
       document.contactform.card_holder_name.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 
	   
	   
	   if(document.contactform.street_address.value=="" || document.contactform.street_address.value.length > 100 || document.contactform.street_address.value.length < 5){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter your address minimum 5 and maximum 100 characters. ";
       document.contactform.street_address.focus();
       document.contactform.street_address.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 
	   
	   if(document.contactform.city.value=="" || document.contactform.city.value.length > 50 || document.contactform.city.value.length < 5){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter your city minimum 5 and maximum 50 characters. ";
       document.contactform.city.focus();
       document.contactform.city.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 


		 if(document.contactform.state.value=="" || document.contactform.state.value.length > 50 || document.contactform.state.value.length < 5){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter your state or province minimum 5 and maximum 50 characters. ";
       document.contactform.state.focus();
       document.contactform.state.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 

if(document.contactform.zip.value=="" || document.contactform.zip.value.length > 50 || document.contactform.zip.value.length < 3){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter your zip or postal code minimum 3 and maximum 50 characters. ";
       document.contactform.zip.focus();
       document.contactform.zip.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 
	   
	  
if(document.contactform.country.selectedIndex == -1 || document.contactform.country.options[document.contactform.country.selectedIndex].text == "Please Select"){
	    document.contactform.country.focus();
		document.getElementById('hideseek').style.display = "block";
	    document.getElementById('diserror').innerHTML="Please select your country of living from the list.";	    
	    return;
	   }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML="";
	   } 

 if(document.contactform.phone.value=="" || document.contactform.phone.value.length > 15 || document.contactform.phone.value.length < 5){
       document.getElementById('hideseek').style.display = "block";
		document.getElementById('diserror').innerHTML = " Please enter correct phone or mobile number minimum 5 and maximum 15 digits. ";
       document.contactform.phone.focus();
       document.contactform.phone.select();
       return;
       }else{
		document.getElementById('hideseek').style.display = "none";
	   document.getElementById('diserror').innerHTML = "";
	   } 
	   
contactform.submit();  
}
	
</SCRIPT>

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
                
                <li><a href="#">Checkout</a></li>
            
            </ul>
            
            <h1>Checkout</h1>    

			      	<?
				$query = "SELECT * FROM en_cart WHERE cart_id = '$cartid'";
				$result = mysql_query($query) or die("There is an error in database please contact support@arablawsworld.com");
		   ?>         
           <p>
            <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber1">

              <?
				$tot = 0;
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
            
            <h3 style="display:block; width:400px;">Billing Information</h3>
				<form action="checkout_payment.php" method="post" name = "contactform" id = "contactform">
				<input type = "hidden" name = "cartid" value = "<? print($cartid); ?>">
				<input type = "hidden" name = "tot" value = "<? print($tot); ?>">
				<div id ="hideseek" style="display:none"><div id ="diserror" class = "error_box"></div></div>
				<div class="form_inner">				 

					<label>Email *</label>
					 
					<span><input name="email" id = "email" type="text" value="<?php print($_SESSION["email"]); ?>" /></span>
				
					<label>Name *</label>
					
					<span><input name="card_holder_name" id = "card_holder_name" type="text" value="<?php print($_SESSION["card_holder_name"]); ?>" /></span>
	 
					<label>Address *</label>
					
					<span><input name="street_address" id = "street_address" type="text" value="<?php print($_SESSION["street_address"]); ?>" /></span>
					
					 <label>City *</label>
					
					<span><input name="city" id = "city" type="text" value="<?php print($_SESSION["city"]); ?>" /></span>
					 
					<label>State / Province *</label>
					
					<span><input name="state" id = "state" type="text" value="<?php print($_SESSION["state"]); ?>" /></span>

						<label>Zip /Postal Code *</label>
					
					<span><input name="zip" id = "zip" type="text" value="<?php print($_SESSION["zip"]); ?>" /></span>

						<label>Country *</label>
					
					<span><SELECT class="select" name="country" id = "country">
														<?
															if(empty($_SESSION["country"])){
														?>
                                                          <option value="Please Select" selected>Please Select</option>
														  <? }else{ ?>
															<option value="<? print($_SESSION["country"]); ?>" selected><? print($_SESSION["country"]); ?></option>
															<? } ?>
                                                          
                                                          <OPTION value="United States">United States</option>
                                                          <OPTION value="United Kingdom">United Kingdom</option>
														  <OPTION value="Canada">Canada</option>
														  <OPTION value="United Arab Emirates">United Arab Emirates</option>
                                                          
                                                        
                                                                                                                   <OPTION 
                    value=ALBANIA>Albania 
                                                          <OPTION value=ALGERIA>Algeria 
                                                          <OPTION 
                    value=ANDORRA>Andorra 
                                                          <OPTION value=ANGOLA>Angola 
                                                          <OPTION 
                    value=ANTIGUA>Antigua 
                                                          <OPTION 
                    value=ARGENTINA>Argentina 
                                                          <OPTION value=ARUBA>Aruba 
                                                          <OPTION 
                    value="ASCENSION ISLANDS">Ascension Islands 
                                                          <OPTION 
                    value=AUSTRALIA>Australia 
                                                          <OPTION 
                    value=AUSTRIA>Austria 
                                                          <OPTION value=AZORES>Azores 
                                                          <OPTION 
                    value="BAHAMAS, WEST INDIES">Bahamas, West Indies 
                                                          <OPTION 
                    value=BAHRAIN>Bahrain 
                                                          <OPTION 
                    value=BANGLADESH>Bangladesh 
                                                          <OPTION 
                    value="BARBADOS,WEST INDIES">Barbados,west Indies 
                                                          <OPTION 
                    value=BELARUS>Belarus 
                                                          <OPTION value=BELGIUM>Belgium 
                                                          <OPTION 
                    value=BELIZE>Belize 
                                                          <OPTION value=BENIN>Benin 
                                                          <OPTION 
                    value=BERMUDA>Bermuda 
                                                          <OPTION value=BHUTAN>Bhutan 
                                                          <OPTION 
                    value=BOLIVIA>Bolivia 
                                                          <OPTION value=BOTSWANA>Botswana 
                                                          <OPTION 
                    value=BRAZIL>Brazil 
                                                          <OPTION value=BRUNEI>Brunei 
                                                          <OPTION 
                    value="BURKINA FASO">Burkina Faso 
                                                          <OPTION 
                    value=BURUNDI>Burundi 
                                                          <OPTION value=CAMBODIA>Cambodia 
                                                          <OPTION 
                    value=CAMEROON>Cameroon 
                                                          <OPTION value="CANARY ISLANDS">Canary 
                                                          Islands 
                                                          <OPTION value="CAPE VERDE ISLANDS">Cape 
                                                          Verde Islands 
                                                          <OPTION value="CAROLINE ISLANDS">Caroline 
                                                          Islands 
                                                          <OPTION value="CAYMAN ISLAND">Cayman 
                                                          Island 
                                                          <OPTION 
                    value="CENTRAL AFRICAN REP">Central African Rep 
                                                          <OPTION 
                    value=CHAD>Chad 
                                                          <OPTION value=CHILE>Chile 
                                                          <OPTION 
                    value=CHINA>China 
                                                          <OPTION value=COLOMBIA>Colombia 
                                                          <OPTION 
                    value="COMOROS ISLANDS">Comoros Islands 
                                                          <OPTION 
                    value=CONGO>Congo 
                                                          <OPTION value="COSTA RICA">Costa 
                                                          Rica 
                                                          <OPTION value=CYPRUS>Cyprus 
                                                          <OPTION 
                    value="CZECH REPUBLIC">Czech Republic 
                                                          <OPTION 
                    value=DENMARK>Denmark 
                                                          <OPTION value=DJIBOUTI>Djibouti 
                                                          <OPTION 
                    value="DOMINICAN REPUBLIC">Dominican Republic 
                                                          <OPTION 
                    value="EAST TIMOR">East Timor 
                                                          <OPTION 
                    value=ECUADOR>Ecuador 
                                                          <OPTION value=EGYPT>Egypt 
                                                          <OPTION 
                    value="EL SALVADOR">El Salvador 
                                                          <OPTION 
                    value="EQUATORIAL GUINEA">Equatorial Guinea 
                                                          <OPTION 
                    value=ESTONIA>Estonia 
                                                          <OPTION value=ETHIOPIA>Ethiopia 
                                                          <OPTION 
                    value="FALKLAND ISLANDS">Falkland Islands 
                                                          <OPTION 
                    value=FIJI>Fiji 
                                                          <OPTION value=FINLAND>Finland 
                                                          <OPTION 
                    value=FRANCE>France 
                                                          <OPTION value="FRENCH GUIANA">French 
                                                          Guiana 
                                                          <OPTION value="FRENCH POLYNESIA">French 
                                                          Polynesia 
                                                          <OPTION value=GABON>Gabon 
                                                          <OPTION 
                    value="THE GAMBIA">Gambia 
                                                          <OPTION value=GHANA>Ghana 
                                                          <OPTION 
                    value=GIBRALTAR>Gibraltar 
                                                          <OPTION 
                    value=GREENLAND>Greenland 
                                                          <OPTION 
                    value="GRENADA, WEST INDIES">Grenada, West Indies 
                                                          <OPTION 
                    value=GUADELOUPE>Guadeloupe 
                                                          <OPTION 
                    value=GUATEMALA>Guatemala 
                                                          <OPTION value=GUINEA>Guinea 
                                                          <OPTION 
                    value=GUINEA-BISSAU>Guinea-bissau 
                                                          <OPTION 
                    value=GUYANA>Guyana 
                                                          <OPTION value=HAITI>Haiti 
                                                          <OPTION 
                    value=HONDURAS>Honduras 
                                                          <OPTION value="HONG KONG">Hong 
                                                          Kong 
                                                          <OPTION value=ICELAND>Iceland 
                                                          <OPTION 
                    value=INDIA>India 
                                                          <OPTION value=INDONESIA>Indonesia 
                                                          <OPTION 
                    value=IRELAND>Ireland 
                                                          <OPTION value=ISRAEL>Israel 
                                                          <OPTION 
                    value=ITALY>Italy 
                                                          <OPTION value="IVORY COAST">Ivory 
                                                          Coast 
                                                          <OPTION value="JAMAICA, WEST INDIES">Jamaica, 
                                                          West Indies 
                                                          <OPTION value=JORDAN>Jordan 
                                                          <OPTION 
                    value=KENYA>Kenya 
                                                          <OPTION value=KIRIBATI>Kiribati 
                                                          <OPTION 
                    value=KUWAIT>Kuwait 
                                                          <OPTION value=LAOS>Laos 
                                                          <OPTION 
                    value=LATVIA>Latvia 
                                                          <OPTION value=LEBANON>Lebanon 
                                                          <OPTION 
                    value="LEEWARD ISLANDS">Leeward Islands 
                                                          <OPTION 
                    value=LESOTHO>Lesotho 
                                                          <OPTION value=LIBERIA>Liberia 
                                                          <OPTION 
                    value=LIECHTENSTEIN>Liechtenstein 
                                                          <OPTION 
                    value=LITHUANIA>Lithuania 
                                                          <OPTION 
                    value=LUXEMBOURG>Luxembourg 
                                                          <OPTION value=MACAO>Macao 
                                                          <OPTION 
                    value=MADAGASCAR>Madagascar 
                                                          <OPTION 
                    value="MADEIRA ISLANDS">Madeira Islands 
                                                          <OPTION 
                    value=MALAWI>Malawi 
                                                          <OPTION value=MALAYSIA>Malaysia 
                                                          <OPTION 
                    value=MALDIVES>Maldives 
                                                          <OPTION value=MALI>Mali 
                                                          <OPTION 
                    value=MALTA>Malta 
                                                          <OPTION value=MARTINIQUE>Martinique 
                                                          <OPTION 
                    value=MARUITIUS>Maruitius 
                                                          <OPTION 
                    value=MAURITANIA>Mauritania 
                                                          <OPTION 
                    value=MEXICO>Mexico 
                                                          <OPTION value=MONACO>Monaco 
                                                          <OPTION 
                    value=MONGOLIA>Mongolia 
                                                          <OPTION value=MOROCCO>Morocco 
                                                          <OPTION 
                    value=MOZAMBIQUE>Mozambique 
                                                          <OPTION 
                    value=MYANMAR>Myanmar 
                                                          <OPTION value=NAMIBIA>Namibia 
                                                          <OPTION 
                    value=NAURU>Nauru 
                                                          <OPTION value=NEPAL>Nepal 
                                                          <OPTION 
                    value=NETHERLANDS>Netherlands 
                                                          <OPTION 
                    value="NETHERLANDS ANTILLES">Netherlands Antilles 
                                                          <OPTION 
                    value="NEW CALEDONIA">New Caledonia 
                                                          <OPTION 
                    value="NEW ZEALAND">New Zealand 
                                                          <OPTION 
                    value=NICARAGUA>Nicaragua 
                                                          <OPTION value=NIGER>Niger 
                                                          <OPTION 
                    value=NIGERIA>Nigeria 
                                                          <OPTION value=NORWAY>Norway 
                                                          <OPTION 
                    value=OMAN>Oman 
                                                          <OPTION value=PAKISTAN>Pakistan 
                                                          <OPTION 
                    value=PANAMA>Panama 
                                                          <OPTION value="PAPUA NEW GUINEA">Papua 
                                                          New Guinea 
                                                          <OPTION value=PARAGUAY>Paraguay 
                                                          <OPTION 
                    value=PERU>Peru 
                                                          <OPTION value=PHILIPPINES>Philippines 
                                                          <OPTION 
                    value="PITCAIRN ISLANDS">Pitcairn Islands 
                                                          <OPTION 
                    value=POLAND>Poland 
                                                          <OPTION value=PORTUGAL>Portugal 
                                                          <OPTION 
                    value=QATAR>Qatar 
                                                          <OPTION value="REUNION ISLAND">Reunion 
                                                          Island 
                                                          <OPTION value=ROMANIA>Romania 
                                                          <OPTION 
                    value=RUSSIA>Russia 
                                                          <OPTION value=RWANDA>Rwanda 
                                                          <OPTION 
                    value="SAINT HELENA">Saint Helena 
                                                          <OPTION 
                    value="SAINT LUCIA">Saint Lucia 
                                                          <OPTION 
                    value="SANTA CRUZ ISLANDS">Santa Cruz Islands 
                                                          <OPTION 
                    value="SAO TOME &amp; PRINCIPE">Sao Tome &amp; Principe 
                                                          <OPTION value="SAUDI ARABIA">Saudi 
                                                          Arabia 
                                                          <OPTION 
                    value=SENEGAL>Senegal 
                                                          <OPTION 
                    value=SEYCHELLES>Seychelles 
                                                          <OPTION 
                    value="SIERRA LEONE">Sierra Leone 
                                                          <OPTION 
                    value=SINGAPORE>Singapore 
                                                          <OPTION 
                    value="SOLOMON ISLANDS">Solomon Islands 
                                                          <OPTION 
                    value="SOUTH AFRICA">South Africa 
                                                          <OPTION 
                    value="SOUTH KOREA">South Korea 
                                                          <OPTION 
                    value=SPAIN>Spain 
                                                          <OPTION value="SRI LANKA">Sri 
                                                          Lanka 
                                                          <OPTION 
                    value="ST VINCENT &amp; GRENADI">St Vincent &amp; Grenadi 
                                                          <OPTION value=SURINAME>Suriname 
                                                          <OPTION 
                    value=SWAZILAND>Swaziland 
                                                          <OPTION value=SWEDEN>Sweden 
                                                          <OPTION 
                    value=SWITZERLAND>Switzerland 
                                                          <OPTION 
                    value=SYRIA>Syria 
                                                          <OPTION value=TAIWAN>Taiwan 
                                                          <OPTION 
                    value=TANZANIA>Tanzania 
                                                          <OPTION 
                    value=THAILAND>Thailand 
                                                          <OPTION value=TOGO>Togo 
                                                          <OPTION 
                    value=TONGA>Tonga 
                                                          <OPTION 
                    value="TRINIDAD &amp; TOBAGO">Trinidad &amp; Tobago 
                                                          <OPTION 
                    value="TRISTAN DE CUNHA">Tristan De Cunha 
                                                          <OPTION 
                    value=TUNISIA>Tunisia 
                                                          <OPTION value=TURKEY>Turkey 
                                                          <OPTION 
                    value="TURKS &amp; CAICOS ISLND">Turks &amp; Caicos Islnd 
                                                          <OPTION value=TUVALU>Tuvalu 
                                                          <OPTION 
                    value=UGANDA>Uganda 
                                                          <OPTION value=UKRAINE>Ukraine 
                                                          <OPTION 
                    value="UNITED ARAB EMIRATES">United Arab Emirates 
                                                          <OPTION 
                    value=URUGUAY>Uruguay 
                                                          <OPTION value=VANUATU>Vanuatu 
                                                          <OPTION 
                    value="VATICAN CITY">Vatican City 
                                                          <OPTION 
                    value=VENEZUELA>Venezuela 
                                                          <OPTION 
                    value=VIETNAM>Vietnam 
                                                          <OPTION value="WESTERN SAMOA">Western 
                                                          Samoa 
                                                          <OPTION value=YEMEN>Yemen 
                                                          <OPTION 
                    value=ZAIRE>Zaire 
                                                          <OPTION value=ZAMBIA>Zambia 
                                                          <OPTION 
                    value=ZIMBABWE>Zimbabwe</OPTION>
                                                        </SELECT></span>

						<label>Phone /Mobile *</label>
					
					<span><input name="phone" id = "phone" type="text" value="<? print($_SESSION["phone"]); ?>" /></span>
					<label><button type="button" width = "187" height = "32" name = "btnregister" id = "btnregister" style="border: 0; background: transparent" onclick="submitenquiry();">
<img src="images/buttons/btn_checkout_payment.gif" class="send" width = "187" height = "32" />
</button></label>				
				
				</div>


				
				
				
<div class="form_foot">
</div>

			</form>            
            </fieldset>
			</div>
			
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
   
</body>
</html>
<?
mysql_close();
}else{
print("There was an issue, please try again.");
}
?>