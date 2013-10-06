<?php
require_once getenv('UTILS_PATH').'/RESTAPI/AbstractAPI.php';
class ConcreteAPI extends AbstractAPI
{
	
	public function __construct($request, $origin)
	{
		parent::__construct($request);
		/*
		 // Abstracted out for example
		//$APIKey = new Models\APIKey();
		$User = new Models\User();

		if (!array_key_exists('apiKey', $this->request))
		{
		throw new Exception('No API Key provided');
		}
		else if (!$APIKey->verifyKey($this->request['apiKey'], $origin))
		{
		throw new Exception('Invalid API Key');
		}
		else if (array_key_exists('token', $this->request) &&
				!$User->get('token', $this->request['token']))
			throw new Exception('Invalid User Token');
		*/
	
			
	}
		
	protected function users()
	{
		$str = 'method: '.$this->method."\n";
		$str .='endpoint: '.$this->endpoint."\n";
		$str .='verb: '.$this->verb."\n";
		$str .='args'.print_r($this->args,true)."\n";
		$str .='file'.$this->file."\n";
		return "Function ".$str;		
	}
	
}
?>