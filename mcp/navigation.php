<?
function Redirectss($URL)
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					location.href = '$URL';
					</Script>
				");	
		
		}			
if (isset($cadminid)) {
$cadminname = ($cadminid);
} else {
Redirectss("./index.php?msg=please authenticate yourself to access control panel.");
}
?>
 <!-- NAVIGATION -->	
<br />
        <!-- <div align = "right"><h1>UAE  GCC  GULF Laws Online</h1></div> -->
        <br />
        <br />
        <br />
		<ul class="sub">
            <li>
				<a href="./index.php"><strong>Home</strong></a>
			</li>
			<li>
				<a href="./order_management.php"><strong>Order Management</strong></a>
			</li>
			<li>
				<a href="./laws_management_arabic.php"><strong>Laws Management Arabic</strong></a>
			</li>
			<li>
				<a href="./laws_managment_english.php"><strong>Laws Management English</strong></a>
			</li>
            <li>
				<a href="./law_upload.php"><strong>Upload Laws</strong></a>
			</li>
			<li>
				<a href="./logout.php"><strong>Logout</strong></a>
			</li>
		</ul>
		
<!-- NAVIGATION  -->
