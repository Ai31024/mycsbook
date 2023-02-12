<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'demo');

$db = mysql_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false){
    die("Error: connection error.".mysql_connect_error());
}
?>