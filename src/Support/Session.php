<?php

namespace Sienekib\Mehael\Support;

class Session
{
    private static $instance = null;

    public function __construct()
    {
        //self::destroy();
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new Session();
        }
        return static::$instance;
    }

    public static function start()
    {

        /*\ini_set('session.gc_lifetime', '1800'); 
        \ini_set('session.cookie_lifetime', 0);
        //\ini_set('session.cookie_secure', '1');
        \ini_set('session.cookie_httponly', '1');
        \ini_set('session.use_trans_sid', '0');
        //session_cache_limiter('private');
        \ini_set('session.use_cookies', 'true');
        //session_save_path(__DIR__ . '/');
        session_start();
        session_register_shutdown();*/
        /*session_write_close();

        session_cache_expire(0);
        session_start([
            'gc_maxlifetime' => 0,
            'cookie_lifetime' => 0,
        ]);


        session_gc();*/

        //var_dump(ini_get('session.cookie_lifetime'));
        //var_dump($_COOKIE);exit;
        /*ini_set('session.gc_maxlifetime', 1800); 
        ini_set('session.use_only_cookies', 1);
        //ini_set('session.cookie_lifetime', -1); // ou um valor específico em segundos
    
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }*/
    }

    public static function has(string $key)
    {
        return isset($_SESSION[$key]);
    }

    public static function setFlashMessage(string $key, string $message)
    {
        $_SESSION['__flash'][$key] = $message;
    }

    public static function hasFlash(string $key)
    {
        return isset($_SESSION['__flash'][$key]);
    }

    public static function getFlashMessage(string $key)
    {
        $flash_value = null;

        if (self::hasFlash($key)) {
            $flash_value = $_SESSION['__flash'][$key];
            self::removeFlash($key);
        }

        return $flash_value;
    }

    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeFlash(string $key)
    {
        unset($_SESSION['__flash'][$key]);
    }

    public static function auth()
    {
        return static::has('user_id');
    }

    public static function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;

        return new static;
    }

    public function regenerateId()
    {
        //session_regenerate_id();
    }

    public static function get(string $key)
    {
        return static::has($key) ? $_SESSION[$key] : null;
    }

    public static function destroy()
    {
        foreach ($_SESSION as $key => $value) {
            if (self::has($key)) {
                self::remove($key);
            }
        }
        $_SESSION = array();
    }

    public static function destroyFlash()
    {
        if (self::has('__flash')) {
            foreach ($_SESSION['__flash'] as $key => $value) {
                if (self::has($key)) {
                    self::remove($key);
                }
            }
        }

    }
}
