<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function position()
    {
        return $this->belongsTo('App\Models\Position', 'position_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level', 'level_id', 'id');
    }

    public function positionScore()
    {
        return $this->hasMany('App\Models\PositionScore', 'employee_id', 'id');
    }
}
