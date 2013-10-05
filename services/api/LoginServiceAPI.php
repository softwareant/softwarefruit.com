<?php
require_once '/Applications/MAMP/htdocs/shared/library/services/LoginService/LoginServiceAPI.php';

if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) 
{
	$_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try 
{
	$API = new LoginServiceAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
	echo $API->processAPI();
} 
catch (Exception $e) 
{
	echo json_encode(Array('error' => $e->getMessage()));
}
?>