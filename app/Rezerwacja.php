<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezerwacja extends Model
{
    protected $fillable = [

      'datarezerwacji', 'kwotalaczna', 'dataod', 'datado', 'nrpokoju', 'idklienta', 'idstatusu'
    ];

    public function client()
    {
        return $this->belongsTo('App\Klient','idklienta');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','idstatusu');
    }
}
