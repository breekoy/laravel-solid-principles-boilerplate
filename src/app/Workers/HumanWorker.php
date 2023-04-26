<?php

namespace App\Workers;

class HumanWorker implements WorkableInterface, EatableInterface, SleepableInterface {
    public function work() {
        //do work!
    }

    public function eat() {
        //eat a lot!
    }

    public function sleep() {
        //sleep adequate!
    }
}