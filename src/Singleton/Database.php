<?php

namespace App\Singleton;

class Database
{
    private static $instance;

    private function __construct()
    {
    }

    static public function getInstance(): Database
    {
        if (null !== Database::$instance) {
            /** We already have the connection */
        } else {
            Database::$instance = new Database();
        }

        return Database::$instance;
    }
}
