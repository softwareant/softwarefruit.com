<?php
	require_once(dirname(__FILE__).'/../LoginService.php');

	class LoginServiceTest extends PHPUnit_Framework_TestCase
	{
		protected $loginNameSuccess;
		protected $loginPasswordSuccessUnEncrypted;
		protected $loginPasswordSuccessEncrypted;
		protected $loginNameFailure;
		protected $loginPasswordFailureUnEncrypted;
		protected $loginPasswordFailureEncrypted;
			
		public function setUp()
		{
			$this->loginNameSuccess = 'anthonyjuospaitis@hotmail.com';
			$this->loginPasswordSuccessUnEncrypted = 'password';
			$this->loginPasswordSuccessEncrypted = 'password';
			
			$this->loginNameFailure = 'anthonyjuospaitis@hotmail.com';
			$this->loginPasswordFailureUnEncrypted = 'pessword';
			$this->loginPasswordFailureEncrypted = 'pessword';
		}
		
		public function testLoginSuccessUnEncrypted()
		{
			$user = LoginService::LoginUsingUnEncryptedPassword($this->loginNameSuccess, $this->loginPasswordSuccessUnEncrypted);
			$this->assertEquals('Anthony', $user->firstName);
		}
		
		public function testLoginSuccessEncrypted()
		{
			$user = LoginService::LoginUsingEncryptedPassword($this->loginNameSuccess, $this->loginPasswordSuccessEncrypted);
			$this->assertEquals('Anthony', $user->firstName);
		}
		
		public function testLoginFailureUnEncrypted()
		{
			$user = LoginService::LoginUsingUnEncryptedPassword($this->loginNameFailure, $this->loginPasswordFailureUnEncrypted);
			$this->assertEquals(NULL, $user);
		}
	
		public function testLoginFailureEncrypted()
		{
			$user = LoginService::LoginUsingEncryptedPassword($this->loginNameFailure, $this->loginPasswordFailureEncrypted);
			$this->assertEquals(NULL, $user);
		}
		
	}
?>
