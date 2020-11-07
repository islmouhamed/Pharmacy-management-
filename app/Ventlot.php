<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventlot extends Model
{
    protected $table='vent_lots';
   
    public function vent(){
        return $this-> belongsTo('App\vent','vent_id');
    }

    public function lot(){
        return $this-> belongsTo('App\Lot','lot_id');
    }
}
