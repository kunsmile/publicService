<?php

/* 
 * Author: Tuan ThaiManh
 */

session_destroy();
header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
?>