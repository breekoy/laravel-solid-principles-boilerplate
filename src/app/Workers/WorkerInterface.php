<?php

namespace App\Workers;

interface WorkerInterface {
    public function work();
    public function eat();
    public function sleep();
}