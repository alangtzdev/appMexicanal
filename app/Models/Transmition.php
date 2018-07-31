<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transmition extends Model
{
    protected $table = 'transmitions';
    protected $primarykey = 'id_Transmition';
    protected $fillable = ['id_Program','id_TypeTransmition','id_City',
    'day','nationalTime','RTG','SH','percentReach','AVGpercentViewed',
    'HH','AA','totalHoursViewed'];
   
   public function program(){
      return $this->belongsTo('App\Models\Program', 'id_Program');
   }
   
   public function typetransmition(){
      return $this->belongsTo('App\Models\TypeTransmition', 'id_TypeTransmition');
   }
   
   public function city(){
      return $this->belongsTo('App\Models\City', 'id_City');
   }
}
