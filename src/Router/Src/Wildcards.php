<?php
declare(strict_types=1);

namespace Sienekib\Mehael\Router\Src;

class Wildcards
{
    public static function foundWildcards(string $route) : mixed
    {
        $pattern = "/^\/{([a-zA-Z\_]+)}\/\(([a-z]+):([a-z]+)\)/";
        
        $pattern2 = "/^\/([a-zA-Z\_]+)\/([a-zA-Z\_]+)\/\(([a-z]+):([a-z]+)\)/";


        return preg_match($pattern, $route) ||  preg_match($pattern2, $route);
    }

    public static function check(string $wild)
    {
        return preg_match('/^\(([a-z]+):([a-z]+)\)$/', $wild);
    }

}