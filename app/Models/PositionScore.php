<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PositionScore extends Model
{
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'id');
    }

    public function score()
    {
        return $this->belongsTo('App\Models\Score', 'score_id', 'id');
    }
}
