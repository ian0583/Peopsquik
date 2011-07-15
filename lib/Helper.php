<?
class Helper
{
	public static function sanitize($data)
	{
		if (is_array($data))
		{
			foreach ($data as $key => $value)
			{
				if (is_array($value))
				{
					$data[$key] = Core_Helper::sanitizeAll($value);
				}
				else
				{
					$data[$key] = addslashes(urlencode($value));
				}
			}

			return $data;
		}
		else
		{
			return addslashes(urlencode($data));
		}

	}

	public static function desanitize($data)
	{
		if (is_array($data))
		{
			foreach ($data as $key => $value)
			{
				if (is_array($value))
				{
					$data[$key] = Core_Helper::desanitize($value);
				}
				else
				{
					$data[$key] = urldecode(stripslashes($value));
				}
			}

			return $data;
		}
		else
		{
			return urldecode(stripslashes($data));
		}
	}

	public static function updateSession($key, $data)
	{
		$_SESSION[APP_NAME][$key] = $data;
	}

	public static function getSession($key)
	{
		if (isset($_SESSION[APP_NAME][$key]))
		{
			return $_SESSION[APP_NAME][$key];
		}
		else
		{
			return null;
		}
	}

	public static function clearSession($key)
	{
		if (isset($_SESSION[APP_NAME][$key]))
		{
			unset($_SESSION[APP_NAME][$key]);
		}
	}

	public static function prettyBacktrace($data, $key, $length)
	{
		if ($key > 0)
		{
			extract($data, EXTR_REFS);
			echo "<br/><b>" . ($length - $key) . ":</b><br/>\n";
			echo "<b>File:</b> $file<br/>\n";
			echo "<b>Line:</b> $line<br/>\n";
			echo "<b>Function:</b> $function<br/>\n";
		}
	}
	
}