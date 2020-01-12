<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class parsian extends Model
{
    protected $table = 'Gateway_parsian';
    protected $fillable = [
        'pin',
        'callbackUrl'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}