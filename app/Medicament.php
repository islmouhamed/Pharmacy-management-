<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    // use SoftDeletes;

    //protected $dates=['delete_at' ];

    public function lot(){
        return $this-> hasMany('App\Lot','id_med');
    }

   public function getdispoAttribute(){
        $listlot=Lot::where('id_med',$this->id)->get();
          
        foreach($listlot as $lot)
        {
            if($lot->qt_st>0)
              {return "oui";}

        }
       return "non";
   }
}
