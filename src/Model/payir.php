<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class payir extends Model
{
    protected $table = 'Gateway_payIr';
    protected $fillable = [
        'api',
        'callbackUrl'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}