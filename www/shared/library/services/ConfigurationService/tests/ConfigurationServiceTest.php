<?php
	require_once(dirname(__FILE__).'/../ConfigurationService.php');


	class ConfigurationServiceTest extends PHPUnit_Framework_TestCase
	{
		protected $configFilenameSuccess;
		protected $configFilenameFailure;
		protected $sectionSuccess;
		protected $keySuccess;
		protected $valueSuccess;
		
		protected $sectionFailure;
		protected $keyFailure;
		protected $valueFailure;
		
		public function setUp()
		{
			$this->configFilenameSuccess = dirname(__FILE__).'/../../../configuration/LoginService.ini';
			$this->configFilenameFailure = dirname(__FILE__).'/../../../configuration/FakeService.ini';
			$this->sectionSuccess = 'DatabaseSettings';
			$this->keySuccess = 'Server';
			$this->valueSuccess = 'localhost';
			$this->sectionFailure = 'DatabaseSettingss';
			$this->keyFailure = 'Servers';
			$this->valueFailure = NULL;
		}
		
		public function testConstructorSuccess()
		{
			$config = new ConfigurationService($this->configFilenameSuccess);		
			$this->assertEquals(true, $config->isValid);
		}
		
		public function testConstructorFailure()
		{
			$config = new ConfigurationService($this->configFilenameFailure);
			$this->assertEquals(false, $config->isValid);
		}
		
		public function testGetSettingSuccess()
		{
			$config = new ConfigurationService($this->configFilenameSuccess);
			$this->assertEquals($this->valueSuccess,$config->GetSettingValue($this->sectionSuccess, $this->keySuccess) );
		}
	
		public function testGetSettingFailureFileInvalid()
		{
			$config = new ConfigurationService($this->configFilenameFailure);
			$this->assertEquals($this->valueFailure,$config->GetSettingValue($this->sectionSuccess, $this->keySuccess) );
		}

		public function testGetSettingFailureSectionInvalid()
		{
			$config = new ConfigurationService($this->configFilenameSuccess);
			$this->assertEquals($this->valueFailure,$config->GetSettingValue($this->sectionFailure, $this->keySuccess) );
		}
		
		public function testGetSettingFailureKeyInvalid()
		{
			$config = new ConfigurationService($this->configFilenameSuccess);
			$this->assertEquals($this->valueFailure,$config->GetSettingValue($this->sectionSuccess, $this->keyFailure) );
		}
		
	}
?>