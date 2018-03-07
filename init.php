<?php
define('BASE_PATH', realpath(dirname(__FILE__)));
include(BASE_PATH.'/lib/downloadlink.php');

//functions
function formatBytes($bytes, $precision = 2) {
	$units = array('B', 'KB', 'MB', 'GB', 'TB');
	$bytes = max($bytes, 0);
	$pow = floor(($bytes ? log($bytes) : 0) / log(1024));
	$pow = min($pow, count($units) - 1);
	$bytes /= pow(1024, $pow);
	
	return number_format($bytes, $precision, ",", ".") . ' ' . $units[$pow];
}
?>