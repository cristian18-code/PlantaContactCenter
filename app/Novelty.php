<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novelty extends Model
{
    //

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }
}