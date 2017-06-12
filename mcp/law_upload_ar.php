<?
include("../common.inc");
$query="select catid, cat from ar_cats WHERE cat_publish =  'Y' ORDER BY cat ASC";
$result = mysql_query($query) or die("There is an error in database please contact support@wonderd.ae");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<head>
    <title>Control Panel | Upload New Law | Arabic Law</title>
    
    
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
    <script type="text/javascript">
function submitProduct() {

	if(document.frmproduct.law_cat.selectedIndex == -1 || document.frmproduct.law_cat.options[document.frmproduct.law_cat.selectedIndex].text == "Please select main category"){
	    document.frmproduct.law_cat.focus();
	    document.getElementById('txtmsg').innerHTML="Please select main category from list.";	    
	    return;
	   }else{
	   document.getElementById('txtmsg').innerHTML="<span></span>";
	   } 

	if(document.frmproduct.law_sku.value=="" || document.frmproduct.law_sku.value.length < 3 || document.frmproduct.law_sku.value.length > 20){
		document.frmproduct.law_sku.focus();
		document.getElementById('txtmsg').innerHTML="Please enter law code, minimum 3 and maximum 20 characters allowed.";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}
	
	if(document.frmproduct.law_title.value=="" || document.frmproduct.law_title.value.length < 10 || document.frmproduct.law_title.value.length > 200){
		document.frmproduct.law_title.focus();
		document.getElementById('txtmsg').innerHTML="Please enter law title, minimum 10 and maximum 200 characters allowed.";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}
	
	if(document.frmproduct.law_desc.value=="" || document.frmproduct.law_desc.value.length < 10 || document.frmproduct.law_desc.value.length > 750){
		document.frmproduct.law_desc.focus();
		document.getElementById('txtmsg').innerHTML="Please enter law description, minimum 10 and maximum 750 characters allowed.";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}
	
if(document.frmproduct.law_price.value=="" || document.frmproduct.law_price.value.length < 2 || document.frmproduct.law_price.value.length > 10 || isNaN(document.frmproduct.law_price.value) ){
document.frmproduct.law_price.focus();
document.getElementById('txtmsg').innerHTML="Please enter correct selling price minimum 2 and maximum 10 numbers allowed.";       
return;
}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	 }
	
	if(document.frmproduct.law_file.value==""){
		document.frmproduct.law_file.focus();
		document.getElementById('txtmsg').innerHTML="Please upload law file";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}
	


frmproduct.submit();        
}
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
            
            	<li><a href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                
                <li>/</li>
                
                <li><a href="#">Upload Laws</a></li>
            
            </ul>
            
            <h1>&nbsp;&nbsp;Upload Arabic Law</h1>           
            <div align="center">
              <center>
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="97%" id="AutoNumber1">
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
                <tr>
                  <td width="100%">
                  <div align="center">
                    <center>
                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="83%" id="AutoNumber2" height="185">
                    <form id = "frmproduct" name = "frmproduct" action="go-add-law-ar.php" method="post" enctype="multipart/form-data" >
                     <tr>
                        <td width="100%" colspan="3">
                        <p style="text-align: center"><font color="#FF0000"><b><span id = "txtmsg"><? print($txtmsg); ?></b></font></span></td>
                      </tr>
                     
                      <tr>
                        <td width="80%" height="24" colspan="3">
                        <p style="text-align: right"><select class="input-text" name="law_cat" id = "law_cat">
        <option value = "Please select main category" selected>Please select main category</option>
        <? while($row=mysql_fetch_array($result)) { ?>
        <option value = "<? print("$row[catid]"); ?>"><? print("$row[cat]"); ?></option>
		<? } ?>
        </select></td>
                        <td width="120%" height="24">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="167">
                            <span style="font-size: 150%">الفئة</span></span></span></font></div>
                        </div>
                        </td>
                      </tr>
                      
                       <tr>
                        <td width="80%" colspan="3" height="21">
                        <input name="law_sku" class="input-text" id="law_sku" size="70" maxlength="190" style="float: right" dir="rtl"/></td>
                        <td width="120%" height="21">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="95">
                            <span style="font-size: 150%">معرف</span></span><span style="font-size: 150%">
                            </span>
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="96">
                            <span style="font-size: 150%">القانون</span></span></span></font></div>
                        </div>
                        </td>
                      </tr>
                      
                      
                      <tr>
                        <td width="80%" colspan="3" height="21">
                        <input name="law_title" class="form_field" id="law_title" size="70" maxlength="210" style="float: right" dir="rtl" /></td>
                        <td width="120%" height="21">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="95">
                            <span style="font-size: 150%">عنوان</span></span><span style="font-size: 150%">
                            </span>
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="96">
                            <span style="font-size: 150%">قانون</span></span></span></font></div>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="80%" height="24" colspan="3">
                        <p style="text-align: right">
                        <textarea name="law_desc" cols=54 rows="11" class="form_field_textarea" id="law_desc" dir="rtl"></textarea></td>
                        <td width="120%" height="24">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="109">
                            <span style="font-size: 150%">وصف</span></span><span style="font-size: 150%">
                            </span>
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="110">
                            <span style="font-size: 150%">القانون</span></span></span></font></div>
                        </div>
                        <p style="text-align: right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="80%" height="25" colspan="3">
                        <input name="law_price" class="form_field" id="law_price" size="70" maxlength="8" style="float: right" dir="rtl" /></td>
                        <td width="120%" height="25">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="120">
                            <span style="font-size: 150%">قانون</span></span><span style="font-size: 150%">
                            </span>
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="121">
                            <span style="font-size: 150%">السعر</span></span></span></font></div>
                        </div>
                        <p style="text-align: right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>                      
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="80%" height="23" colspan="3">
                        <input name="law_file" type="file" class="form_field" id="law_file" size="57" maxlength="250" style="float: right" dir="rtl" /></td>
                        <td width="120%" height="23">
                        <div id="gt-res-content" class="almost_half_cell">
                          <div style="ZOOM: 1" dir="rtl">
                            <font color="#0096DB">
                            <span id="result_box" lang="ar" class="short_text">
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="158">
                            <span style="font-size: 150%">رفع</span></span><span style="font-size: 150%">
                            </span>
                            <span class="hps" title="Click for alternate translations" closure_uid_2qnun5="159">
                            <span style="font-size: 150%">ملف</span></span></span></font></div>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="80%" height="14" colspan="3">
                        <p style="text-align: center"><input type="button" name="enqbutton" class="form_button" id="enqbutton" value="حفظ" onclick = "submitProduct();" /></td>
                        <td width="120%" height="14"></td>
                      </tr>
                      <tr>
                        <td width="47%" height="14"></td>
                        <td width="2%" height="14"></td>
                        <td width="31%" height="14"></td>
                        <td width="71%" height="14"></td>
                      </tr>
                    </table>
                    </form>
                    </center>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
              </table>
              </center>
            </div>
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