<?php

namespace App\Session;

class Session
{
    public static function start()
    {
        session_start();
    }

    // Define um valor na sessão
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Obtém um valor da sessão
    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Remove um valor da sessão
    public static function remove($key) {
        unset($_SESSION[$key]);
    }

    // Destroi a sessão
    public static function destroy() {
        session_unset();
        session_destroy();
    }
}