<?php
	class DatabaseWrapper
	{
		public $databaseConnectionDetails;
	
		public function DatabaseWrapper()
		{
			
		}
				
		private function GeneratePDOConnString()
		{
			return $this->databaseConnectionDetails->serverType.':host='.$this->databaseConnectionDetails->server.';dbname='.$this->databaseConnectionDetails->databaseName;
		}
		
		public function ExecuteSelect($sql, $params)
		{
			try 
			{
				$dbh = new PDO($this->GeneratePDOConnString(), $this->databaseConnectionDetails->loginName, $this->databaseConnectionDetails->password);
				
				$st = $dbh->prepare($sql);
				for ($i=0; $i < $params.length; $i++) 
				{
					$st->bindParam($i, $param);
				}
				$rows = $st->execute();

				$dbh = null;
				
				return $rows;
			}
			catch (PDOException $e) 
			{
				//print "Error!: " . $e->getMessage() . "<br/>";
				//die();
				$dbh = null;
			}		
		}
	}