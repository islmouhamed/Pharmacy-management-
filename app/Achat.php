<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use SoftDeletes;

    protected $dates=['delete_at' ];

    public function fournisseur(){
        return $this-> belongsTo('App\Fournisseur','id_fourni');
    }

    public function lot(){
        return $this-> hasMany('App\Lot');
    }
    
}
