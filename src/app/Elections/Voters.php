<?php

namespace App\Elections;

use Exception;

class Voters {
    public function getList (int $id) {
        //assuming this array is filled with voters list.
        $voter_list = [
            [
                'id' => 1,
                'name' => 'John'
            ],
            [
                'id' => 2,
                'name' => 'Jane'
            ]
        ];

        //get the voter by id
        foreach ($voter_list as $voter) {
            if ($voter['id'] === $id) {
                $found_voter = $voter;
            }
        }

        //post condition
        if (empty($found_voter)) {
            throw new Exception('Voter not found');
        }

        return $found_voter;
    }
}