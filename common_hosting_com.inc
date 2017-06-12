<?php 
if (!ini_get('register_globals')) {
    $superglobals = array($_SERVER, $_ENV,
        $_FILES, $_COOKIE, $_POST, $_GET);
    if (isset($_SESSION)) {
        array_unshift($superglobals, $_SESSION);
    }
    foreach ($superglobals as $superglobal) {
        extract($superglobal, EXTR_SKIP);
    }
    ini_set('register_globals', true);
}  
$connection = mysql_connect('204.12.14.92', 'iponly198062', 'Zev6212next') or die("please contact support@wonderd.ae");
mysql_select_db("iponly198062", $connection);
?>
