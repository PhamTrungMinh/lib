<?php
define("DBHOST","localhost");
define("DBUSERNAME","root");
define("DBPASSWORD","");
define("DB","lib");
$conn = mysqli_connect(DBHOST,DBUSERNAME,DBPASSWORD,DB);
mysqli_set_charset($conn, 'UTF8');
?>
