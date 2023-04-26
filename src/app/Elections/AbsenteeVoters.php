<?php

namespace App\Elections;

use App\Models\Voter;
use Exception;

class AbsenteeVoters extends Voters implements VoterInterface
{
    public function getList (int $id) : array {
        //get absentee voters list from db
        $voter_list = Voter::query()
            ->where('status', 'Absentee')
            ->where('id', $id)
            ->get();

        //post condition
        if (empty($voter_list)) {
            return [
                'error' => true,
                'message' => 'Voter not found!',
                'data' => []
            ];
        }

        return [
            'error' => false,
            'message' => 'OK',
            'data' => $voter_list->toArray()
        ];
    }
}
