<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class pasargad extends Model
{
    protected $table = 'Gateway_pasargad';
    protected $fillable = [
        'terminalId'  ,
        'merchantId'  ,
        'certificatePath'  ,
        'callbackUrl'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}