<?php


namespace Larabookir\Gateway\Model;
use Illuminate\Database\Eloquent\Model;

class saman extends Model
{
protected $table='Gateway_saman';
protected  $fillable=[
    'merchant'    ,
    'password'     ,
    'callback-url'
];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}