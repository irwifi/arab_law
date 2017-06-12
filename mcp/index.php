<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Control Panel</title>
    
    
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
function submitLogin() {

	if(document.frmlogin.txtusername.value=="" || document.frmlogin.txtusername.value.length < 3 || document.frmlogin.txtusername.value.length > 20){
		document.frmlogin.txtusername.focus();
		document.getElementById('txtmsg').innerHTML="Username must contains at least 3 characters and not maore than 20 characters.";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}
	
	if(document.frmlogin.txtpassword.value=="" || document.frmlogin.txtpassword.value.length < 3 || document.frmlogin.txtpassword.value.length > 20){
		document.frmlogin.txtpassword.focus();
		document.getElementById('txtmsg').innerHTML="Password must contains at least 3 characters and not maore than 20 characters.";
		return;
	}else{
		document.getElementById('txtmsg').innerHTML="<span></span>";
	}


frmlogin.submit();        
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
	</div>
</div>
    	
        <!-- MAIN CONTENT -->
        
        <div id="section">            
            
            <div class="acontentadmin">
            
            <ul class="breadcrumb">
            
            	<li><a href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                
                <li>/</li>
                
                <li><a href="./index.php">Control Panel</a></li>
            
            </ul>
            
            <h1>&nbsp;&nbsp;Control Panel</h1>           
           <p>
           &nbsp;
           </p>
            <div align="center">
              <center>
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="97%" id="AutoNumber1">
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
                <tr>
                  <td width="100%">
                  <div class = "error" style="text-align: center"><font color="#FF0000"><b><span id = "txtmsg">
                    <? print($msg); ?></b></font></span></div>
  <br />
    <form id="frmlogin" name = "frmlogin" method = "post" action = "go-verify-admin.php">
    <div style="float:left;padding-right: 25px;"> 
  		<p> 
        <label for="username">Username:</label>
        <br />
        <input id="txtusername" name="txtusername" size="50" maxlength="15" type="text"  class="input-text" />
      </p>
      <p> 
        <label for="itemname">Password</label>
        <br />
        <input id="txtpassword" name="txtpassword" size="50" maxlength="50" type="password"  class="input-text"/>
      </p>
      <p> 
        <input id = "loginbutton" value="Login >>>" type="button" onclick = "submitLogin()" />
        &nbsp;</p>
        </form>
       </div>
  <div class="clearPlz">
                  </td>
                </tr>
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
              </table>
              </center>
            </div>
           <p>
           &nbsp;
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