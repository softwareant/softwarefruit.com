<?php
require_once getenv('SERVICES_PATH').'/ConcreteAPI.php';

if (!array_key_exists('HTTP_ORIGIN', $_SERVER))
	{
		$_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
	}
	
	try
	{
			$API = new ConcreteAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
			echo $API->processAPI();
		}
		catch (Exception $e)
		{
			echo json_encode(Array('error' => $e->getMessage()));
		}
?>