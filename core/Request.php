<?php
namespace Core;

class Request
{
    public static function redirect(string $path): void
    {
        header("Location: " . Url::get($path));
        die();
    }

    public static function getPath(): string
    {
        $path = strtok($_SERVER['REQUEST_URI'], '?'); // remove the query string
        $path = str_replace('/' . Url::getFrontName(), '', $path); // remove the frontname witch is "mvc";

        if (strlen($path) > 1) {
            $path = rtrim($path, '/'); // remove the last /
        }

        return $path;
    }

    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function getPost($key): ?string
    {
        return isset($_POST[$key]) ? trim($_POST[$key]) : null;
    }
}
