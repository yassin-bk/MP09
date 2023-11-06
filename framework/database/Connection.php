<?php

namespace framework\database;

use PDO;


class Connection
{

    public static function make($config)
    {
        try {
            return new PDO(
                $config['databasetype'] . 'host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'], $config['password']);
        } catch (\Exception $e) {
            echo 'Error de connexio a la base de dades';

        }
    }
}
