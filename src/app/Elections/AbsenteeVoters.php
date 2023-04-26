<?php

namespace App\Elections;

use App\Models\Voter;
use Exception;

class AbsenteeVoters extends Voters
{
    public function getList($id)
    {
        //pre condition
        if (!is_int($id)) {
            throw new Exception('$id must be integer.');
        }

        //get all voters list from db
        $voter_list = Voter::all();

        //get the voter by id
        foreach ($voter_list as $voter) {
            if ($voter->id === $id) {
                $found_voter = $voter;
            }
        }

        //post conditions
        if (empty($found_voter)) {
            throw new Exception('Voter not found');
        }

        if ($found_voter->status !== 'Absentee') {
            throw new Exception('Voter is not absentee');
        }

        return $found_voter;
    }
}
