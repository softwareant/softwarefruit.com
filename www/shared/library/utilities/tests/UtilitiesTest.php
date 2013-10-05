<?php
	require_once(dirname(__FILE__).'/../DatabaseWrapper/DatabaseConnection.php');
	require_once(dirname(__FILE__).'/../DatabaseWrapper/DatabaseWrapper.php');
//	require_once(dirname(__FILE__).'/../../services/ConfigurationService/ConfigurationService.php');


	class UtilitiesTest extends PHPUnit_Framework_TestCase
	{
		
		protected $configFilenameSuccess;
		protected $configFilenameFailure;
		
		public function setUp()
		{
			$this->configFilenameSuccess = dirname(__FILE__).'/../../configuration/LoginService.ini';
			$this->configFilenameFailure = dirname(__FILE__).'/../../configuration/FakeService.ini';
		}
		
		public function testDatabaseConnectionConstructorSuccess()
		{
			$dbConnDetails = new DatabaseConnection();
			$dbConnDetails->SetFromConfig(new ConfigurationService($this->configFilenameSuccess));
			$this->assertEquals('gabandan_anthony',$dbConnDetails->loginName);
		}
		
		public function testDatabaseConnectionConstructorFailure()
		{
			$dbConnDetails = new DatabaseConnection();
			$dbConnDetails->SetFromConfig(new ConfigurationService($this->configFilenameFailure));
			$this->assertNull($dbConnDetails->loginName);
		}
		
		public function testDatabaseWrapperSuccess()
		{
			$dbConnDetails = new DatabaseConnection();
			$dbConnDetails->SetFromConfig(new ConfigurationService($this->configFilenameSuccess));
			$this->assertEquals('gabandan_anthony',$dbConnDetails->loginName);
			$wrapper = new DatabaseWrapper();
			$wrapper->databaseConnectionDetails = $dbConnDetails;
			$wrapper->ExecuteSelect('select * from users', null);
		}
	}
	
?>