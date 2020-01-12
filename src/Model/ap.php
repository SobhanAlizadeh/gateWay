<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class ap extends Model
{
    protected $table = 'Gateway_ap';
    protected $fillable = [
        'merchantId'     => '',
        'merchantConfigId'     => '',
        'username' => '',
        'password' => '',
        'key' => '',
        'iv' => '',
        'callback-url'   => '/',
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}