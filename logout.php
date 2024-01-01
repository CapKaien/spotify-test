<?php
require 'vendor/autoload.php';
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
/* debug shiz
if(session_status() !== PHP_SESSION_ACTIVE)
print_r(
    "ncie"
);
*/

session_start();
session_regenerate_id(true);

header("Location: index.php");
die();
