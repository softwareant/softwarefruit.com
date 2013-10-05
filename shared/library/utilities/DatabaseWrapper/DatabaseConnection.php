<?php
class DatabaseConnection
{
	public $serverType;
	public $server;
	public $databaseName;
	public $loginName;
	public $password;
	
	const SECTION_DB_SETTINGS = 'DatabaseSettings';
	const KEY_DB_TYPE = 'ServerType';
	const KEY_DB_SERVER = 'Server';
	const KEY_DB_NAME = 'DatabaseName';
	const KEY_DB_USERNAME = 'Username';
	const KEY_DB_PASSWORD = 'Password';
	
	
	public function DatabaseConnection()
	{
		
	}
	
	public function SetFromConfig($configurationService)
	{
		$this->serverType = $configurationService->GetSettingValue(self::SECTION_DB_SETTINGS, self::KEY_DB_TYPE);
		$this->server = $configurationService->GetSettingValue(self::SECTION_DB_SETTINGS, self::KEY_DB_SERVER);
		$this->databaseName = $configurationService->GetSettingValue(self::SECTION_DB_SETTINGS, self::KEY_DB_NAME);
		$this->loginName = $configurationService->GetSettingValue(self::SECTION_DB_SETTINGS, self::KEY_DB_USERNAME);
		$this->password = $configurationService->GetSettingValue(self::SECTION_DB_SETTINGS, self::KEY_DB_PASSWORD);
	}
	
}