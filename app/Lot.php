<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Lot extends Model
{
    use SoftDeletes;

    protected $dates=['delete_at' ];
    
    public function achat(){
        return $this-> belongsTo('App\Achat','num_A');
    }
    public function medicament(){
        return $this-> belongsTo('App\Medicament','id_med');
    }
    public function ventlot(){
        return $this-> hasMany('App\VentLot','lot_id');
    }
}
