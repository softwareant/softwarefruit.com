<?php
	require_once 'Config.php';
	class ConfigurationService
	{
		public $cfg;
		public $isValid;
		
		function ConfigurationService($filename)
		{
			$this->isValid = false;
			$conf = new Config();
			$root = $conf->parseConfig($filename, 'inifile');
			if (!PEAR::isError($root))
			{
				$this->cfg = $root->toArray();
				$this->isValid = true;
			}
		}
		
		function GetSettingValue($section,$key)
		{
			if ($this->isValid)
			{
				if (isset($this->cfg['root'][$section]))
				{
					return isset($this->cfg['root'][$section][$key]) ? $this->cfg['root'][$section][$key] : NULL; 
				}
				else
				{
					return NULL;
				}
			}
			else 
			{
				return NULL;
			}
		}		
	}
?>