<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokoje extends Model
{
    public function status()
    {
        return $this->belongsTo('App\Status','idstatusu');
    }
}
