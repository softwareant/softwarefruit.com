<?php
	require_once(dirname(__FILE__).'/User.php');
	require_once(dirname(__FILE__).'/../ConfigurationService/ConfigurationService.php');

	class LoginService
	{
		public static function LoginUsingUnEncryptedPassword($login, $password)
		{
			$user = new User();
			if ($login == 'anthonyjuospaitis@hotmail.com' && $password == 'password')
				$user->firstName = 'Anthony';
			else 
				$user = NULL;
			
			return $user;
		}
		
		public static function LoginUsingEncryptedPassword($login, $password)
		{
			$user = new User();
			if ($login == 'anthonyjuospaitis@hotmail.com' && $password == 'password')
				$user->firstName = 'Anthony';
			else 
				$user = NULL;
			
			return $user;
		}
				
		public static function executeQuery($sql, $params)
		{
			$config = new ConfigurationService('../../LoginService.ini');
			$config->GetSettingValue($section, $key);
			
		}
	}
?>