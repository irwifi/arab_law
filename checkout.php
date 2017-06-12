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
                                                          
    <option value="AF">Afghanistan</option>
	<option value="AX">�land Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">C�te d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Cura�ao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">R�union</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barth�lemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>

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