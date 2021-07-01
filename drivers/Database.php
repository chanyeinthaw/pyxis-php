<?php

namespace Driver;
use Illuminate\Database\Capsule\Manager as Capsule;

final class Database {
    public static function setup() {        
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => DB_HOST,
            'port' => DB_PORT,
            'database' => DB_NAME,
            'username' => DB_USER,
            'password' => DB_PASS,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ]);
        $capsule->bootEloquent();
        $capsule->setAsGlobal();
    }
}