<?php
	header('Access-Control-Allow-Origin: *');  
	$o = shell_exec("sudo python /var/www/html/on.py ".$_GET['one']." ".$_GET['two']);
	print_r($o);
?>
