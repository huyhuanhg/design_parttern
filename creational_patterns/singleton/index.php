<?php

/**
 * Singleton Class
 *
 * @property $instance
 * @method __construct
 * @method instance
 */
class Singleton {
    private static Singleton $instance;

    private function __construct()
    {
    }

    public static function instance(): Singleton
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/**
 * Normal Class
 */
class Normal {

}

$singleton1 = Singleton::instance();

$singleton2 = Singleton::instance();

$normal1 = new Normal();

$normal2 = new Normal();

var_dump($singleton1);

var_dump($singleton2);

var_dump($normal1);

var_dump($normal2);
