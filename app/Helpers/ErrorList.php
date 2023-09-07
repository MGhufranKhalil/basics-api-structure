<?php

namespace App\Helpers;

use DB;

class ErrorList
{
	public static $error;

	public static function setError($message)
	{
		self::$error = $message;

		return false;
	}

	public static function getError()
	{
		return self::$error;
	}
}
