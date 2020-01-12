<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class sadad extends Model
{
    protected $table = 'Gateway_sadad';
    protected $fillable = [
        'merchant'      ,
        'transactionKey',
        'terminalId'    ,
        'callbackUrl',
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}