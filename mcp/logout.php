<?php
function Redirect($URL)
		{		
			print
				("
					<Script Langugae = 'JavaScript'> 
					location.href = '$URL';
					</Script>
				");	
		
		}
include("../common.inc");	
setcookie ("cadminid", "", time() - 14400);
Redirect("index.php?msg=You have been successfuly loged out from Control Panel.");
?>