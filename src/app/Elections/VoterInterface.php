<?php

namespace App\Elections;

interface VoterInterface {
    public function getList (int $id) : array;
}