<?php

namespace App\Notifications;

use Illuminate\Database\MySqlConnection;

class MysqlConnector implements ConnectionInterface {
    public $connection;

    public function connect() {
        //connect to MYSQL DATABASE
        $connection = new MySqlConnection();
    }
}