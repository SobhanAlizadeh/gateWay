<?php


namespace Larabookir\Gateway\Model;
use Illuminate\Database\Eloquent\Model;

class mellat extends Model
{
protected $table='Gateway_mellat';
protected  $fillable=[
    'username'   ,
    'password'   ,
    'terminalId'  ,
    'callbackUrl'
];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}