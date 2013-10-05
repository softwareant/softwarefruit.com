<?php
require_once getenv('UTILS_PATH').'/RESTAPI/API.php';
class LoginServiceAPI extends API
{
	//protected $User;

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

	/**
	 * Example of an Endpoint
	 */
	protected function example()
	{
		if ($this->method == 'GET')
		{
			return "Your name is " . 'AAA';
		}
		else
		{
			return "Only accepts GET requests";
		}
	}
	
	protected function describe()
	{
		if ($this->method == 'GET')
		{
			// a.
			// b.
			// c.
			$str = 'method: '.$this->method."<BR>";
			$str .='|endpoint: '.$this->endpoint."<BR>";
			$str .='|verb: '.$this->verb."<BR>";
			//$str .='|args'.print_r($this->args)."<BR>";
			$str .='|args'.$this->args."<BR>";
			$str .='|file'.$this->file."<BR>";
			
			return "Function ".$str;
		}
		else
		{
			return "Only accepts GET requests";
		}
		
	}
	
	protected function auth()
	{
		if ($this->method == 'GET')
		{
			return "Your name is " . 'BBB'.print_r($this->args);
		}
		else
		{
			return "Only accepts GET requests";
		}
	
	}

}
?>