<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class vent extends Model
{
    use SoftDeletes;

    protected $dates=['delete_at' ];
    public function lots(){
        return $this-> belongsToMany('App\lot')->withPivot('nbr_medicaments','prix_total_produit');
    }
    public function user(){
        return $this-> belongsTo('App\user','id_phar');
    }

    public function ventlot (){
        return $this-> hasMany('App\Ventlot');
    }
}
