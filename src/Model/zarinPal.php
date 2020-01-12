<?php


namespace Larabookir\Gateway\Model;
use Illuminate\Database\Eloquent\Model;

class zarinPal extends Model
{
protected $table='Gateway_zarinPal';
protected  $fillable=[
    'merchant_id',
    'type',        // Types: [zarin-gate || normal]
    'callbackUrl',
    'server' ,           // Servers: [germany || iran || test]
    'email' ,
    'mobile' ,
    'description',
];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}