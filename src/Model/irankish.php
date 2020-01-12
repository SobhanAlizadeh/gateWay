<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class irankish extends Model
{
    protected $table = 'Gateway_iranKish';
    protected $fillable = [
        'merchantId' ,
        'sha1key' ,
        'callback-url'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}