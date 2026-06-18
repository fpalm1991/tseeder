<?php

namespace Tseeder\Tseeder;

use Exception;

class Tseeder
{
    private static ?Tseeder $instance = null;

    private function __construct()
    {
        Theme::init();
        Navigation::init();
    }

    private function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup(): never
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): Tseeder
    {
        if (self::$instance === null) {
            self::$instance = new Tseeder();
        }

        return self::$instance;
    }
}
