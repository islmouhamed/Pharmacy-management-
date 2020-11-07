<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use SoftDeletes;

    protected $dates=['delete_at' ];

    public function achat(){
        return $this-> hasMany('App\Achat');
    }
}
