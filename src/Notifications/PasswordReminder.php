<?php

namespace App\Notifications;

class PasswordReminder {
    private $databaseConnnection;

    public function __construct(ConnectionInterface $databaseConnnection)
    {
        $this->databaseConnnection = $databaseConnnection;
    }
}