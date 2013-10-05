<?php

class Crypt
{
	public static function CrpytPassword($plainTextPassword)
	{
		return $hash('sha256',$plainTextPassword);
	}
}