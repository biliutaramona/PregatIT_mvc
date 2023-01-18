<?php
namespace Core;

class Url
{
    const FRONTNAME = 'PregatIT_mvc';

    public static function getFrontName(): string
    {
        return self::FRONTNAME;
    }

	public static function get($path = null): string
	{
		$path = $path ?? $_SERVER['REQUEST_URI'];
        $path = self::FRONTNAME . '/' . ltrim($path, '/');
		
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/$path";
	}
}
